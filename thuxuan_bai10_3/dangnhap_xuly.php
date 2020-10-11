<?php 
session_start();
ob_start();
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($username)&&isset($password)){
	 if(($username=="thuxuan")&&($password=="123")){
	 $_SESSION['username']=$username;
	 $_SESSION['password']=$password;
echo "<script language='javascript'>alert('Dang nhap thanh cong');";
			echo "location.href='noidung.php';</script>";
}
else
{
echo "<script language='javascript'>alert('Dang nhap that bai');";
			echo "location.href='dangnhap.php';</script>";
}
}
?>