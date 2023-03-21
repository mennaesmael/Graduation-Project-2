<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-header {
            text-align: right;
        }
    </style>
    <title>تحديث الملف</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header custom-header"><?php echo e(__('تحديث الملف')); ?></div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('update', $file->file_id)); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="file_name"
                                    class="col-md-4 col-form-label text-md-right"><?php echo e(__('اسم الملف')); ?></label>

                                <div class="col-md-6">
                                    <input id="file_name" type="text"
                                        class="form-control <?php $__errorArgs = ['file_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="file_name"
                                        value="<?php echo e($file->file_name); ?>" required autofocus>

                                    <?php $__errorArgs = ['file_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="notes"
                                    class="col-md-4 col-form-label text-md-right"><?php echo e(__('ملاحظات')); ?></label>

                                <div class="col-md-6">
                                    <textarea id="notes" class="form-control <?php $__errorArgs = ['notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="notes"><?php echo e($file->notes); ?></textarea>

                                    <?php $__errorArgs = ['notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="updated_at"
                                    class="col-md-4 col-form-label text-md-right"><?php echo e(__('تاريخ التحديث')); ?></label>

                                <div class="col-md-6">
                                    <?php setlocale(LC_ALL, 'ar'); ?>
                                    <input id="updated_at" type="datetime-local"
                                        class="form-control <?php $__errorArgs = ['updated_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="updated_at"
                                        value="<?php echo e(strftime('%Y-%m-%dT%H:%M:%S', strtotime($file->updated_at))); ?>"
                                        required min="2023-01-01T00:00"
                                        placeholder="<?php echo e(strftime('%Y-%m-%dT%H:%M:%S', strtotime($file->updated_at))); ?>"
                                        dir="rtl">




                                    <?php $__errorArgs = ['updated_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="updated_by"
                                    class="col-md-4 col-form-label text-md-right"><?php echo e(__('تم تحديثه بواسطة')); ?></label>

                                <div class="col-md-6">
                                    <input id="updated_by" type="text"
                                        class="form-control <?php $__errorArgs = ['updated_by'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="updated_by"
                                        value="<?php echo e($file->updated_by); ?>" required>

                                    <?php $__errorArgs = ['updated_by'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-0 text-center">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('تحديث')); ?>

                                    </button>
                                </div>
                            </div>


                        </form>
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-4">
                                <a href="<?php echo e(route('dashboard')); ?>"
                                    class="btn btn-primary btn-block"><?php echo e(__('الصفحة الرئيسية')); ?></a>
                            </div>
                            <div class="col-md-4">
                                <a href="<?php echo e(route('search')); ?>"
                                    class="btn btn-primary btn-block"><?php echo e(__('صفحة البحث')); ?></a>
                                <?php if(session('success')): ?>
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                    <script>
                                        Swal.fire({
                                            title: "Success!",
                                            text: "<?php echo e(session('تم بنجاح')); ?>",
                                            icon: "success",
                                            confirmButtonText: "OK"
                                        });
                                    </script>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH D:\all projects\tasks of gp\laravel\governorate3\resources\views/update.blade.php ENDPATH**/ ?>