<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Jam</td>
            <td>SENIN</td>
            <td>SELASA</td>
            <td>RABU</td>
            <td>KAMIS</td>
            <td>JUMAT</td>
            <td>SABTU</td>
            <td>MINGGU</td>
        </tr>
        <?php $__currentLoopData = $absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($list[0]); ?></td>
            <td><?php echo e($list[1]); ?></td>
            <td><?php echo e($list[2]); ?></td>
            <td><?php echo e($list[3]); ?></td>
            <td><?php echo e($list[4]); ?></td>
            <td><?php echo e($list[5]); ?></td>
            <td><?php echo e($list[6]); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\Users\User\laravel\project-absen\resources\views/test_table.blade.php ENDPATH**/ ?>