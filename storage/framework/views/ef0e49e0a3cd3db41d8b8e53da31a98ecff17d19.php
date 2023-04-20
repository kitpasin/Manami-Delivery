<?php $__env->startSection('sections'); ?>
    <section id="washing">
        <div class="washing">
            <div class="washing-item">

                <?php echo $__env->make('layouts.banner-profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="washing-item-type">
                    <div class="washing-item-type-capacity">
                        <div class="washing-item-type-capacity-title">
                            <p><?php echo e($capacityTitle->title); ?></p>
                        </div>
                        <div class="washing-item-type-capacity-description">
                            <p><?php echo e($capacityTitle->details); ?></p>
                        </div>
                        <div class="washing-item-type-capacity-content">
                            <?php $__currentLoopData = $capacity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="washing-item-type-capacity-content-group <?php echo e($key === 0 ? 'active' : ''); ?>"
                                    data-id="<?php echo e($item->id); ?>" data-price="<?php echo e($item->price); ?>">
                                    <figure class="washing-item-type-capacity-content-group-pick">
                                        <img src="/img/washing/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="washing-item-type-capacity-content-group-icon">
                                        <img src="/<?php echo e($item->thumbnail_link); ?>" alt="<?php echo e($item->thumbnail_alt); ?>">
                                    </figure>
                                    <p><?php echo e($item->title); ?></p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="washing-item-type-watertemp">
                        <div class="washing-item-type-watertemp-title">
                            <p><?php echo e($waterTempTitle->title); ?></p>
                        </div>
                        <div class="washing-item-type-watertemp-description">
                            <p><?php echo e($waterTempTitle->details); ?></p>
                        </div>
                        <div class="washing-item-type-watertemp-content">
                            <?php $__currentLoopData = $waterTemp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="washing-item-type-watertemp-content-group <?php echo e($key === 0 ? 'active' : ''); ?>"
                                    data-id="<?php echo e($item->id); ?>" data-price="<?php echo e($item->price); ?>">
                                    <figure class="washing-item-type-watertemp-content-group-pick">
                                        <img src="/img/washing/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="washing-item-type-watertemp-content-group-icon">
                                        <img src="/<?php echo e($item->thumbnail_link); ?>" alt="<?php echo e($item->thumbnail_alt); ?>">
                                    </figure>
                                    <p><?php echo e($item->title); ?></p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="washing-item-type-button">
                        <button onclick="saveWashing('/washing/dry')">
                            <figure>
                                <img src="/img/washing/plus.png" alt="plusIcon">
                            </figure>
                            <?php echo e($content_language['T9etzQlS2d60d2v']); ?>

                        </button>
                    </div>
                </div>
                <div class="washing-item-button">
                    <button onclick="summaryPage()" class="btn-summary" data-price="<?php echo e($total_list); ?>">
                        <figure>
                            <img src="/img/washing/btn1icon.png" alt="washingIcon">
                            <?php echo e($total_list); ?>

                        </figure>
                        <p>|</p>
                        <p><?php echo e($total_price); ?> <?php echo e($currency_symbol); ?></p>
                    </button>
                    <button onclick="saveWashing('/washing/cart')" class="add-to-cart">
                        <figure>
                            <img src="/img/washing/btn2icon.png" alt="dryingIcon">
                            <?php echo e($content_language['Uq0uPjcGCK5s8ik']); ?>

                        </figure>
                        <p>0 <?php echo e($currency_symbol); ?></p>
                    </button>
                </div>
                <input id="currency" type="hidden" name="" value="<?php echo e($currency_symbol); ?>">
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="/js/pages/washing/washing.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manam/public_html/resources/views/pages/washing/washing.blade.php ENDPATH**/ ?>