<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="/css/foods-menu.css?v=<?php echo e(time()); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sections'); ?>
    <section id="food">
        <div class="food">
            <div class="food-item">
                <div class="food-item-header">
                    <figure class="food-item-header-icon">
                        <img src="/img/food/headericon.png" alt="wash&DryIcon" />
                    </figure>
                    <div class="food-item-header-title">
                        <p><?php echo e($category->title); ?></p>
                        <figure>
                            <img src="/<?php echo e(isset($member->profile_image) ? $member->profile_image : 'img/food/usericon.png'); ?>"
                                alt="userIcon" />
                        </figure>
                    </div>
                </div>
                <div class="food-item-category">
                    <div class="food-item-category-title">
                        <p><?php echo e($content_language['gcQtJs1mG7LpSH9']); ?></p>
                    </div>
                    <div class="food-item-category-search">
                        <figure>
                            <img src="/img/food/searchicon.png" alt="searchIcon" />
                        </figure>
                        <input id="search" type="text" placeholder="Search" />
                    </div>
                    <div class="food-item-category-list">
                        <?php $__currentLoopData = $product_cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="food-item-category-list-box" cate-id="<?php echo e($pcat->id); ?>">
                                <figure>
                                    <img src="/<?php echo e($pcat->thumbnail_link); ?>" alt="snackIcon" style="opacity: 0.7;" />
                                </figure>
                                <p><?php echo e($pcat->title); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="food-item-category-dish">
                        <?php $__currentLoopData = $foodNDrink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="food-item-category-dish-box" dish-id="<?php echo e($food->id); ?>">
                                <figure>
                                    <img src="/<?php echo e($food->thumbnail_link); ?>" alt="dishImage1" />
                                </figure>
                                <p><?php echo e($food->title); ?></p>
                                <b><?php echo e($food->price); ?> <?php echo e($currency_symbol); ?></b>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="food-item-button">
                    <button onclick="cartPage()" class="food-item-button-content">
                        <div class="food-item-button-content-left">
                            <figure>
                                <img src="/img/food/carticon.png" alt="cartIcon" />
                            </figure>
                            <p><?php echo e($total_list); ?></p>
                        </div>
                        <div class="food-item-button-content-right">
                            <p><?php echo e($content_language['yC2SXD73c5EJdak']); ?></p>
                            <b><?php echo e($total_price); ?> <?php echo e($currency_symbol); ?></b>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="/js/pages/foods/menu.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manam/public_html/resources/views/pages/food/menu.blade.php ENDPATH**/ ?>