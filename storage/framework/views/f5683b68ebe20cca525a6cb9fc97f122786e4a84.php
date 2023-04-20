<?php $__env->startSection('sections'); ?>
    <section id="cart">

        <div class="cart">
            <div class="cart-item">
                <div class="cart-item-header">
                    <figure class="cart-item-header-icon">
                        <img src="/img/cart/headericon.png" alt="headerIcon" />
                    </figure>
                    <div class="cart-item-header-title">
                        <p>Cart</p>
                        <figure>
                            <img src="/<?php echo e(isset($member->profile_image) ? $member->profile_image : '/img/cart/usericon.png'); ?>"
                                alt="userIcon" />
                        </figure>
                    </div>
                </div>
                <div class="cart-item-list">
                    <div class="cart-item-list-header">
                        <div class="cart-item-list-header-title">
                            <p><?php echo e($content_language['SLczhvM483BnChZ']); ?></p>
                            <b style="font-size: 16px;"><?php echo e($order_item[0]->orders_number); ?></b>
                        </div>
                        <div class="cart-item-list-header-description">
                            <p>The choice will affect the price of using the service.</p>
                        </div>
                    </div>
                    <div class="cart-item-list-content" style="padding-bottom: 6rem;">
                        
                        <?php $__currentLoopData = $order_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="cart-item-list-content-group">
                                <div class="cart-item-list-content-group-left">
                                    <figure>
                                        <img src="/<?php echo e($item->thumbnail_link); ?>" alt="orderImage1" />
                                    </figure>
                                </div>
                                <div class="cart-item-list-content-group-right">
                                    <div class="cart-item-list-content-group-right-top">
                                        <p><?php echo e($item->cate_title); ?></p>
                                        <div class="cart-item-list-content-group-right-top-right">
                                            <div style="display: flex; flex-direction: column; align-items: end;">
                                                <?php if($item->microwave_name): ?>
                                                    <p>Mi: <?php echo e($item->microwave_name); ?></p>
                                                <?php elseif($item->sweetness_name): ?>
                                                    <p>Mi: <?php echo e($item->sweetness_name); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <figure
                                                onclick="drop('<?php echo e($item->orders_number); ?>', '<?php echo e($item->product_id); ?>', '<?php echo e($item->cart_number); ?>')">
                                                <img src="/img/cart/dropicon.png" alt="dropIcon" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="cart-item-list-content-group-right-mid">
                                        <p><?php echo e($item->product_title); ?></p>
                                    </div>
                                    <div class="cart-item-list-content-group-right-bot">
                                        <div class="cart-item-list-content-group-right-bot-left">
                                            <p><?php echo e($item->price); ?> <?php echo e($currency_symbol); ?></p>
                                        </div>
                                        <div class="cart-item-list-content-group-right-bot-right">
                                            <figure
                                                onclick="minusQuantity('<?php echo e($item->orders_number); ?>', <?php echo e($item->product_id); ?>,<?php echo e($item->quantity); ?>,<?php echo e($item->cart_number); ?>)">
                                                <img src="/img/cart/minus.png" alt="minusIcon" />
                                            </figure>
                                            <p class="quantity"><?php echo e($item->quantity); ?></p>
                                            <figure
                                                onclick="plusQuantity('<?php echo e($item->orders_number); ?>', <?php echo e($item->product_id); ?>,<?php echo e($item->quantity); ?>,<?php echo e($item->cart_number); ?>)">
                                                <img src="/img/cart/plus.png" alt="plusIcon" />
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item-list-content-line"></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="cart-item-button">
                    <div class="cart-item-button-receipt">
                        <div class="cart-item-button-receipt-title">
                            <div class="cart-item-button-receipt-title-left">
                                <p><?php echo e($content_language['7cRkAf4XU4Ntfml']); ?></p>
                            </div>
                            <div class="cart-item-button-receipt-title-right">
                                <p><?php echo e($total_price); ?> <?php echo e($currency_symbol); ?></p>
                            </div>
                        </div>
                        <div class="cart-item-button-receipt-description">
                            <p><?php echo e($content_language['4GX41aMsumE0xYz']); ?></p>
                        </div>
                    </div>
                    <div class="cart-item-button-action">
                        <button onclick="foodNdrinkPage()">
                            <figure>
                                <img src="/img/cart/btnplus.png" alt="plusIcon" />
                                <p><?php echo e($content_language['DKRaKGXtC0KH8GS']); ?></p>
                            </figure>
                        </button>
                        <button onclick="confirmCart()">
                            <p><?php echo e($content_language['LqAJbHs4BBPdMKq']); ?></p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="/js/pages/foods/cart.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manam/public_html/resources/views/pages/food/cart.blade.php ENDPATH**/ ?>