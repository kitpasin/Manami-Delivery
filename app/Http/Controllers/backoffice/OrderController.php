<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderPayment;
use App\Models\Product;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function getOrder(Request $request)
    {
        $search = $request->search != "null" ? $request->search : "";
        try {
            $data = Order::select(
                'orders.*',
                'order_statuses.name as status_name',
                'member_accounts.member_name',
                'branch_infos.name as branch_name',
                'order_payments.type as type_payment',
                'order_payments.slip_image',
                'order_payments.verified as payment_verified'
            )
                ->join('order_statuses', 'orders.status_id', 'order_statuses.id')
                ->join('member_accounts', 'orders.member_id', 'member_accounts.id')
                ->join('order_payments', 'orders.orders_number', 'order_payments.orders_number')
                ->join('branch_infos', 'orders.branch_id', 'branch_infos.id')
                ->where('orders.orders_number', 'like', '%' . $search . '%')
                ->orderBy('orders.created_at', 'DESC')
                ->get();

            return response([
                'message' => 'ok',
                'description' => 'get order success',
                'data' => $data
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'errorMessage' => $e->getMessage(),
            ], 500);
        }
    }

    public function getOrderByOrderNumber(Request $request)
    {
        try {
            $order = Order::select(
                'orders.*',
                'order_statuses.name as status_name',
                'member_accounts.member_name',
                'branch_infos.name as branch_name',
                'order_payments.type as type_payment',
                'order_payments.slip_image',
                'order_payments.verified as payment_verified'
            )
                ->join('order_statuses', 'orders.status_id', 'order_statuses.id')
                ->join('order_payments', 'orders.orders_number', 'order_payments.orders_number')
                ->join('member_accounts', 'orders.member_id', 'member_accounts.id')
                ->join('branch_infos', 'orders.branch_id', 'branch_infos.id')
                ->where(['orders.orders_number' => $request->orders_number, 'orders.type_order' => $request->type])
                ->first();
            if (!$order) {
                return response([
                    'message' => 'error',
                    'status' => false,
                    'description' => 'Order not found.'
                ], 404);
            }
            $data = array();
            $totalPrice = 0;
            if ($request->type == 'washing') {
                $order_items = $this->getOrderWashItemAdmin($request->orders_number, $order->language);
                foreach ($order_items as $key => $value) {
                    $more_price = 0;
                    if ($value->round_minutes > 0) {
                        $more_price = (($value->minutes_add / $value->round_minutes) * $value->price_per_minutes);
                    }
                    $value->totalPrice = $value->totalPrice + $more_price;
                    $totalPrice += $value->totalPrice;
                    $value->title = str_replace(",", ", ", $value->title);
                    array_push($data, $value);
                }
            } else if ($request->type == 'foods') {
                $order_items = $this->getOrderFoodsItemAdmin($request->orders_number, $order->language);
                foreach ($order_items as $key => $value) {
                    $totalPrice += (int)$value->price * (int)$value->quantity;
                    array_push($data, $value);
                }
            }
            $order->orderList = $data;
            $order->totalPrice = $totalPrice;

            return response([
                'message' => 'ok',
                'description' => 'get order success',
                'data' => $order
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'errorMessage' => $e->getMessage(),
            ], 500);
        }
    }

    public function updateOrderStatus(Request $request)
    {
        try {
            $order = Order::where(['orders_number' => $request->orders_number])->first();
            if (!$order) {
                return response([
                    'message' => 'error',
                    'status' => false,
                    'description' => 'Order not found.'
                ], 404);
            }
            $order->status_id = $request->status_id;
            $order->save();
            return response([
                'message' => 'ok',
                'description' => 'update order status success',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'errorMessage' => $e->getMessage(),
            ], 500);
        }
    }

    public function approveOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'orders_number' => "string|required",
            'pickup_image' => "mimes:jpg,png,jpeg,pdf|max:5000|nullable",
            'drop_image' => "mimes:jpg,png,jpeg,pdf|max:5000|nullable",
        ]);
        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }
        try {
            $files = $request->allFiles();
            $order = Order::where(['orders_number' => $request->orders_number])->first();
            if (!$order) {
                return response([
                    'message' => 'error',
                    'status' => false,
                    'description' => 'Order not found.'
                ], 404);
            }
            if (isset($files['pickup_image'])) {
                /* Upload Pickup Image */
                $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
                $order->pickup_image = $this->uploadImage($newFolder, $files['pickup_image'], "", "");
            }
            $order->status_id = 3;
            $order->save();
            return response([
                'message' => 'ok',
                'description' => 'update order status success',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'errorMessage' => $e->getMessage(),
            ], 500);
        }
    }

    public function sendOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'orders_number' => "string|required",
            'pickup_image' => "mimes:jpg,png,jpeg,pdf|max:5000|nullable",
            'drop_image' => "mimes:jpg,png,jpeg,pdf|max:5000|nullable",
        ]);
        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }
        try {
            $files = $request->allFiles();
            $order = Order::where(['orders_number' => $request->orders_number])->first();
            if (!$order) {
                return response([
                    'message' => 'error',
                    'status' => false,
                    'description' => 'Order not found.'
                ], 404);
            }
            if (isset($files['drop_image'])) {
                /* Upload Drop Image */
                $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
                $order->drop_image = $this->uploadImage($newFolder, $files['drop_image'], "", "");
            }
            $order->status_id = 4;
            $order->save();
            return response([
                'message' => 'ok',
                'description' => 'update order status success',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'errorMessage' => $e->getMessage(),
            ], 500);
        }
    }

    public function deleteOrder(Request $request)
    {
        try {
            $order = Order::where(['orders_number' => $request->orders_number])->first();
            if (!$order) {
                return response([
                    'message' => 'error',
                    'status' => false,
                    'description' => 'Order not found.'
                ], 404);
            }
            OrderItem::where(['orders_number' => $request->orders_number])->delete();
            $order->delete();
            return response([
                'message' => 'ok',
                'description' => 'delete order success',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'errorMessage' => $e->getMessage(),
            ], 500);
        }
    }

    public function verifiedPayment(Request $request)
    {
        try {
            $order = OrderPayment::where(['orders_number' => $request->orders_number])->first();
            if (!$order) {
                return response([
                    'message' => 'error',
                    'status' => false,
                    'description' => 'Order payment not found.'
                ], 404);
            }
            $order->verified = true;
            $order->save();
            return response([
                'message' => 'ok',
                'description' => 'update order status success',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'errorMessage' => $e->getMessage(),
            ], 500);
        }
    }

    public function verifiedOrderWashItem(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'orders_number' => "string|required",
            'product_id' => "numeric|required",
            'page_id' => "numeric|required",
            'cart_number' => "numeric|required",
            'weight' => "string|required",
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            $orders = Order::where(['orders_number' => $request->orders_number])->first();
            if (!$orders) {
                return response([
                    'message' => 'error',
                    'description' => 'Order not found.'
                ], 404);
            }

            $item = OrderItem::where(['orders_number' => $request->orders_number, 'page_id' => $request->page_id, 'cart_number' => $request->cart_number, 'product_cate_id' => 3])->first();
            if ($item->product_id != $request->product_id) {
                $product = Product::where(['id' => $request->product_id, 'language' => $orders->language])->first();
                $item->minutes_add = 0;
                $item->product_id = $product->id;
                $item->product_price = $product->price;
                $item->product_name = $product->title;
            }
            $item->weight = $request->weight;
            $item->verified = true;
            $item->save();

            $totalPrice = 0;
            $order_items = $this->getOrderWashItemAdmin($request->orders_number, $orders->language);
            foreach ($order_items as $key => $value) {
                $more_price = 0;
                if ($value->round_minutes > 0) {
                    $more_price = (($value->minutes_add / $value->round_minutes) * $value->price_per_minutes);
                }
                $value->totalPrice = $value->totalPrice + $more_price;
                $totalPrice += $value->totalPrice;
            }
            $orders->total_price = $totalPrice;
            $orders->save();
            return response([
                'message' => 'ok',
                'description' => 'update order item verified success',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'errorMessage' => $e->getMessage(),
            ], 500);
        }
    }

    public function getOrderPending(Request $request)
    {
        try {
            $data = (Order::where(['status_id' => 2])->get()) ? Order::where(['status_id' => 2])->get() : [];
            return response([
                'message' => 'ok',
                'description' => 'get order by pending status success',
                'data' => count($data) 
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'errorMessage' => $e->getMessage(),
            ], 500);
        }
    }
}
