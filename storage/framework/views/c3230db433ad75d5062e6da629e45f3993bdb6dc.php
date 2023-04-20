<?php $__env->startSection('sections'); ?>
    <section id="wadList">
        <div class="wadlist">
            <div class="wadlist-item">

                <?php echo $__env->make('layouts.banner-profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="wadlist-item-list">
                    <div class="wadlist-item-list-header">
                        <div class="wadlist-item-list-header-title">
                            <p><?php echo e($category->cate_h1); ?></p>
                            <b><?php echo e($total_list); ?> <?php echo e($content_language['nv3bC1sslhJtORf']); ?></b>
                        </div>
                        <div class="wadlist-item-list-header-description">
                            <p><?php echo e($category->cate_h2); ?></p>
                        </div>
                    </div>
                    <div class="wadlist-item-list-content">
                        <?php $__currentLoopData = $order_temp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="wadlist-item-list-content-group">
                                <div class="wadlist-item-list-content-group-maingroup">
                                    <figure class="wadlist-item-list-content-group-maingroup-left">
                                        <img src="/img/wash&drylist/washing.png" alt="washingIcon" />
                                    </figure>
                                    <div class="wadlist-item-list-content-group-maingroup-right">
                                        <div class="wadlist-item-list-content-group-maingroup-right-title">
                                            <p><?php echo e($content_language['qdXfwhf2HWyorZx']); ?></p>
                                            <figure onclick='removeFromCart("<?php echo e($value[0]->orders_number); ?>","<?php echo e($value[0]->page_id); ?>","<?php echo e($value[0]->cart_number); ?>")'>
                                                <img src="/img/wash&drylist/drop.png" alt="dropIcon" />
                                            </figure>
                                        </div>
                                        <div class="wadlist-item-list-content-group-maingroup-right-description">
                                            <p><?php echo e($value[0]->title); ?></p>
                                            <b><?php echo e($value[0]->totalPrice); ?> <?php echo e($currency_symbol); ?></b>
                                        </div>
                                    </div>
                                </div>
                                <?php if(isset($value[1])): ?>
                                    <div class="wadlist-item-list-content-group-subgroup">
                                        <figure class="wadlist-item-list-content-group-subgroup-left">
                                            <img src="/img/wash&drylist/drying.png" alt="dryingIcon" />
                                        </figure>
                                        <div class="wadlist-item-list-content-group-subgroup-right">
                                            <div class="wadlist-item-list-content-group-subgroup-right-title">
                                                <p><?php echo e($content_language['1nbuWBfbhmnP9pp']); ?></p>
                                                <figure onclick='removeFromCart("<?php echo e($value[1]->orders_number); ?>","<?php echo e($value[1]->page_id); ?>","<?php echo e($value[1]->cart_number); ?>")'>
                                                    <img src="/img/wash&drylist/drop.png" alt="dropIcon" />
                                                </figure>
                                            </div>
                                            <div class="wadlist-item-list-content-group-subgroup-right-description">
                                                <p>Drying, <?php echo e($value[1]->title); ?>, <?php echo e($value[1]->default_minutes + $value[1]->minutes_add); ?> minutes</p>
                                                <b><?php echo e($value[1]->totalPrice); ?> <?php echo e($currency_symbol); ?></b>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="wadlist-item-list-content-group-detail">
                                    <p><?php echo e($content_language['zXzllHCdt8Yf88l']); ?> <?php echo e($value[0]->details); ?></p>
                                </div>
                                <div class="wadlist-item-list-content-group-line"></div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="wadlist-item-button">
                        <div class="wadlist-item-button-receipt">
                            <div class="wadlist-item-button-receipt-title">
                                <div class="wadlist-item-button-receipt-title-left">
                                    <p><?php echo e($content_language['7cRkAf4XU4Ntfml']); ?></p>
                                </div>
                                <div class="wadlist-item-button-receipt-title-right">
                                    <p><?php echo e($total_price); ?> <?php echo e($currency_symbol); ?></p>
                                </div>
                            </div>
                            <div class="wadlist-item-button-receipt-description">
                                <p>Discounts and shipping are not included.</p>
                            </div>
                        </div>
                        <div class="wadlist-item-button-action">
                            <button type="button" onclick="wadPage()">
                                <figure>
                                    <img src="/img/wash&drylist/plus.png" alt="plusIcon" />
                                    <p><?php echo e($content_language['DKRaKGXtC0KH8GS']); ?></p>
                                </figure>
                            </button>
                            <button type="button" onclick="ordersumPage()">
                                <p><?php echo e($content_language['LqAJbHs4BBPdMKq']); ?></p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="/js/pages/washing/cart.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manam/public_html/resources/views/pages/washing/cart.blade.php ENDPATH**/ ?>