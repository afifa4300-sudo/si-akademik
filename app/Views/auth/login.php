<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login - Sistem Informasi Akademik</h2>

<?php if (!empty($error)): ?>
    <p style="color:red;"><?= $error; ?></p>
<?php endif; ?>

<form action="<?= BASE_URL; ?>/login/process" method="POST">
    <label>Username:</label><br>
    <input type="text" name="username"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>