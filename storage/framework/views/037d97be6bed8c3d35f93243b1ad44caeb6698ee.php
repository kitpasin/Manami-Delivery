<?php $__env->startSection('sections'); ?>
    <section id="profile">
        <div class="profile">
            <div class="profile-item">
                <div class="profile-item-header">
                    <div class="profile-item-header-box">
                        <figure class="profile-item-header-box-image" style="overflow:hidden;">
                            <img src="<?php echo e(isset($member->profile_image) ? $member->profile_image : '/img/profile/usericon.png'); ?>"
                                alt="userIcon" style="<?php echo e(isset($member->profile_image) ? 'height:100%;' : ''); ?>" />
                        </figure>
                        <div class="profile-item-header-box-top">
                            <p><?php echo date('d/m/Y', strtotime($member->created_at)); ?></p>
                            <p>ID : <?php echo e($member->line_id); ?></p>
                        </div>
                        <div class="profile-item-header-box-bot">
                            <p>Welcome Back</p>
                            <b><?php echo e($member->member_name); ?></b>
                        </div>
                    </div>
                </div>
                <div class="profile-item-content">
                    <div class="profile-item-content-box">
                        <div class="profile-item-content-box-title">
                            <p><?php echo e($content_language['VA387Rm5cV2ee3m']); ?></p>
                        </div>
                        <div class="profile-item-content-box-list">
                            <figure onclick="infoPage()">
                                <img src="/img/profile/infoicon.png" alt="informationIcon" />
                                <p><?php echo e($content_language['0Mi8LiRItTdSWOY']); ?></p>
                            </figure>
                            <figure onclick="orderhistoryPage()">
                                <img src="/img/profile/ordericon.png" alt="orderListIcon" />
                                <p><?php echo e($content_language['U4KviO5js49LqVr']); ?></p>
                            </figure>
                            <figure onclick="homePage()">
                                <img src="/img/profile/ordermoreicon.png" alt="orderListIcon" />
                                <p><?php echo e($content_language['8G3Qtqce5rVIn8r']); ?></p>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="profile-item-button">
                    <button onclick="signOut()"><?php echo e($content_language['PVVUFd0uFvJBwtg']); ?></button>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="/js/pages/profile/profile.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manam/public_html/resources/views/pages/profile/profile.blade.php ENDPATH**/ ?>