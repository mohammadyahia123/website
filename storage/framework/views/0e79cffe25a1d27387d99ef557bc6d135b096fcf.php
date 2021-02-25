<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php echo $__env->make('layouts.partial.posts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php if(Auth::user()): ?>
    <?php if(Auth::user()->name == 'admin'): ?>
       <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="<?php echo e(route('program.store')); ?>" class="form" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <label for="date">Openning Date</label>
                    <input type="date" class="form-control rounded-pill" name="opening_date" placeholder="Openning Date">
                    <input type="text" class="form-control rounded-pill" name="title" placeholder="title">
                    <input type="text" class="form-control rounded-pill" name="description" placeholder="description">
                    <input type="file" class="form-control rounded-pill" name="image" placeholder="Customer Image">
                    <button class="badge-pill badge-info form-control" type="submit">Add Program</button>
                </form>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card shadow my-4" style="border-top-right-radius: 30px;!important;">
        <div class="card-header bg-info" style="border-top-right-radius: 30px;!important;">
            <?php if(($post['hour']/24) > 1): ?>
                <?php echo e(($post['hour']/24).' days ago'); ?>

            <?php endif; ?>
            <?php if($post['hour']>0): ?>
                <?php echo e($post['hour'].' hours and '); ?>

            <?php endif; ?>
            <?php echo e($post['minute'].' minutes ago'); ?>

        </div>
        <div class="card-body">
            <div class="card-title">
                <?php echo e($post->title); ?>

            </div>
            <?php echo e($post->description); ?>

            <div class="img">
                <div class="row justify-content-center">
                    <div class="col-md-6"><img class="w-responsive" src="uploads/Ads/<?php echo e($post->image); ?>" style="max-width: 400px;" alt="image"></div>
                </div>
            </div>
        </div>
        <div class="card-footer bg-light text-right">
           Openning at: <?php echo e($post->opening_date); ?>


        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo $__env->make('layouts.partial.endposts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MOHAMMAD YAHIA\Desktop\wb\resources\views/student/home.blade.php ENDPATH**/ ?>