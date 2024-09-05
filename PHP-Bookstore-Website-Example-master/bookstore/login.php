<html>
<link rel="stylesheet" href="style.css">
<body>
<header>
<blockquote>
    <a href="index.php"><img src="image/logo.png"></a>
</blockquote>
</header>
<blockquote>
<div class="container">
<center><h1>Войти в систему</h1></center>
<form action="checklogin.php" method="post">
    Логин:<br><input type="text" name="username"/>
    <br><br>
    Пароль:<br><input type="password" name="pwd" />
    <br><br>
    <input class="button" type="submit" value="Войти"/>
    <input class="button" type="button" name="cancel" value="Отмена" onClick="window.location='index.php';" />
</form>
</div>
<blockquote>
<?php
if (isset($_GET['errcode'])) {
$errorMessages = [
    1 => 'Неверное имя пользователя или пароль. Пожалуйста, попробуйте снова.',
    2 => 'Пожалуйста, войдите в систему.'
];

$errcode = intval($_GET['errcode']);
if (array_key_exists($errcode, $errorMessages)) {
    echo '<span style="color: red;">' . htmlspecialchars($errorMessages[$errcode]) . '</span>';
}
}
?>
</body>
</html>
