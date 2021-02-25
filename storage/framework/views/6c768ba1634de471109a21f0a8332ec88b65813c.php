<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4">
            <form action="<?php echo e(route('ads.store')); ?>" class="form" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="text" class="form-control" name="title" placeholder="title">
                <input type="text" class="form-control" name="description" placeholder="description">
                <input type="file" class="form-control" name="image" placeholder="Customer Image">
                <button class="btn btn-secondary form-control my-5" type="submit" name="submit">CREATE ACCOUNT</button>
            </form>
    </div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MOHAMMAD YAHIA\Desktop\wb\resources\views/Ads/form.blade.php ENDPATH**/ ?>