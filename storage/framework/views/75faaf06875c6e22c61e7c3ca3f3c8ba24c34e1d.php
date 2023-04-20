<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="/css/food-payment.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sections'); ?>
    <section id="orderSummary">

        <div class="ordersum">
            <div class="ordersum-item">
                <div class="ordersum-item-header">
                    <figure class="ordersum-item-header-icon">
                        <img src="/img/order_summary/headericon.png" alt="headerIcon" />
                    </figure>
                    <div class="ordersum-item-header-title">
                        <p>Order Summary</p>
                        <figure>
                            <img src="/<?php echo e(isset($member->profile_image) ? $member->profile_image : '/img/order_summary/usericon.png'); ?>"
                                alt="userIcon" />
                        </figure>
                    </div>
                </div>
                <div class="ordersum-item-ordernum">
                    <p><?php echo e($content_language['f5gCBGmueM8bL7O']); ?></p>
                    <b><?php echo e($order_details->orders_number); ?></b>
                </div>
                <div class="ordersum-item-line"></div>
                <div class="ordersum-item-address">
                    <div class="ordersum-item-address-title">
                        <p id="maximum" data="<?php echo e($maximum_radius); ?>"><?php echo e($content_language['7Yhxn0M6FyeGl3Z']); ?></p>
                    </div>
                    <div class="ordersum-item-address-distance">
                        <div class="ordersum-item-address-distance-group">
                            <div class="ordersum-item-address-distance-group-title">
                                <p>Address</p>
                            </div>
                            <div class="ordersum-item-address-distance-group-description" id="input-address-drop"
                                drop-location="<?php echo e($order_details->delivery_drop); ?>"
                                drop-address="<?php echo e($order_details->delivery_drop_address); ?>">
                                <p><?php echo e($order_details->delivery_drop_address); ?></p>
                                <figure class="location-drop">
                                    <a href="/map?type=drop&page=foods/payment"><img src="/img/order_summary/pin.png"
                                            alt="pinIcon" /></a>
                                </figure>
                            </div>
                            <div class="ordersum-item-address-distance-group-detail">
                                <input type="text" value="<?php echo e($order_details->delivery_drop_address_more); ?>"
                                    name="drop_detail"
                                    placeholder="More Detail : Lorem ipsum dolor sit amet consectetur. Cond..." />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersum-item-line"></div>
                <div class="ordersum-item-phone">
                    <div class="ordersum-item-phone-title">
                        <p><?php echo e($content_language['7H8EKBAAbPaBOFl']); ?></p>
                    </div>
                    <div class="ordersum-item-phone-number">
                        <input type="number" name="phone_number" value="<?php echo e($order_details->phone_number); ?>"
                            placeholder="Please enter your phone number : 089-123-4567"
                            onkeydown="return event.keyCode !== 69" onkeyup="inputEmpty(this)" />
                    </div>
                </div>
                <div class="ordersum-item-line"></div>
                <div class="ordersum-item-branch">
                    <div class="ordersum-item-branch-title">
                        <p><?php echo e($content_language['dc3lgbeM61vY942']); ?></p>
                    </div>
                    <div class="ordersum-item-branch-content">
                        <div class="ordersum-item-branch-content-title">
                            <p>a branch</p>
                        </div>
                        <div class="wad-item-branch-list-description" style="position: relative">
                            <p class="branch_selected" data-location="<?php echo e($order_details->branch_location); ?>"
                                data-id="<?php echo e($order_details->branch_id); ?>" data-title="<?php echo e($order_details->branch_name); ?>">
                                <?php echo e($order_details->branch_name); ?></p>
                            <figure onclick="dropDown()" onblur="closeDropdown()" tabindex="0"
                                class="wad-item-branch-list-description-dropdown active">
                                <img src="/img/wash&dry/dropdown.png" alt="dropDownIcon" />
                            </figure>
                            <div id="myDropdown" class="dropdown-content">
                                <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a onclick="onSelectBranch('<?php echo e($item->id); ?>')"><?php echo e($item->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersum-item-line"></div>
                <div class="ordersum-item-shippingtime">
                    <div class="ordersum-item-shippingtime-title">
                        <p><?php echo e($content_language['5TOmOsWuMrugmS6']); ?></p>
                    </div>
                    <div class="ordersum-item-shippingtime-description">
                        <p><?php echo e($content_language['5TOmOsWuMrugmS6']); ?></p>
                    </div>
                    <div class="ordersum-item-shippingtime-content">
                        <div class="ordersum-item-shippingtime-content-title">
                            <p>Time</p>
                        </div>
                        <div class="ordersum-item-shippingtime-content-description">
                            <p><?php echo date('l, d, F, Y', strtotime($order_details->shipping_date)) .
                                '<br />' .
                                'Time: ' .
                                date('A H:i', strtotime($order_details->shipping_date)); ?></p>
                        </div>
                    </div>
                </div>
                <div class="ordersum-item-line"></div>
                <div class="ordersum-item-list">
                    <div class="ordersum-item-list-header">
                        <div class="ordersum-item-list-header-title">
                            <p><?php echo e($content_language['1rbNgqKi2Z0RbGA']); ?></p>
                        </div>
                        <div class="ordersum-item-list-header-description">
                            <p><?php echo e($content_language['SSLvj3L2arv0n4S']); ?></p>
                        </div>
                    </div>
                    <div class="ordersum-item-list-content">
                        <?php $__currentLoopData = $order_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="ordersum-item-list-content-group">
                                <div class="ordersum-item-list-content-group-maingroup">
                                    <figure class="ordersum-item-list-content-group-maingroup-left">
                                        <img src="/<?php echo e($value->thumbnail_link); ?>" alt="dishImage1" />
                                    </figure>
                                    <div class="ordersum-item-list-content-group-maingroup-right">
                                        <div class="ordersum-item-list-content-group-maingroup-right-title">
                                            <p><?php echo e($value->cate_title); ?></p>
                                            <div class="cart-item-list-content-group-right-top-right">
                                                <div style="display: flex; flex-direction: column; align-items: end;">
                                                    <?php if($value->microwave_name): ?>
                                                        <p>Mi: <?php echo e($value->microwave_name); ?></p>
                                                    <?php elseif($value->sweetness_name): ?>
                                                        <p>Mi: <?php echo e($value->sweetness_name); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-item-list-content-group-right-mid">
                                            <p><?php echo e($value->product_name); ?></p>
                                        </div>
                                        <div class="cart-item-list-content-group-right-bot">
                                            <div class="cart-item-list-content-group-right-bot-left">
                                                <p><?php echo e($value->price); ?> <?php echo e($currency_symbol); ?></p>
                                            </div>
                                            <div class="cart-item-list-content-group-right-bot-right">
                                                <p class="quantity">x<?php echo e($value->quantity); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ordersum-item-list-content-group-line"></div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="ordersum-item-list-content-sum">
                            <div class="ordersum-item-list-content-sum-title">
                                <p><?php echo e($content_language['PWSMvwRtaU6sSIO']); ?></p>
                                <p><?php echo e($content_language['qsLpFtrvkJon7yW']); ?></p>
                                <b><?php echo e($content_language['Haia2qvAFbJfBlG']); ?></b>
                            </div>
                            <div class="ordersum-item-list-content-sum-description" id="price_per_kilo"
                                data-price="<?php echo e($price_per_kilo); ?>">
                                <p name="subtotal" data="<?php echo e($sub_total); ?>"><?php echo e($sub_total); ?> <?php echo e($currency_symbol); ?>

                                </p>
                                <p name="shipped">0 <?php echo e($currency_symbol); ?></p>
                                <b name="total"><?php echo e($sub_total + 0); ?> <?php echo e($currency_symbol); ?></b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersum-item-line"></div>
                <div class="ordersum-item-payment">
                    <div class="ordersum-item-payment-header">
                        <div class="ordersum-item-payment-header-title">
                            <p><?php echo e($content_language['kUP6dQ7fL9vPvsr']); ?></p>
                        </div>
                        <div class="ordersum-item-payment-header-description">
                            <p><?php echo e($content_language['ORYUSsKvBhqEQDl']); ?></p>
                        </div>
                    </div>
                    <div class="ordersum-item-payment-type">
                        <div class="ordersum-item-payment-type-group" type="transfer">
                            <figure>
                                <img src="/img/order_summary/pick.png" alt="pickIcon" />
                            </figure>
                            <p><?php echo e($content_language['U9wUDU7CBossWRy']); ?></p>
                        </div>
                        <div class="ordersum-item-payment-type-group" type="cash">
                            <figure>
                                <img src="/img/order_summary/pick.png" alt="pickIcon" />
                            </figure>
                            <p><?php echo e($content_language['Kv2QOmFVbdg5icr']); ?></p>
                        </div>
                    </div>
                    <div class="ordersum-item-payment-bank">
                        <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="ordersum-item-payment-bank-group">
                                <figure>
                                    <img src="/<?php echo e($bank->bank_image); ?>" alt="bankIcon1" />
                                </figure>
                                <div class="ordersum-item-payment-bank-group-content">
                                    <div class="ordersum-item-payment-bank-group-content-title">
                                        <p><?php echo e($bank->bank_name); ?></p>
                                    </div>
                                    <div class="ordersum-item-payment-bank-group-content-description">
                                        <p><?php echo e($bank->bank_number); ?> <?php echo e($bank->bank_account); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ordersum-item-payment-bank-line"></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="ordersum-item-payment-slip">
                        <div class="ordersum-item-payment-slip-header">
                            <div class="ordersum-item-payment-slip-header-title">
                                <p><?php echo e($content_language['i83LfmDE84SJFMS']); ?></p>
                            </div>
                            <div class="ordersum-item-payment-slip-header-description">
                                <p><?php echo e($content_language['QUOb8F327AEoVCH']); ?></p>
                            </div>
                        </div>
                        <div class="ordersum-item-payment-slip-content">
                            <div class="ordersum-item-payment-slip-content-left">
                                <figure class="ordersum-item-payment-slip-content-left-upload">
                                    <img src="/img/order_summary/upload.png" alt="uploadIcon" />
                                </figure>
                            </div>
                            <div class="ordersum-item-payment-slip-content-right">
                                <p><?php echo e($content_language['PGPC1VPte0N2dM5']); ?></p>
                                <button onclick="uploadFile()"
                                    type="button"><?php echo e($content_language['VpSaD6RRUra02EC']); ?></button>
                                <p>or</p>
                                <button type="button"><?php echo e($content_language['cS4O1JRbehVEk3t']); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersum-item-button">
                    <div class="ordersum-item-button-title">
                        <p><?php echo e($content_language['7z14qgoHMPZl8ks']); ?></p>
                        <b name="totalb"><?php echo e($sub_total + 0); ?> <?php echo e($currency_symbol); ?></b>
                    </div>
                    <div class="ordersum-item-button-description">
                        <p><?php echo e($content_language['tk5I9UXxkKmoRTq']); ?></p>
                    </div>
                    <button type="button" onclick="confirmOrder()"><?php echo e($content_language['8Fpiey7pzpWEqBa']); ?></button>
                </div>
                <input id="currency" type="hidden" value="<?php echo e($currency_symbol); ?>">
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYXs0euMCEZ7Um37NqJfu8r9RkT5qlYk8&libraries=geometry,marker,places&callback=initMap&v=weekly"
        defer></script>
    <script src="/js/pages/foods/payment.js?v=<?php echo e(time()); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manam/public_html/resources/views/pages/food/payment.blade.php ENDPATH**/ ?>