<?php
	include("../config/config.php");
	session_start();
	
	if (isset($_POST['action'])) {
		if ($_POST['action'] == 'dangnhap') {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$sql = "SELECT id FROM tai_khoan WHERE username='$username' AND password='$password'";
			$rs = mysqli_query($db, $sql);
			$count = mysqli_num_rows($rs);
			
			if ($count == 1) {
				$_SESSION['login_user'] = $username;
				echo "Đăng nhập thành công";
			} else {
				echo "Tên đăng nhập hoặc mật khẩu không đúng!";
			}
		}
		if ($_POST['action'] == 'dangky') {
			$hoten = $_POST['hoten'];
			$sdt = $_POST['sdt'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$sql = "SELECT * FROM `tai_khoan` WHERE `username` = '".$username."'";
		    $query = mysqli_query($db, $sql);
		    if (mysqli_num_rows($query) < 1) {
		        $time = time();
		        mysqli_query($db, "INSERT INTO tai_khoan (`id`, `ten`, `sdt`, `username`, `password`, `chucvu`, `time`) VALUES (NULL, '".$hoten."', '".$sdt."', '".$username."', '".$password."', 0, '".$time."')");
		        $_SESSION['login_user'] = $username;
		        echo "Đăng ký thành công";
		    }else {
		        echo "Tên đăng nhập đã tồn tại!";
		    }
		}
	}
?>