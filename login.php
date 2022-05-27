<?php
	session_start();
	
	if (isset($_SESSION['login_user'])) {
		header("location:index.php");
		die();
	}
?>
<title>Đăng nhập</title>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />

<script src="lib/jquery-3.4.1.js"></script>
<link rel="stylesheet" type="text/css" href="lib/toast/jquery.toast.min.css" />
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="lib/toast/jquery.toast.min.js"></script>
<script src="lib/common.js"></script>
<style>

</style>


<form id="loginForm">
<h2>QUẢN LÝ SÂN BÓNG ĐÁ</h2>
  <div class="mb-3">
    <label class="form-label">Tài khoản</label>
    <input type="text" class="form-control" id="ten">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" id="matkhau">
  </div>
  <div class="login-btn"><button class="btn btn-primary" id='btnLogin'>Đăng nhập</button></div>
  <div class="no-account"><a href="register.php">Chưa có tài khoản?</a></div>
</form>

<script>
$(document).ready(function() {
	checkInputs();
	$("#btnLogin").click(function() {
		
		var u = $("#ten").val().trim();
		var p =  $("#matkhau").val().trim();

		
		if (u == "" || p == "") {
			thongbaoloi("Tên đăng nhập/Mật khẩu không được bỏ trống!!!");
			return;
		}
		
		$.ajax({
			url: "/quanlysanbong/api/dangnhap.php",
			type: "POST",
			cache: false,
			data: {
				action: "dangnhap",
				username: u,
				password: p
			},
			success: function(msg) {
				if (msg == "Đăng nhập thành công") {
					location.href = 'trangchu.php';
				} else {
					thongbaoloi(msg);
				}
				
			}
		});
	});
});
</script>
