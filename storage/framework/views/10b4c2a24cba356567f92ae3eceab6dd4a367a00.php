<div class="wad-item-header" style="--background: url(/<?php echo e(isset($category) ? $category->banner : ''); ?>)">
    <figure class="wad-item-header-icon">
        <img src="<?php echo e(isset($category) ? $category->icon : ''); ?>"
            alt="<?php echo e(isset($category) ? $category->banner_alt : ''); ?>" />
    </figure>
    <div class="wad-item-header-title">
        <p><?php echo e(isset($category) ? $category->title : ''); ?></p>
        <figure onclick="location.href = '/profile';" style="cursor: pointer;">
            <img src="/<?php echo e(isset($member->profile_image) ? $member->profile_image : 'img/wash&dry/headerusericon.png'); ?>"
                alt="userIcon" />
        </figure>
    </div>
</div>
<?php /**PATH /home/manam/public_html/resources/views/layouts/banner-profile.blade.php ENDPATH**/ ?>