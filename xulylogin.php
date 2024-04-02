<?php

// Bat dau session
session_start();
if (isset($_POST['txtUser']) && isset($_POST['txtPass'])) 
{
	include("config/config.php");
	$userId   = $_POST['txtUser'];
	$password = $_POST['txtPass'];
	
	$sql = "SELECT TenDangNhap,MatKhau 
	      FROM taikhoan
		WHERE TenDangNhap = '$userId' AND MatKhau = '$password' ";
	$result = mysqli_query($connect, $sql) or die('Query failed. ' . mysqli_error($connect)); 
	
	if (mysqli_num_rows($result) == 1)	{
		// username va password hop le 
		// Tao bien session "db_is_logged_in" va gan gia tri bang true
		$_SESSION['taikhoan'] = $userId;
		//sau khi dang nhap thanh cong thi chuyen sang trang index.php
		header('Location: index.php');
		exit;
	} 
	else {
		header('Location: login.php?success=false');
	}
	mysqli_close($connect);
}