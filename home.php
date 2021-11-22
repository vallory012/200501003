<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Estonia&family=Goldman&display=swap" rel="stylesheet">
</head>
<body>
	<h1>Hello, <?php echo $_SESSION['name']; ?></h1><br>
	<a href="logout.php">Đăng xuất</a>
</body>
</html>

<?php
}else{
	header("Location: home.php");
	exit();
}
 ?>