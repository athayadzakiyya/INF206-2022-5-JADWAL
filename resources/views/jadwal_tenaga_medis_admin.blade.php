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
                <a href="pemberitahuan_admin">
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
        <h1>JADWAL TENAGA MEDIS</h1>
    </div>
    <table>
        <tbody>
            <tr>
                <td align="right"><button class="aksiedit">EDIT</button></td>
            </tr>
        </tbody>
    </table>
    <table class="table2" align="center">
        <table border="1" cellspacing="3" cellpadding="25" align="center" width="1300">

            <ul>
                <thead>

                    <body>
                        <tr>
                            <td>HARI/WAKTU</td>
                            <td>Senin</td>
                            <td>Selasa</td>
                            <td>Rabu</td>
                            <td>Kamis</td>
                            <td>Jumat</td>
                            <td>Sabtu</td>
                            <td>Minggu</td>
                        </tr>
                        <tr>
                            <td>08.00-12.00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>12.00-16.00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>16.00-20.00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>20.00-00.00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>00.00-04.00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>04.00-08.00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </body>
                </thead>
            </ul>
        </table>
    </table>

    <!-- akhir konten -->
</body>

</html>