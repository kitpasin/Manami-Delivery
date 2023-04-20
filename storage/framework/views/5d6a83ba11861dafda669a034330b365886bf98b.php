<?php $__env->startSection('sections'); ?>
    <section id="login">
        <div class="login">
            <div class="login-item">
                <div class="login-item-header">
                    <div class="login-item-header-title">
                        <p><?php echo e($content->cate_title); ?></p>
                    </div>
                </div>
                <div class="login-item-form">
                    <div class="login-item-form-input">
                        <div class="login-item-form-input-name">
                            <label for="name"><?php echo e($content_language['mWknhrfWv6PwDmn']); ?></label>
                            <input id="name" type="text" placeholder="Enter your email"/>
                        </div>
                        <div class="login-item-form-input-password">
                            <label for="password">
                                <?php echo e($content_language['oqDOCTJhyfiUGKk']); ?>

                                <img onclick="showPassword()" src="/img/login/showpassword.png" alt="showPasswordIcon" />
                            </label>
                            <input id="password" type="password" placeholder="***************"/>
                        </div>
                    </div>
                    <div class="login-item-form-action">
                        <button onclick="login()"><?php echo e($content_language['4MvipEFalEb7VGl']); ?></button>
                        <a href="/auth/auth-forgot"><?php echo e($content_language['w7GiRktRhYFXMnt']); ?></a>
                    </div>
                    <div class="login-item-form-line"></div>
                    <div class="login-item-form-register">
                        <p><?php echo e($content_language['y3WrYXiFdyNobSR']); ?></p>
                        <button><a href="/auth/auth-signup"><?php echo e($content_language['dyhF0VX3CirDm7Z']); ?></a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="/js/pages/auth/login.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manam/public_html/resources/views/pages/auth/auth-login.blade.php ENDPATH**/ ?>