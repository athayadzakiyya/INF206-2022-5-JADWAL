<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="{{asset('test.css')}}">
</head>
<body>
    <div></div>
    <form action="/request" method="post">
    @csrf
    <div class="text">
    <select class="form-select" name="jadwal_awal" aria-label="Default select example">
    <option value="{{$first->id}}"selected >{{$first->hari}}  
    @if($first->waktu == 1) 08:00 - 12:00
    @elseif($first->waktu == 2) 12:00 - 16:00
    @elseif($first->waktu == 3) 16:00 - 20:00
    @elseif($first->waktu == 4) 20:00 - 00:00
    @elseif($first->waktu == 5) 00:00 - 04:00
    @elseif($first->waktu == 6) 04:00 - 08:00
    @endif</option>
    </select>
    <select class="form-select" name="option" aria-label="Default select example">
    <option selected>Open this select menu</option>
    @foreach($ganti as $select)
    <option value="{{$select->id}}">{{$select->hari}} 
    @if($select->waktu == 1) 08:00 - 12:00
    @elseif($select->waktu == 2) 12:00 - 16:00
    @elseif($select->waktu == 3) 16:00 - 20:00
    @elseif($select->waktu == 4) 20:00 - 00:00
    @elseif($select->waktu == 5) 00:00 - 04:00
    @elseif($select->waktu == 6) 04:00 - 08:00
    @endif
    </option>
    @endforeach
    </select>
        <input type="text" name="alasan" value="ALASAN :">
    </div>
    <a href="jadwal_saya">
    <button class="aksi1">BATAL</button></a>
    <a href="">
    <button class="aksi2">KIRIM</button></a>
    </form>
</body>
</html>