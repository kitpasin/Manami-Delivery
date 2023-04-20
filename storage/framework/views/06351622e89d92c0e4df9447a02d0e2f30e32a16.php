<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="/css/auth.css?v=<?php echo e(time()); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sections'); ?>
    <section id="index">
        <div class="index" style="overflow:auto">
            <div class="index-item" style="gap: 1rem;">
                <div class="index-item-logo">
                    <figure class="index-item-logo-mainlogo">
                        <img src="/img/home/mainlogogroup.png" alt="MainLogo" />
                    </figure>
                    <figure class="index-item-logo-textlogo">
                        <img src="/img/home/textlogo1.png" alt="TextLogo1" />
                        <img src="/img/home/textlogo2.png" alt="TextLogo2" />
                    </figure>
                </div>
                <div class="index-item-button" style="gap: 1rem;">
                    <button class="index-item-button-washndry"><a href="/washing"><?php echo e($content_language['Cq9xdCyinuQ4M08']); ?></a></button>
                    <button class="index-item-button-vendingncafe"><a href="/foods"><?php echo e($content_language['p7NhmzzCKEZHr5a']); ?></a></button>
                    <?php if(auth('web')->check()): ?>
                        <div class="home-item-user">
                            <figure class="home-item-user-icon" onclick="location.href='/profile'">
                                <a href="/profile"><img src="/<?php echo e(isset($member->profile_image) ? $member->profile_image : 'img/home/user.png'); ?>"
                                alt="userIcon" style="<?php echo e(isset($member->profile_image) ? 'height:100%;' : ''); ?>"></a>
                            </figure>
                            <div class="home-item-user-notice">
                                <p>Welcome Back</p>
                            </div>
                            <div class="home-item-user-name">
                                <p><?php echo e(Auth::guard('web')->user()->member_name); ?></p>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="index-item-button-line"></div>
                        <button class="index-item-button-login"><a href="/auth/auth-login">LOGIN</a></button>
                    <?php endif; ?>
                </div>
                <div class="index-item-language">
                    <div class="flex justify-end w-[6rem]">
                        <p class=""><?php echo e($content_language['3HgYorJLAMxNleL']); ?></p>
                    </div>
                    <img src="<?php echo e($language_active->flag); ?>" alt="">
                    <div class="relative inline-block w-[6rem]">
                        <button type="button"
                            class="lang-button inline-flex w-full justify-left gap-x-1.5 rounded-md"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            <?php echo e($language_active->name); ?>

                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="lang-dropdown absolute right-[20px] z-10 mt-4 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <?php $__currentLoopData = $language_available; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                    tabindex="-1" onclick="changeLanguage('<?php echo e($lang->abbv_name); ?>')"><?php echo e($lang->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="index-item-footer">
                    <div class="index-item-footer-link">
                        <a href="/content/termofservice"><?php echo e($content_language['3yRRcWdpAevbBQz']); ?></a>
                        <a href="/content/privacypolicy"><?php echo e($content_language['9o3ier2Fyu5Nscp']); ?></a>
                    </div>
                    <div class="index-item-footer-copyright">
                        <p>Copyright &#1042;� 2020-2023 Manami Vending Cafe. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    const langBtn = document.querySelector('.lang-button')
    langBtn.addEventListener('click', function(){
        const langDropdown = document.querySelector('.lang-dropdown')
        langDropdown.classList.toggle('show')
    })
    langBtn.addEventListener('blur', function(){
        const langDropdown = document.querySelector('.lang-dropdown')
        setTimeout(() => {
            langDropdown.classList.remove('show')
        }, 300);
    })

    function changeLanguage(lang){
        location.href = `/changeLanguage?lang=${lang}`
        // axios
        // .get(`/api-member/language/${lang}`)
        // .then((response) => {
        //     location.reload();
        // })
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manam/public_html/resources/views/pages/auth/auth.blade.php ENDPATH**/ ?>