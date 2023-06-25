<?php include_once ('init.php');
/* @var  $arMsg */
/* @var $isAuth */

if ($isAuth) {
	//Перенаправляем на главную через 2 секунды
	header( 'Refresh: 2; url=index.php' );
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Регистрация</title>
	<link rel="stylesheet" href="assets/css/style.css?<?=filemtime('assets/css/style.css')?>">
</head>
<body>
	<div class="container">
		<br>
		<a href="index.php">На главную</a>
		<h1>Регистрация</h1>
		<?php if (!$isAuth): ?>
			<?php if (isset($arMsg) && !empty($arMsg['error'])):?>
				<div class="error-msg"><?=implode('<br>', $arMsg['error'])?></div>
			<?php endif;?>
			<?php if (isset($arMsg) && !empty($arMsg['success'])):?>
				<div class="success-msg"><?=implode('<br>', $arMsg['success'])?></div>
			<?php endif;?>
			<form method="POST">
				<label for="login" title="от 3х до 10ти латинских символов в нижнем регистре">
					<div>Введите логин</div>
					<input type="text" name="login" id="login" value="<?= $_POST['login'] ?? '' ?>" pattern="[a-z]{3,10}" required>
				</label>
				<label for="password">
					<div>Введите пароль</div>
					<input type="password" name="password" id="password" required>
				</label>
				<input type="submit" name="register" value="Зарегистрироваться">
			</form>
			<a href="login.php">Авторизоваться</a>
		<?php else: ?>
			<div class="success-msg">Вы уже авторизованы и будете перенаправлены на главную через 2 секунды</div>
		<?php endif; ?>
	</div>
</body>
</html>
