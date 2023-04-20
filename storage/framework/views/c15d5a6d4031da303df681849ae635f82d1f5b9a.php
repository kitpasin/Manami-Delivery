<?php $__env->startSection('sections'); ?>
    <section id="termOfService">

        <div class="tos">
            <div class="tos-item">

                <?php echo $__env->make('layouts.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="tos-item-content">
                    <div class="tos-item-content-title">
                        <p><?php echo e($content->description); ?></p>
                    </div>
                    <div class="tos-item-content-description">
                        <?php echo $content->content; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="/js/pages/termofservice.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manam/public_html/resources/views/pages/policy/content.blade.php ENDPATH**/ ?>