<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('student.store')); ?>" class="form" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="form-group my-3">
            <div class="row container justify-content-center">
                <input type="text" id="name" class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-3" name="name" placeholder="Name" value="<?php echo e(old('name')); ?>">
                <input type="text" id="father_name" class="<?php $__errorArgs = ['father_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-3" name="father_name" placeholder="Father Name" value="<?php echo e(old('father_name')); ?>">
                <input type="text" id="last_name" class="<?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-3" name="last_name" placeholder="Last Name" value="<?php echo e(old('last_name')); ?>">
                <input type="text" id="grand_father_name" class="<?php $__errorArgs = ['grand_father_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-3" name="grand_father_name" placeholder="Grand Father Name" value="<?php echo e(old('grand_father_name')); ?>">
            </div>

            <div class="row container justify-content-between">
                <label for="mother_tongue" class="col-form-label">Mother Tongue:</label>
                <select name="mother_tongue" id="mother_tongue" class="<?php $__errorArgs = ['mother_tongue'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> ml-3 mr-2 col-md-4 form-control bs-select">
                    <option value="dari" selected>دری</option>
                    <option value="pashto">پشتو</option>
                    <option value="uzbeki">اوزبیکی</option>
                    <option value="turkmani">ترکمنی</option>
                    <option value="balochi">بلوچی</option>
                </select>
                <label for="hobbies" class="col-form-label">Hobbies:</label>
                <select name="hobby" id="hobby" class="<?php $__errorArgs = ['hobby'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> ml-3 col-md-4 form-control bs-select">
                    <option value="DB" selected>انکشاف دیتابیس</option>
                    <option value="IT">نیتورکینگ</option>
                    <option value="APP">دیزاین وب اپلکشن</option>
                    <option value="SE">انجینیری نرم افزار</option>
                    <option value="WEB">ویب دیزاین</option>
                </select>
            </div>
            <div class="row container justify-content-between">
                <input type="email" id="name" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
                <label for="department_id" class="col-form-label">Department:</label>
                <select name="department_id" id="department_id" class="<?php $__errorArgs = ['department_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> col-md-3 form-control bs-select">
                    <?php $__currentLoopData = $dept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($d->id); ?>"><?php echo e($d->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <label for="committee_id"  class="col-form-label">Committee:</label>
                <select name="committee_id" id="committee_id" class="<?php $__errorArgs = ['committee_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> col-md-3 form-control bs-select">
                    <option value="" selected>None</option>
                    <?php $__currentLoopData = $committee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($d->id); ?>"><?php echo e($d->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
            <hr>
        <div class="form-group my-3" style="border-top-left-radius: 15px; border-top-right-radius: 15px;
                                                   border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
            <div class="row container justify-content-between">
                <input type="text" id="tazkira_no" class="<?php $__errorArgs = ['tazkira_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="tazkira_no" placeholder="tazkira no" value="<?php echo e(old('tazkira_no')); ?>">
                <input type="text" id="tazkira_jold" class="<?php $__errorArgs = ['tazkira_jold'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="tazkira_jold" placeholder="Tazkira Jold" value="<?php echo e(old('tazkira_jold')); ?>">
                <input type="text" id="tazkira_safha" class="<?php $__errorArgs = ['tazkira_safha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="tazkira_safha" placeholder="Tazkira Safha" value="<?php echo e(old('tazkira_safha')); ?>">
            </div>

            <div class="row container justify-content-between">
                <input type="text" id="tazkira_registration_no" class="<?php $__errorArgs = ['tazkira_registration_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mr-2 form-control rounded-pill col-md-4" name="tazkira_registration_no" placeholder="Tazkira Registration"value="<?php echo e(old('tazkira_registration_no')); ?>">
                <label for="date_of_birth" class="col-form-label">Date Of Birth:</label>
                <input type="date" class="mr-2 form-control rounded-pill col-md-3" name="date_of_birth" placeholder="Date Of Birth" value="<?php echo e(old('date_of_birth')); ?>">
                <select class="mr-2 form-control bs-select col-md-3" name="civic_state">
                    <option value="single" class="form-control">Single</option>
                    <option value="married" class="form-control">Married</option>
                </select>
            </div>

            <div class="row container justify-content-between">
                <label for="original_residency" class="col-form-label">Original Residency</label>
                <label for="original_province" class="col-form-label">Province:</label>
                <select id="original_province" class="mr-2 <?php $__errorArgs = ['original_province'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control bs-select col-md-3" name="original_province" >
                    <option value="single" class="form-control">Kabul</option>
                    <option value="single" class="form-control">Ghazni</option>
                    <option value="single" class="form-control">Balkh</option>
                    <option value="single" class="form-control">Bamian</option>
                    <option value="single" class="form-control">Nimroz</option>
                    <option value="single" class="form-control">Herat</option>
                    <option value="single" class="form-control">Nangarhar</option>
                    <option value="single" class="form-control">Konar</option>
                    <option value="single" class="form-control">Oruzgan</option>
                    <option value="single" class="form-control">Baghlan</option>
                    <option value="single" class="form-control">Sar-e-pol</option>
                    <option value="single" class="form-control">Parwan</option>
                    <option value="single" class="form-control">Farah</option>
                    <option value="single" class="form-control">Faryab</option>
                    <option value="single" class="form-control">Ghor</option>
                    <option value="single" class="form-control">Laghman</option>
                    <option value="single" class="form-control">Logar</option>
                    <option value="single" class="form-control">Kandahar</option>
                    <option value="single" class="form-control">Khost</option>
                    <option value="single" class="form-control">Zabul</option>
                    <option value="single" class="form-control">Helmand</option>
                    <option value="single" class="form-control">Paktya</option>
                    <option value="single" class="form-control">Paktika</option>
                    <option value="single" class="form-control">Badkhshan</option>
                    <option value="single" class="form-control">Samangan</option>
                    <option value="single" class="form-control">Panjshir</option>
                    <option value="single" class="form-control">Jowzjan</option>
                    <option value="single" class="form-control">Badghis</option>
                    <option value="single" class="form-control">Kappisa</option>
                    <option value="single" class="form-control">Kondoz</option>
                    <option value="single" class="form-control">Takhar</option>
                    <option value="single" class="form-control">Wardak</option>
                </select>
                <input type="text" id="original_suburb" class="<?php $__errorArgs = ['original_suburb'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mr-2 form-control rounded-pill col-md-3" name="original_suburb" placeholder="Original Suburb" value="<?php echo e(old('original_suburb')); ?>">
                <input type="text" id="original_district" class="<?php $__errorArgs = ['original_district'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mr-2 form-control rounded-pill col-md-3" name="original_district" placeholder="Original district" value="<?php echo e(old('original_district')); ?>">
            </div>

            <div class="row container justify-content-between">
                <label for="original_residency" class="col-form-label">Present Residency</label>
                <label for="original_province" class="col-form-label">Province:</label>
                <select id="present_settlement_province" class="<?php $__errorArgs = ['present_settlement_province'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mr-2 form-control bs-select col-md-3" name="present_settlement_province" >
                    <option value="single" class="form-control">Kabul</option>
                    <option value="single" class="form-control">Ghazni</option>
                    <option value="single" class="form-control">Balkh</option>
                    <option value="single" class="form-control">Bamian</option>
                    <option value="single" class="form-control">Nimroz</option>
                    <option value="single" class="form-control">Herat</option>
                    <option value="single" class="form-control">Nangarhar</option>
                    <option value="single" class="form-control">Konar</option>
                    <option value="single" class="form-control">Oruzgan</option>
                    <option value="single" class="form-control">Baghlan</option>
                    <option value="single" class="form-control">Sar-e-pol</option>
                    <option value="single" class="form-control">Parwan</option>
                    <option value="single" class="form-control">Farah</option>
                    <option value="single" class="form-control">Faryab</option>
                    <option value="single" class="form-control">Ghor</option>
                    <option value="single" class="form-control">Laghman</option>
                    <option value="single" class="form-control">Logar</option>
                    <option value="single" class="form-control">Kandahar</option>
                    <option value="single" class="form-control">Khost</option>
                    <option value="single" class="form-control">Zabul</option>
                    <option value="single" class="form-control">Helmand</option>
                    <option value="single" class="form-control">Paktya</option>
                    <option value="single" class="form-control">Paktika</option>
                    <option value="single" class="form-control">Badkhshan</option>
                    <option value="single" class="form-control">Samangan</option>
                    <option value="single" class="form-control">Panjshir</option>
                    <option value="single" class="form-control">Jowzjan</option>
                    <option value="single" class="form-control">Badghis</option>
                    <option value="single" class="form-control">Kappisa</option>
                    <option value="single" class="form-control">Kondoz</option>
                    <option value="single" class="form-control">Takhar</option>
                    <option value="single" class="form-control">Wardak</option>
                </select>
                <input type="text" id="present_settlement_suburb" class="<?php $__errorArgs = ['present_settlement_suburb'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mr-2 form-control rounded-pill col-md-3" name="present_settlement_suburb" placeholder="present settlement Suburb" value="<?php echo e(old('present_settlement_suburb')); ?>">
                <input type="text" id="present_settlement_district" class="<?php $__errorArgs = ['present_settlement_district'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mr-2 form-control rounded-pill col-md-3" name="present_settlement_district" placeholder="present settlement district" value="<?php echo e(old('present_settlement_district')); ?>">
            </div>
        </div>
            <hr>
        <div class="form-group my-3" style="border-top-left-radius: 15px; border-top-right-radius: 15px;
                                               border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
            <div class="row container justify-content-between">
                <label for="" class="col-form-label col-md-4">School Name</label>
                <label for="" class="col-form-label col-md-4">School Graduation Year</label>
                <label for="" class="col-form-label col-md-4">Kankor Year</label>
            </div>
            <div class="row container justify-content-between">
                <input type="text" id="school_name" class="<?php $__errorArgs = ['school_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="school_name" placeholder="School Name" value="<?php echo e(old('school_name')); ?>">
                <input type="date" id="school_graduation_date" class="form-control <?php $__errorArgs = ['school_graduation_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-pill col-md-4" name="school_graduation_date" placeholder="School Graduate Year" value="<?php echo e(old('school_graduation_date')); ?>">
                <input type="date" id="kankor_year" class="form-control <?php $__errorArgs = ['kankor_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-pill col-md-4" name="kankor_year" placeholder="Kankor Year" value="<?php echo e(old('kankor_year')); ?>">
            </div>
            <div class="row container justify-content-between">
                <input type="number" id="kankor_result_number" class="<?php $__errorArgs = ['kankor_result_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="kankor_result_number" placeholder="Kankor Result Number" value="<?php echo e(old('kankor_result_number')); ?>">
                <input type="text" id="kankor_id" class="<?php $__errorArgs = ['kankor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="kankor_id" placeholder="Kankor Id" value="<?php echo e(old('kankor_id')); ?>">
                <input type="text" id="tel" class="<?php $__errorArgs = ['tel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="tel" placeholder="Telephon Number" value="<?php echo e(old('tel')); ?>">
            </div>
        </div>
            <hr>
        <div class="form-group my-3" style="border-top-left-radius: 15px; border-top-right-radius: 15px;
                                               border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
            <div class="row container justify-content-between">
                <label for="" class="col-form-label col-md-4">Reputatioin</label>
                <label for="" class="col-form-label col-md-4">Work & Workplace</label>
                <label for="" class="col-form-label col-md-4">Telephon Number</label>
            </div>
            <div class="row container justify-content-between">
                <div class="col-md-4"></div>
                <input type="text" id="father_work_and_workplace" class="<?php $__errorArgs = ['father_work_and_workplace'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="father_work_and_workplace" placeholder="Father Work & Workplace" value="<?php echo e(old('father_work_and_workplace')); ?>">
                <input type="text" id="father_tel" class="<?php $__errorArgs = ['father_tel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="father_tel" placeholder="Father Telephone" value="<?php echo e(old('father_tel')); ?>">
            </div>
            <div class="row container justify-content-between">
                <input type="text" id="brother_reputation" class="<?php $__errorArgs = ['brother_reputation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="brother_reputation" placeholder="Brother Reputation" value="<?php echo e(old('brother_reputation')); ?>">
                <input type="text" id="brother_work_and_workplace" class="<?php $__errorArgs = ['brother_work_and_workplace'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="brother_work_and_workplace" placeholder="Brother Work & Workplace" value="<?php echo e(old('brother_work_and_workplace')); ?>">
                <input type="text" id="brother_tel" class="<?php $__errorArgs = ['brother_tel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="brother_tel" placeholder="Brother Telephone" value="<?php echo e(old('brother_tel')); ?>">
            </div>
            <div class="row container justify-content-between">
                <input type="text" id="kaka_reputation" class="<?php $__errorArgs = ['kaka_reputation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="kaka_reputation" placeholder="Kaka Reputation" value="<?php echo e(old('kaka_reputation')); ?>">
                <input type="text" id="kaka_work_and_workplace" class="<?php $__errorArgs = ['kaka_work_and_workplace'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="kaka_work_and_workplace" placeholder="Kaka Work & Workplace" value="<?php echo e(old('kaka_work_and_workplace')); ?>">
                <input type="text" id="kaka_tel" class="<?php $__errorArgs = ['kaka_tel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="kaka_tel" placeholder="Kaka Telephone"value="<?php echo e(old('kaka_tel')); ?>">
            </div>
            <div class="row container justify-content-between">
                <input type="text" id="mama_reputation" class="<?php $__errorArgs = ['mama_reputation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="mama_reputation" placeholder="Mama Reputation" value="<?php echo e(old('mama_reputation')); ?>">
                <input type="text" id="mama_work_and_workplace" class="<?php $__errorArgs = ['mama_work_and_workplace'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="mama_work_and_workplace" placeholder="Mama Work & Workplace" value="<?php echo e(old('mama_work_and_workplace')); ?>">
                <input type="text" id="mama_tel" class="<?php $__errorArgs = ['mama_tel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control rounded-pill col-md-4" name="mama_tel" placeholder="Mama Telephone" value="<?php echo e(old('mama_tel')); ?>">
            </div>
        </div>

        <div class="form-group my-3">
            <label for="file" class="col-md-3 col-form-label">Insert a Picture</label>
            <div class="row container justify-content-between">
                <input type="file" id="image" class="<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control col-md-4 custom-file" name="image" placeholder="Customer Image" value="<?php echo e(old('image')); ?>">
            </div>
            <div class="row justify-content-center">
                <button class="btn btn-secondary col-md-8 form-control my-5" type="submit" name="submit">CREATE ACCOUNT</button>
            </div>
        </div>
        </form>

    <hr>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MOHAMMAD YAHIA\Desktop\wb\resources\views/student/form.blade.php ENDPATH**/ ?>