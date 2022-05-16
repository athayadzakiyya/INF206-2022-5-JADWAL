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
        <a href="#side-bar1" class="menu"><ion-icon name="menu"></ion-icon></a>
        <a href="#" class="logo">JADWALKU</a>
        <ul class="navigation">
            <li>
                <a href="pemberitahuan"><ion-icon name="notifications-outline"></ion-icon></a>
                <a href="#"><ion-icon name="person-circle-outline"></ion-icon></a>
            </li>
        </ul>
    </header>

    <!-- awal side-bar -->
    <div class="side-bar" id="side-bar1">
        <a href="#" class="menu"><ion-icon name="menu"></ion-icon></a>
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
        <h1>PEMBERITAHUAN</h1>
    </div>

    <table class= "table1" align="center">
<ul>
</ul>
        <thead>
            <body>
                <tr>
                    <th>Hari</th>
                    <th>Waktu</th>

                </tr>
            </body>
        </thead>
        <tbody>
            <tr>
                <td>senin </td>
                <td>08:00-12:00 </td>
                <td>Budi ingin mengganti jadwal dengan Usman, dengan alasan kurang sehat, apakah anda ingin menggantikan Budi? </td>
                <td align="right"><button class="aksiterima">Ya</button></td>
                <td align="right"><button class="aksitolak">Tidak</button></td>
            </tr>
        </tbody>
    </table>
<div class ="rectangle"></div>
   
    <!-- akhir konten -->
</body>
</html><?php /**PATH C:\Users\User\laravel\project-absen\resources\views/pemberitahuan.blade.php ENDPATH**/ ?>