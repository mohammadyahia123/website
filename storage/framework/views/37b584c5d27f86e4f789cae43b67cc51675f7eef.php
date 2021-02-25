<?php $__env->startSection('content'); ?>
<form action="<?php echo e(ads.store); ?>" method="POST" style="font-size: 18px;" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username" style="float: right;">تاریخ</label><br/>
        <input type="date" class="form-control" name="date" id="date" placeholder="تاریخ" !important>
    </div>
    <div class="form-group">
        <label for="username" style="float: right;">عنوان</label><br/>
        <input type="text" class="form-control" name="title" id="title" placeholder="عنوان" !important>
    </div>
    <div class="form-group">
        <label for="username" style="float: right;">موضوع</label><br/>
        <input type="text" class="form-control" name="description" id="text" placeholder="موضوع" !important>
    </div>
    <div class="form-group">
        <label style=" padding-left:20px ;"> عکس</label><br>
        <select name="image[]" id="image" multiple>
            <button onclick="add();"></button>
            <option value="<?php echo e($x=0); ?>"><input name="<?php echo e('image'.$x); ?>" type="file"/></option>
            <script>
                function add(){
                    $('select#image').child().append('<option value="<?php echo e($x++); ?>"><input name="<?php echo e('image'.$x); ?>" type="file"/></option>');
                }
            </script>
        </select><br>
        <input type="file" class="form-control" name="image_upload" style="display: none;text-align: center;"
               id="image_upload"><br>
        <button type="submit" class="btn btn-success" style="width: 100%;border-radius: 10px;">ارسال</button>
    </div><br>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MOHAMMAD YAHIA\Desktop\wb\resources\views/ads/form.blade.php ENDPATH**/ ?>