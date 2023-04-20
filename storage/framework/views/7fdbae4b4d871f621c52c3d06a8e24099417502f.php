<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="/css/foods-details.css?v=<?php echo e(time()); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sections'); ?>
    <section id="dish">
        <div class="dish">
            <div class="dish-item">
                <div class="dish-item-image">
                    <figure class="dish-item-image-dishimg">
                        <img src="/<?php echo e($product->thumbnail_link); ?>" alt="<?php echo e($product->thumbnail_alt); ?>" />
                    </figure>
                    <figure class="dish-item-image-shadow">
                        <img src="/img/dish/shadow.png" alt="shadowImage" />
                    </figure>
                </div>
                <div class="dish-item-content">
                    <div class="dish-item-content-title">
                        <p><?php echo e($product->title); ?></p>
                    </div>
                    <div class="dish-item-content-address">
                        <div class="dish-item-content-address-title">
                            <figure>
                                <img src="/img/dish/addresspin.png" alt="pinIcon" />
                            </figure>
                            <p><?php echo e($content_language['9vfWGKhNbMmSNLn']); ?></p>
                        </div>
                        <div class="dish-item-content-address-description">
                            <p>
                                <?php echo e($product->details); ?>

                            </p>
                        </div>
                        <div class="dish-item-content-address-price" product-price="<?php echo e($product->price); ?>">
                            <p><?php echo e($product->price); ?> <?php echo e($currency_symbol); ?></p>
                        </div>
                    </div>
                </div>
                <?php if($product->can_wave): ?>
                    <div class="dish-item-microwave">
                        <div class="dish-item-microwave-box">
                            <div class="dish-item-microwave-box-title">
                                <p><?php echo e($microwave[0]->type); ?></p>
                            </div>
                            <div class="dish-item-microwave-box-description">
                                <p><?php echo e($microwave[0]->details); ?></p>
                            </div>
                            <div class="dish-item-microwave-box-temp">
                                <div class="dish-item-microwave-box-temp-button">
                                    <?php $__currentLoopData = $microwave; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $wave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <button data-id="<?php echo e($wave->id); ?>" class="<?php echo e($key === 0 ? 'active' : ''); ?>">
                                            <figure>
                                                <img src="/img/dish/pick.png" alt="pickIcon" />
                                            </figure>
                                            <?php echo e($wave->name); ?>

                                        </button>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="dish-item-microwave-box-temp-input">
                                    <input type="text" name="requirements"
                                        placeholder="Requirements : Loremaa ipsum dolor sit amet dulo zen in dit nope..." />
                                </div>
                            </div>
                        </div>
                    </div>
                <?php elseif($product->can_sweet): ?>
                    <div class="bottle-item-sweetness">
                        <div class="bottle-item-sweetness-box">
                            <div class="bottle-item-sweetness-box-title">
                                <p><?php echo e($sweetness[0]->type); ?></p>
                            </div>
                            <div class="bottle-item-sweetness-box-description">
                                <p><?php echo e($sweetness[0]->details); ?></p>
                            </div>
                            <div class="bottle-item-sweetness-box-temp">
                                <div class="bottle-item-sweetness-box-temp-button">
                                    <?php $__currentLoopData = $sweetness; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sweet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <button data-id="<?php echo e($sweet->id); ?>" class="<?php echo e($key === 0 ? 'active' : ''); ?>">
                                            <figure>
                                                <img src="/img/bottle/pick.png" alt="pickIcon" />
                                            </figure>
                                            <?php echo e($sweet->name); ?>

                                        </button>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="bottle-item-sweetness-box-temp-input">
                                    <input type="text" name="requirements"
                                        placeholder="Requirements : Loremtt ipsum dolor sit amet dulo zen in dit nope..." />
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="dish-item-microwave-box-temp-input"
                        style="width: 100%; max-width:480px; margin: 0 auto; padding: 0 1.5rem;">
                        <input type="text" name="requirements"
                            placeholder="Requirements : Loremff ipsum dolor sit amet dulo zen in dit nope..." />
                    </div>
                <?php endif; ?>

                <div class="dish-item-quantity">
                    <div class="dish-item-quantity-box">
                        <button onclick="minusQuantity()" class="dish-item-quantity-box-left">
                            <figure>
                                <img src="/img/dish/minus.png" alt="minusIcon" />
                            </figure>
                        </button>
                        <div class="dish-item-quantity-box-mid">
                            <p><?php echo e($content_language['Q3PcqJGe9tbPH15']); ?></p>
                            <div class="dish-item-quantity-box-mid-number">
                                <p id="quantity">1</p>
                            </div>
                        </div>
                        <button onclick="plusQuantity()" class="dish-item-quantity-box-right">
                            <figure>
                                <img src="/img/dish/plus.png" alt="plusIcon" />
                            </figure>
                        </button>
                    </div>
                </div>
                <div class="dish-item-button">
                    <button onclick="addToCart(<?php echo e($product->id); ?>)" class="dish-item-button-content"
                        prev-id="<?php echo e($product->cate_id); ?>">
                        <div class="dish-item-button-content-left">
                            <figure>
                                <img src="/img/dish/carticon.png" alt="cartIcon" />
                            </figure>
                            <p><?php echo e($content_language['RyXtgXIWNjciCAN']); ?></p>
                        </div>
                        <div class="dish-item-button-content-right">
                            <p><?php echo e($content_language['yC2SXD73c5EJdak']); ?></p>
                            <b>0 <?php echo e($currency_symbol); ?></b>
                        </div>
                    </button>
                    <input id="currency" type="hidden" value="<?php echo e($currency_symbol); ?>">
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="/js/pages/foods/details.js?v=1.6.9"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manam/public_html/resources/views/pages/food/details.blade.php ENDPATH**/ ?>