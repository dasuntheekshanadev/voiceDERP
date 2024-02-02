<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="contact__form">

        <form action="<?php echo e(route('user.customer')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <?php echo $__env->make('common.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="row g-3">
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="empno" placeholder="EMP No" value="<?php echo e(old('empno')); ?>">
                    <?php $__errorArgs = ['empno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="customername" placeholder="Customer Name" value="<?php echo e(old('customername')); ?>">
                    <?php $__errorArgs = ['customername'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="business" placeholder="Business" value="<?php echo e(old('business')); ?>">
                    <?php $__errorArgs = ['business'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="address" placeholder="Address" value="<?php echo e(old('address')); ?>">
                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="phone" id="phone" placeholder="Phone Number" value="<?php echo e(old('phone')); ?>">
                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-xxl-12 col-xl-12 col-12">
                    <label>Invoiced Items</label>
                    <select class="form-select" placeholder="Select Your Package" name="invoiceditems" value="<?php echo e(old('invoiceditems')); ?>">
                        <?php $__errorArgs = ['invoiceditems'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <option value="Select Your Package"></option>
                        <option value="Startup Fee">Startup Fee</option>
                        <option value="Basic Package">Basic Package</option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-xxl-6 col-xl-6 col-12">
                    <label for="attachment">File Uploader</label><br>
                    <input type="file" class="form-select" name="pdf_file" id="pdf_file" accept=".pdf" value="<?php echo e(old('pdf_file')); ?>">
                    <?php $__errorArgs = ['pdf_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12">
                    <div class="btn_wrapper">
                        <button type="submit" class="wc-btn-primary btn-hover btn-item"><span></span> Register <br>Now <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html><?php /**PATH C:\laragon\www\voiced-erp-app\resources\views/customer.blade.php ENDPATH**/ ?>