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
                <a href="logout_admin">
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
                <td align="right"><a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=project-absen&table=jadwal&pos=0" class="aksiedit" role="button" data-bs-toggle="button">EDIT</a></td>
            </tr>
        </tbody>
    </table>
    <br>
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
                        @foreach($absen as $list)
                        <tr>
                            <td>
                                @if($list[0] == 1) 08:00 - 12:00
                                @elseif($list[0] == 2) 12:00 - 16:00
                                @elseif($list[0] == 3) 16:00 - 20:00
                                @elseif($list[0] == 4) 20:00 - 00:00
                                @elseif($list[0] == 5) 00:00 - 04:00
                                @elseif($list[0] == 6) 04:00 - 08:00
                                @endif
                            </td>
                            <td>{{ $list[1] }}</td>
                            <td>{{ $list[2] }}</td>
                            <td>{{ $list[3] }}</td>
                            <td>{{ $list[4] }}</td>
                            <td>{{ $list[5] }}</td>
                            <td>{{ $list[6] }}</td>
                            <td>{{ $list[7] }}</td>
                        </tr>
                        @endforeach
                    </body>
                </thead>
            </ul>
        </table>
    </table>

    <!-- akhir konten -->
</body>

</html>