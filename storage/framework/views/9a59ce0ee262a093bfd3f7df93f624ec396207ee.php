<div class="orderdetail-item-header" style="--background: url(/<?php echo e(isset($category) ? $category->banner : ''); ?>)">
    <figure class="orderdetail-item-header-icon">
        <img src="/<?php echo e(isset($category) ? $category->icon : ''); ?>"
            alt="<?php echo e(isset($category) ? $category->banner_alt : ''); ?>" />
    </figure>
    <div class="orderdetail-item-header-title">
        <p><?php echo e(isset($category) ? $category->title : ''); ?></p>
    </div>
</div>
<?php /**PATH /home/manam/public_html/resources/views/layouts/banner.blade.php ENDPATH**/ ?>