<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Program Konsultan</h1>
    <form style="margin-bottom:10px;" action="<?= base_url().'seminar/index'?>" method="GET">
        <input type="text" name="search" placeholder="search">
        <button type="submit" >cari</button>
    </form>
    <a href="<?= base_url().'seminar/index' ?>">Semua</a>
    <a href="<?= base_url().'seminar/index?opsi=aktif' ?>">aktif</a>
    <a href="<?= base_url().'seminar/index?opsi=draf' ?>">draf</a>
    <a href="<?= base_url().'seminar/index?opsi=menunggu' ?>">menunggu</a>
    <a href="">history</a>
    
    <table border="2" style="margin-top: 50px;">
        <tr>
            <th>No</th>
            <th>title</th>
            <th>tanggal</th>
            <th>Status</th>
            <th>partisipan</th>
            <th>action</th>
        </tr>
        <?php $i = 0; ?>
        <?php foreach($seminar as $item) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->date_start ?></td>
                <td><?= $item->status ?></td>
                <td>100</td>
                <td> <a href="<?= base_url().'seminar/detail/'.$item->id ?>">edit</a> | 
                    <Form action="<?= base_url().'seminar/hapus' ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $item->id ?>">
                        <input type="hidden" name="file" value="<?= $item->photo ?>">
                        <button type="submit" name="hapus">delete</button> 
                    </Form>
                </td>
            </tr>
        <?php endforeach ; ?>
    </table>
</body>
</html>