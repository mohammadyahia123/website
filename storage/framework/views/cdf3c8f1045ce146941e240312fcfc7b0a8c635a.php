<div class="row mx-0 mt-4 justify-content-center">
    <div class="col-md-2">
    <?php if(Auth::user()): ?>
        <?php if(Auth::user()->name == 'admin'): ?>
            <a type="submit" class="btn bg-info btn-block badge-pill" href="<?php echo e(route('student.create')); ?>">Add Student</a>
        <?php endif; ?>
    <?php endif; ?>
            <div id='aside' class="sticky-top bg-white shadow" style="max-height: 600px;background-color: #ddd; border-top-left-radius: 40px;
    <?php if(Auth::user()): ?>
        <?php if(Auth::user()->name == 'admin'): ?>
            margin-top: 200px;
        <?php endif; ?>
    <?php else: ?>
        margin-top: 25px;
    <?php endif; ?>">
        <ul class="nav flex-column mx-auto pt-5" id="ul">
            <li class="nav-item" ><a  onclick="active('#l1');" href="<?php echo e(route('welcome')); ?>" class="nav-link">Advertisements</a></li>
            <li class="nav-item " id="l2"><a onclick="active('#l2');" href="<?php if(Auth::user()): ?> <?php echo e(route('welcome.programs')); ?> <?php else: ?> <?php echo e(route('login')); ?> <?php endif; ?>" class="nav-link">Programs</a></li>
            <li class="nav-item" id="l3"><a onclick="active('#l3');"  class="nav-link">Ceremonies</a></li>
            <li class="nav-item" id="l4"> <a onclick="active('#l4');"  class="nav-link">Rules</a></li>
            <li class="nav-item" id="l5"><a onclick="active('#l5');"  class="nav-link">Regulations</a></li>
        </ul>
            </div></div>
    <div class="col-md-7 " id="post" <?php if(Auth::user()): ?> <?php if (! (Auth::user()->name == 'admin')): ?>style="margin-top: -20px;" <?php endif; ?> <?php endif; ?>>
        <div class="container">


<script>
    function active($id){
        $('#ul').children().removeClass('badge-pill');
        $('#ul').children().removeClass('bg-info');
        $('#ul').children().css('color','#000');
        $($id).addClass('badge-pill');
        $($id).addClass('bg-info');
        $($id).css('color','#fff');
    }

</script>
<?php /**PATH C:\Users\MOHAMMAD YAHIA\Desktop\wb\resources\views/layouts/partial/posts.blade.php ENDPATH**/ ?>