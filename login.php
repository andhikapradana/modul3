<?php
	$username=$_POST['username'];
	$password=$_POST['password'];

	if($username == "dhika" && $password == "123" ){
		echo "Login Berhasil";
	}
	else{
		echo "Login Gagal";
	}
	?>