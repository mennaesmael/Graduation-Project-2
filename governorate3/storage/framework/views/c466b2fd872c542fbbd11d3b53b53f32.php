<!DOCTYPE html>
<html lang="ar">

<head>
    <title>رفع الملفات</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <style>
        body {
            direction: rtl;
            background-color: #F5F5F5;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        form {
            margin-bottom: 40px;
        }

        table {
            border-collapse: separate;
            border-spacing: 0 20px;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        td {
            padding: 10px;
            vertical-align: middle;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            color: #333;
        }

        .table-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            text-align: center;
        }

        .form-control {
            width: 100%;
            background-color: #ffffff;
            color: #000000;
            border: none;
            border-radius: 5px;
            height: 40px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        .form-control:focus {
            background-color: #ffffff;
            color: #000000;
            border: none;
            outline: none;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            margin-right: 10px;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            cursor: pointer;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            margin-right: 10px;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            cursor: pointer;
        }

        label.error {
            color: red;
            font-size: 14px;
            display: block;
            margin-bottom: 15px;
        }
        .file-input-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.file-label {
  margin-bottom: 0.5rem;
  font-weight: bold;
  color: #333;
}

.file-input {
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  color: #555;
  background-color: #f9f9f9;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  transition: all 0.3s ease-in-out;
}

.file-input:focus {
  outline: none;
  box-shadow: 0 0 0 2px #4c8bf5;
}

    </style>
</head>

<body>
    <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <h1>رفع الملفات</h1>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('upload')); ?>" enctype="multipart/form-data" id="upload-form">
            <?php echo csrf_field(); ?>
            <table>
                <tr>
                    <td class="table-header" colspan="2">بيانات الملف</td>
                </tr>
                <tr>
                    <td class="table-header">اسم الملف*</td>
                    <td><input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus></td>
                </tr>
                <tr>
                    <td class="table-header">اختر ملف*</td>
                    <td>
                        <div class="file-input-container">
                            <label for="file" class="file-label">Choose a file:</label>
                            <input id="file" name="file" class="file-input" aria-describedby="file_input_help" type="file" required>
                          </div>

                    </td>
                </tr>
                <tr>
                    <td class="table-header">ملاحظات</td>
                    <td><textarea id="notes" name="notes" class="form-control" rows="4" cols="50"><?php echo e(old('notes')); ?></textarea></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary"><?php echo e(__('رفع')); ?></button>
        </form>
        <br>
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

        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary mt-3"><?php echo e(__('الصفحة الرئيسية')); ?></a>
        <a href="<?php echo e(route('search')); ?>" class="btn btn-primary mt-3 ml-3"><?php echo e(__('صفحة البحث')); ?></a>
    </div>
</body>

</html>

<?php /**PATH D:\all projects\tasks of gp\laravel\governorate3\resources\views/upload.blade.php ENDPATH**/ ?>