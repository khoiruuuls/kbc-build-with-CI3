<?php 

if (!empty($user['date'])) {
    $timestamp = strtotime($user['date']);
    $tahun = date('Y', $timestamp);
    $bulan = date('m', $timestamp); 
    $hari = date('d', $timestamp);
}else{
    $tahun = '';
    $bulan = '';
    $hari = '';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile</h1>
    <!-- <?php var_dump($user) ?> -->
    <form method="post" action="<?= base_url().'profile/index' ?>">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <label for="name">Name:</label>
        <input type="text"  name="name" value="<?= $user['name']  ?>" >
        <?= form_error('name', '<p tyle="color:red;">', '</p>'); ?>
        <br><br>

        <label for="email">Email:</label>
        <input type="email"  name="email" value="<?= $user['email'] ?>" >
        <?= form_error('email', '<p style="color:red;">', '</p>'); ?>
        <br><br>

        <label for="phone">Nomor whatsApp:</label>
        <input type="number" value="<?= $user['no'] ?>"  name="no" required><br><br>

        <label for="jenis_kelamin">Jenis kelamin:</label>
        <input type="radio"  name="jenis_kelamin" value="pria" >
        <label for="male">Pria</label>
        <input type="radio"  name="jenis_kelamin" value="wanita" >
        <label for="female">Wanita</label><br><br>

        <label for="birthdate">Tanggal lahir:</label>
        <select name="hari" >
            <option value="<?= $hari ?>">Day</option>
            <?php
            for ($day = 1; $day <= 31; $day++) {
            echo "<option value=\"$day\">$day</option>";
            }
            ?>
        </select>
        <select name="bulan" >
            <option value="<?= $bulan ?>">Month</option>
            <?php
            $months = array(
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
            );
            foreach ($months as $index => $month) {
            $monthNumber = $index + 1;
            echo "<option value=\"$monthNumber\">$month</option>";
            }
            ?>
        </select>
        <select name="tahun" >
            <option value="<?= $tahun ?>">Year</option>
            <?php
            $currentYear = date('Y');
            for ($year = $currentYear; $year >= $currentYear - 100; $year--) {
            echo "<option value=\"$year\">$year</option>";
            }
            ?>
        </select><br><br>

        <button type="submit" name="submit">Simpan</button>
    </form>

</body>
</html>