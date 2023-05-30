<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detail Seminar</h1>
    <img src="<?= base_url('assert/img/program/'.$detail->photo) ?>" width="300" height="300" alt="">
    <a href="<?= base_url().'seminar/edit/'.$detail->id ?>">edit</a>
</body>
</html>