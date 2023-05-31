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
    <form action="<?= base_url().'seminar/edit/'.$edit->id ?>" enctype="multipart/form-data" method="POST">
       
        <input type="hidden" name="photo" value="<?= $edit->photo ?>">
        <input type="file" name="foto" value="<?= $edit->photo ?>" >
        <p>Judul Program</p>
        <input type="text" name="judul" value="<?= $edit->name ?>" >
        <br>
        <p>Format Program</p>
        <input type="text" name="format" value="<?= $edit->sub_title ?>" >
        <br>
        <p>program start - program end</p>
        <input type="date" name="date_start"value="<?= $edit->date_start ?>" >
        <input type="date" name="date_end" value="<?= $edit->date_end ?>" >
        <br>
        <p>start timw - end time</p>
        <input type="time" name="time_start" value="<?= $edit->time_start ?>" >
        <input type="time" name="time_end" value="<?= $edit->time_end ?>" >
        <br>
        <p>lokasi dan vanue</p>
        <p>offline</p>
        <input type="radio" name="type" value="offline" checked>
        <p>Online</p>
        <input type="radio" name="type" value="online" >
        <p>hybrid</p>
        <input type="radio" name="type" value="hybrid" >

        <input type="text" name="url" value="<?= $edit->link ?>" placeholder="url">
        <input type="text" name="lokasi" value="<?= $edit->lokasi ?>" placeholder="nama lokasi" >
        <input type="text" name="alamat" value="<?= $edit->alamat ?>" placeholder="alamat" >
        <input type="text" name="kota" value="<?= $edit->kota ?>" placeholder="kota" >

        <p>jumlah kuota</p>
        <input type="number" name="kuota"value="<?= $edit->kuota ?>"  >
        <p>harga</p>
        <input type="number" name="harga" value="<?= $edit->price ?>">

        <button name="status" value="menunggu" type="submit">simpan</button>
        <button type="submit" value="draf" name="status">draf</button>
           
    </form>
     
</body>
</html>