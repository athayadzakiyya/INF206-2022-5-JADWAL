<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
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
                    <span class="title">ABSENSI</span>
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
        <h1>ABSENSI</h1>
    </div>

    <table class="table1" align="center">
        <ul>
        </ul>
        <thead>

            <body>
                <tr>
                    <th> <center>Hari</center></th>
                    <th><center>Waktu</center></th>

                </tr>
            </body>
        </thead>
        <tbody>
            @if($absensi)
            @foreach($absensi as $absent)
            <tr>
                <td><center>{{ $absent->hari }}</center></td>
                <td>
                <center>
                @if($absent->waktu == 1) 08:00 - 12:00
                @elseif($absent->waktu == 2) 12:00 - 16:00
                @elseif($absent->waktu == 3) 16:00 - 20:00
                @elseif($absent->waktu == 4) 20:00 - 00:00
                @elseif($absent->waktu == 5) 00:00 - 04:00
                @elseif($absent->waktu == 6) 04:00 - 08:00
                @endif
                </center>
                </td>
                <td>
                <center>
                @if($absent->is_absen == 0)<button type="button" is_absen = 1 class="btn btn-primary">absen</button>
                @elseif($absent->is_absen == 1)<button type="button" is_absen = 1 class="btn btn-success">SUCCESS</button>
                @endif
                </center>
            </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <div class="rectangle"></div>

    <!-- akhir konten -->
</body>

</html>