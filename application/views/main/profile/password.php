<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url().'profile/password '?>" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <input type="hidden" name="password_asli" value="<?= $user['password'] ?>">
        <label for="current_password">Kata Sandi Saat Ini:</label>
        <input type="password"  name="old_password" required>
        <a href="">lupa password?</a>
    
        <label for="new_password">Kata Sandi Baru:</label>
        <input type="password" name="password" required>
    
        <label for="confirm_password">Konfirmasi Kata Sandi Baru:</label>
        <input type="password"  name="konfirmasi" required>
        <button class="submit" name="submit">Konfimasi</button>
    </form>

</body>
</html>