

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="/css/foods-ordering.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sections'); ?>
    <section id="vendingNcafe">
        <div class="vac">
            <div class="vac-item">
                <div class="vac-item-header">
                    <figure class="vac-item-header-icon">
                        <img src="/img/vending&cafe/headericon.png" alt="vending&cafeIcon" />
                    </figure>
                    <div class="vac-item-header-title">
                        <p><?php echo e($category->title); ?></p>
                        <figure>
                            <img src="/<?php echo e(isset($member->profile_image) ? $member->profile_image : 'img/vending&cafe/usericon.png'); ?>"
                                alt="userIcon" />
                        </figure>
                    </div>
                </div>
                <div class="vac-item-address">
                    <div class="vac-item-address-title">
                        <p><?php echo e($content_language['mFRfK4X9XlJiSun']); ?></p>
                    </div>
                    <div class="vac-item-address-distance">
                        <div class="vac-item-address-distance-title">
                            <p><?php echo e($content_language['0un6xgfazoC’c&']); ?></p>
                        </div>
                        <div class="vac-item-address-distance-description" id="input-address-drop">
                            <p>120/34-35 Moo 24 Sila Khonkean Kho...</p>
                            <figure class="vac-item-address-distance-description-icon location-drop">
                                <a href="/map?type=drop&page=foods"><img src="/img/wash&dry/addressicon.png"
                                        alt="addressIcon" /></a>
                            </figure>
                        </div>
                        <div class="vac-item-address-distance-input">
                            <input type="text" name="drop_detail"
                                placeholder="More Detail : Lorem ipsum dolor sit amet consectetur. Cond..." />
                        </div>
                    </div>
                    <div class="vac-item-address-line"></div>
                </div>
                <div class="vac-item-phone">
                    <div class="vac-item-phone-title">
                        <p><?php echo e($content_language['Uxd43rYTfBOjjJA']); ?></p>
                    </div>
                    <div class="vac-item-phone-input">
                        <input type="number" name="phone_number"
                            placeholder="Please enter your phone number : 089-123-4567"
                            onkeydown="return event.keyCode !== 69" onkeyup="inputEmpty(this)" />
                    </div>
                    <div class="vac-item-phone-line"></div>
                </div>
                <div class="vac-item-branch">
                    <div class="wad-item-branch-title">
                        <p><?php echo e($content_language['787WjhhsYuNiIEY']); ?></p>
                    </div>
                    <div class="wad-item-branch-list">
                        <div class="wad-item-branch-list-title">
                            <p>a branch</p>
                        </div>
                        <div class="wad-item-branch-list-description" style="position: relative">
                            <p class="branch_selected" data-id="<?php echo e($branch[0]->id); ?>"
                                data-location="<?php echo e($branch[0]->location); ?>"><?php echo e($branch[0]->name); ?></p>
                            <figure onclick="dropDown()" onblur="closeDropdown()" tabindex="0"
                                class="wad-item-branch-list-description-dropdown active">
                                <img src="/img/wash&dry/dropdown.png" alt="dropDownIcon" />
                            </figure>
                            <div id="myDropdown" class="dropdown-content">
                                <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a
                                        onclick="onSelectBranch('<?php echo e($item->id); ?>', '<?php echo e($item->name); ?>', '<?php echo e($item->location); ?>')"><?php echo e($item->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="vac-item-pickup">
                        <div class="vac-item-pickup-title">
                            <p><?php echo e($content_language['JBcoUyvEt4jKaH1']); ?></p>
                        </div>
                        <div class="vac-item-pickup-button">
                            <button onclick="timeNow()" type="button" class="active" time-type="now">
                                <figure>
                                    <img src="/img/wash&dry/btnunactive.png" alt="buttonActiveIcon" />
                                </figure>
                                <?php echo e($content_language['bF1J4QuMHnHJrRl']); ?>

                            </button>
                            <button onclick="shipTime()" type="button" time-type="pick_time">
                                <figure style="display: none">
                                    <img src="/img/wash&dry/btnunactive.png" alt="buttonActiveIcon" />
                                </figure>
                                <?php echo e($content_language['ZNn1o6seq3qvI3I']); ?>

                            </button>
                        </div>
                        <div class="vac-item-pickup-calendar flex flex-col w-full justify-center items-center gap-1">
                            <label for=""
                                class="text-base text-white font-medium"><?php echo e($content_language['PaM4tOGaL3rbSvR']); ?></label>
                            <input id="datetime1" style="pointer-events: none"
                                class="opacity-50 font-medium text-center w-full rounded-full" type="datetime-local">
                            <input id="datetime2" style="display: none" class="font-medium text-center w-full rounded-full"
                                type="datetime-local">
                            <p id="formatted-date"></p>
                        </div>
                    </div>
                    <div class="vac-item-button">
                        <button onclick="NextPage()"><?php echo e($content_language['tIESWu7iMVDFlbb']); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.2/angular.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/confirmDate/confirmDate.js"></script>
    <script src="/js/pages/foods/ordering.js?v=<?php echo e(time()); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manam/public_html/resources/views/pages/food/ordering.blade.php ENDPATH**/ ?>