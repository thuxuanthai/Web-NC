<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
Trang Quan Tri
<?php 
if (isset($_SESSION['username']) && isset($_SESSION['password']))
	echo $_SESSION['username'];
else
{
	echo "<script language='javascript'>alert('Ban chua dang nhap - Vui long dang nhap lai');";
			echo "location.href='dangnhap.php';</script>";
}
?>
<a href="logout.php" >Thoat ra </a>
</body>
</html>
