<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>JADWALKU</title>
</head>

<body>
    <header>
        <a href="#side-bar1" class="menu">
            <ion-icon name="menu"></ion-icon>
        </a>
        <a href="#" class="logo">JADWALKU</a>
        <ul class="navigation">
            <li>
                <a href="pemberitahuan">
                    <ion-icon name="notifications-outline"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </a>
            </li>
        </ul>
    </header>

    <!-- awal side-bar -->
    <div class="side-bar" id="side-bar1">
        <a href="#" class="menu">
            <ion-icon name="menu"></ion-icon>
        </a>
        <ul>

            <li class="list">
                <a href="absensi">
                    <span class="title">ABSEN</span>
                </a>
            </li>
            <li class="list">
                <a href="jadwal_saya">
                    <span class="title">JADWAL SAYA</span>
                </a>
            </li>
            <li class="list">
                <a href="jadwal_tenaga_medis">
                    <span class="title">JADWAL TENAGA MEDIS</span>
                </a>
            </li>
            <li class="list">
                <a href="bantuan">
                    <span class="title">BANTUAN</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- akhir side-bar -->

    <!-- awal konten -->
    <div class="container">
        <h1>JADWAL TENAGA MEDIS</h1>
    </div>
    <table class="table2" align="center">
        <table border="1" cellspacing="3" cellpadding="25" align="center" width="1300">

            <ul>
                <thead>

                    <body>
                        <tr>
                            <td>HARI/WAKTU</td>
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
                            <td>
                                <?php if($list[0] == 1): ?> 08:00 - 12:00
                                <?php elseif($list[0] == 2): ?> 12:00 - 16:00
                                <?php elseif($list[0] == 3): ?> 16:00 - 20:00
                                <?php elseif($list[0] == 4): ?> 20:00 - 00:00
                                <?php elseif($list[0] == 5): ?> 00:00 - 04:00
                                <?php elseif($list[0] == 6): ?> 04:00 - 08:00
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($list[1]); ?></td>
                            <td><?php echo e($list[2]); ?></td>
                            <td><?php echo e($list[3]); ?></td>
                            <td><?php echo e($list[4]); ?></td>
                            <td><?php echo e($list[5]); ?></td>
                            <td><?php echo e($list[6]); ?></td>
                            <td><?php echo e($list[7]); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                    </body>
                </thead>
            </ul>
        </table>

        <!-- akhir konten -->
</body>

</html><?php /**PATH C:\Users\User\laravel\project-absen\resources\views/jadwal_tenaga_medis.blade.php ENDPATH**/ ?>