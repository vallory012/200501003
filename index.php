<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng Nhập</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Estonia&family=Goldman&display=swap" rel="stylesheet">
</head>
<body>
	<form action="login.php" method="POST">
		<h2>Đăng Nhập</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
	<label>Tài Khoản</label>
	<input type="text" name="uname" placeholder="vd:dang, ...">

	<label>Mật Khẩu</label>
	<input type="password" name="password" placeholder="vd:123, ..."><br>

	<button type="submit">Login</button>
	</form>

</body>
</html>