<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form action="<?= base_url().'Seminar/tambah' ?>" enctype="multipart/form-data" method="POST">
        <input type="file" name="foto" required >
        <p>Judul Program</p>
        <input type="text" name="judul" required >
        <br>
        <p>Format Program</p>
        <input type="text" name="format" required >
        <br>
        <p>program start - program end</p>
        <input type="date" name="date_start"required >
        <input type="date" name="date_end" required >
        <br>
        <p>start timw - end time</p>
        <input type="time" name="time_start" required >
        <input type="time" name="time_end" required >
        <br>
        <p>lokasi dan vanue</p>
        <p>offline</p>
        <input type="radio" name="type" value="offline" checked>
        <p>Online</p>
        <input type="radio" name="type" value="online" >
        <p>hybrid</p>
        <input type="radio" name="type" value="hybrid" >
        <input type="text" name="url" placeholder="url">
        <input type="text" name="lokasi" placeholder="nama lokasi" >
        <input type="text" name="alamat" placeholder="alamat" >
        <input type="text" name="kota" placeholder="kota" >

        <p>jumlah kuota</p>
        <input type="number" name="kuota" required >
        <p>harga</p>
        <input type="number" name="harga" required>

        <button name="status" value="menunggu" type="submit">simpan</button>
        <button type="submit" value="draf" name="status">draf</button>
           
    </form>
     
</body>
</html>