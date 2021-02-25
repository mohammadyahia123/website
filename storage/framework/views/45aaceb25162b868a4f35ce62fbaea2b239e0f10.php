<div class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="http://127.0.0.1:8000">
            <?php echo e(config('app.name', 'Balkh CS Faculty')); ?>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="icons\home.png" style="width: 40px;height: 40px;"alt="home"></span>
        </button>
        <div id='nav' class="navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="navbar-item"><a href="#about">About BCS Faculty</a></li>
                <li class="navbar-item"><a href="#departments">Departments</a></li>
                <li class="navbar-item"><a href="#" data-toggle="modal" data-target="#myModal">Transcript Check</a></li>
                <li class="navbar-item"><a href="#table">Organizational Chart</a></li>
                <li class="navbar-item"><a href="#">Committees</a></li>
                <li class="navbar-item"><a href="#">Didactic Facilities</a></li>
                <li class="navbar-item"><a href="<?php echo e(route('settings')); ?>">Website Settings</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/home')); ?>" class="text-sm mr-3 text-gray-700">Home</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-sm mr-3 text-gray-700">Login</a>

                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>" class="text-sm text-gray-700">Register</a>
            <?php endif; ?>
            <?php endif; ?>
        </div>

    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Insert Alumni Id</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body center">
                <form action="alumni.php" method="get">
                    <input class="form-control-lg border-bottom text-center form-control-plaintext" type="text" placeholder="Type Alumni id" name="id"/>
                    <input type="text" class="form-control-lg border-bottom text-center form-control-plaintext" placeholder="Type Alumni Name" name="name" required>
                    <input type="text" class="form-control-lg border-bottom text-center form-control-plaintext" placeholder="Type Alumni Father Name" name="father_name">
                    <br/>

                    <button type="submit" class="btn btn-outline-primary waves-effect waves-light">SEARCH</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<!-- the modal -->
<?php /**PATH C:\Users\MOHAMMAD YAHIA\Desktop\wb\resources\views/layouts/partial/navbar.blade.php ENDPATH**/ ?>