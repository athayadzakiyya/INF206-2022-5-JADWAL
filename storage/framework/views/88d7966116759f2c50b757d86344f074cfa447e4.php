<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>JADWALKU</title>
</head>
<body>
    <header>
        <a href="#side-bar1" class="menu"><ion-icon name="menu"></ion-icon></a>
        <a href="#" class="logo">JADWALKU</a>
        <ul class="navigation">
            <li>
                <a href="pemberitahuan_admin"><ion-icon name="notifications-outline"></ion-icon></a>
                <a href="#"><ion-icon name="person-circle-outline"></ion-icon></a>
            </li>
        </ul>
    </header>

    <!-- awal side-bar -->
    <div class="side-bar" id="side-bar1">
        <a href="#" class="menu"><ion-icon name="menu"></ion-icon></a>
        <ul>

            <li class="list">
                <a href="absensi_admin">
                    <span class="title">ABSENSI</span>
                </a>
            </li>
            <li class="list">
                <a href="jadwal_tenaga_medis_admin">
                    <span class="title">JADWAL TENAGA MEDIS</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- akhir side-bar -->

    <!-- awal konten -->
    <div class="container">
        <h1>ABSENSI</h1>
    </div>

    <table class="table2" align="center">
        <table border="1" cellspacing="3" cellpadding="10" align="center" width="1500" >

            <ul>
                <thead>

                    <body>
                        <tr>
                            <td align="center">JAM</td>
                            <td align="center">NAMA</td>
                            <td align="center">STATUS</td>
                        </tr>
                         <?php $__currentLoopData = $absensi_admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                         <td>
                        <center> <?php if($status->waktu == 1): ?> 08:00 - 12:00
                         <?php elseif($status->waktu == 2): ?> 12:00 - 16:00
                         <?php elseif($status->waktu == 3): ?> 16:00 - 20:00
                         <?php elseif($status->waktu == 4): ?> 20:00 - 00:00
                         <?php elseif($status->waktu == 5): ?> 00:00 - 04:00
                         <?php elseif($status->waktu == 6): ?> 04:00 - 08:00
                         <?php endif; ?>
                        </center>
                         </td>
                         <td><center><?php echo e($status->user->nama); ?></center></td>
                         <td>
                        <center>
                         <?php if($status->is_absen == 0): ?>
                         <!-- <a href="" class="belumabsen" role="button" data-bs-toggle="button">belum absen</a> -->
                         <button type="button" class="belumabsen">belum absen</button>
                         <button type="button" class="tolakabsen">terima absen</button>
                         <?php elseif($status->is_absen == 1): ?>
                         <button type="button" class="sudahabsen">SUCCESS</button>
                         <button type="button" class="tolakabsen">tolak absen</button>
                         <?php endif; ?>
                         </center>
                         </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                </thead>
            </ul>
        </table>
    </table><?php /**PATH C:\Users\User\laravel\project-absen\resources\views/absensi_admin.blade.php ENDPATH**/ ?>