<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

	session_start();
	session_destroy();

	Header("Location:index.php");
	exit();
	?>
</body>
</html>