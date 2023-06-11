<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang <?= $this->session->userdata('name') ?></h1>
    <p>dashboard consultant</p>
    <br>
    <h4>Status profile <?= $profile * 10 ?></h4>



    <h1>Program aktif</h1>
    <h1>0</h1>

    <br>
    <h1>Program waiting</h1>
    <h1>0</h1>
</body>
</html>