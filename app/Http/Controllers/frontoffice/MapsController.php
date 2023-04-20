<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function getMap(Request $request){
        $lang = $request->session()->get('language') ? $request->session()->get('language') : 'th';
        $infos = $this->getWebInfo('', $lang);
        $webInfo = $this->infoSetting($infos);
        return view('pages.map-system.map', [
            'maximum_radius' => $webInfo->settings->maximum_radius->value
        ]);
    }

    public function test(){
        $order = Order::first();
        if(!$order){
            return response([
                'message' => 'error',
                'description' => 'order not found.'
            ], 404);
        }
        $this->notify_message($order);
        return response([
            'message' => 'ok',
            'description' => 'send message success.'
        ], 200);
    }
}
