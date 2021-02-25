<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if(Auth::user()): ?>
                <?php if(Auth::user()->name == 'admin'): ?>
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Welcome Dear Admin')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are open to make changes!')); ?>

                </div>
            </div>
                <?php else: ?>
                    <div class="card">
                        <div class="card-header text-center"><?php echo e(__('Welcome Dear User')); ?></div>

                        <div class="card-body">
                            <?php if(session('status')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>

                            <?php echo e(__('You are not logged in as Admin!')); ?>

                        </div>
                    </div>
                    <?php endif; ?>
            <?php else: ?>
                <div class="card">
                    <div class="card-header text-center"><?php echo e(__('Welcome Dear Guest')); ?></div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <?php echo e(__('You are not logged in!')); ?>

                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
    <?php if(Auth::user()): ?>
        <?php if(Auth::user()->name == 'admin'): ?>
            <div class="row justify_content-center">
                <div class="col-md-6">
                    <a type="submit" style="margin-top: 30px;font-size: larger; height: 50px; color: #fff; padding-top: 10px; font-weight: bolder;" class="btn align-middle bg-info btn-block badge-pill" href="<?php echo e(route('student.create')); ?>">Add Student</a>
                    <a type="submit" style="margin-top: 40px;font-size: larger; height: 50px; color: #fff; padding-top: 10px; font-weight: bolder;" class="btn align-middle bg-info btn-block badge-pill" href="<?php echo e(route('employee.create')); ?>">Add Employee</a>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-12 mt-4">
                            <form action="<?php echo e(route('ads.store')); ?>" class="form" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="text" class="form-control rounded-pill" name="title" placeholder="title">
                                <input type="text" class="form-control rounded-pill" name="description" placeholder="description">
                                <input type="file" class="form-control rounded-pill" name="image" placeholder="Customer Image">
                                <button class="badge-pill badge-info form-control" type="submit">Add Advertisement</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row justify-content-between">
            <div class="col-md-6">
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
            </div>
            <div class="col-md-6">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <form action="<?php echo e(route('committee.store')); ?>" class="form" method="post">
                        <?php echo csrf_field(); ?>
                        <label for="committee">Add A Committee</label>
                        <input type="text" id="committee" class="form-control rounded-pill" name="name" placeholder="A Committee Name">
                        <button class="badge-pill badge-info form-control" type="submit">Add Committee</button>
                    </form>
                </div>
                <div class="col-md-12">
                    <form action="<?php echo e(route('department.store')); ?>" class="form" method="post">
                        <?php echo csrf_field(); ?>
                        <label for="department">Add A Department</label>
                        <input type="text" id="department" class="form-control rounded-pill" name="name" placeholder="A Department Name">
                        <button class="badge-pill badge-info form-control" type="submit">Add Department</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
            <div class="row justify-content-center">

            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<hr>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MOHAMMAD YAHIA\Desktop\wb\resources\views/settings.blade.php ENDPATH**/ ?>