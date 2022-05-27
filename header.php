<script src="lib/jquery-3.4.1.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />

<link rel="stylesheet" type="text/css" href="lib/time_table/TimeTable.css" />
<script src="lib/time_table/createjs.min.js"></script>
<script src="lib/time_table/TimeTable.js"></script>
<link rel="stylesheet" type="text/css" href="lib/date_picker/daterangepicker.css" />
<script src="lib/date_picker/moment.min.js"></script>
<script src="lib/date_picker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="lib/toast/jquery.toast.min.css" />
<script src="lib/toast/jquery.toast.min.js"></script>
<link rel="stylesheet" type="text/css" href="lib/chosen/chosen.css" />
<script src="lib/chosen/chosen.jquery.js"></script>
<script src="lib/common.js"></script>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<nav class="navbar navbar-expand-lg header1">
	<div class="container-fluid header-cont" id='navHome-block'>
		<div>
			
		</div>
		<div>
			<a class="navbar-brand" href="trangchu.php" id='navHome'><img class="logo" src="images\logo.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item" id='navDS-block'>
					<a class="nav-link" aria-current="page" href="index.php" id='navDS'>Đặt sân</a>
				</li>
				<li class="nav-item" id='navKH-block'>
					<a class="nav-link" aria-current="page" href="khachhang.php" id='navKH'>Khách hàng</a>
				</li>
				<li class="nav-item" id='navDT-block'>
					<a class="nav-link" aria-current="page" href="doanhthu.php" id='navDT'>Doanh thu</a>
				</li>
				<li class="nav-item dropdown" id='navSB-block'>
					<a class="nav-link" aria-current="page" href="san.php" id='navSB'>Sân Bóng</a>
				</li>
			</ul>
			
			
			<p class="nav-link disable" aria-current="page" style='padding-right: 20px'><?php 
			if(isset($_SESSION['login_user'])){echo "Xin chào <a href='taikhoan.php'><b>";
			echo $_SESSION['login_user']; 
			?></b></a> (<a style='color:red;' href='logout.php'>Đăng xuất</a>)<?php } else {?></b></a> 
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item dropdown"><a class="nav-link login" href='login.php'>Đăng nhập</a></li>
				<li class="nav-item dropdown"><a class="nav-link signin" href='register.php'>Đăng ký</a></li>
			</ul></p><?php } ?>
			<form class="d-flex" role="search">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Search</button>
			</form>
		</div>
	</div>
</nav>
<script>
$(document).ready(function() {
	if (window.location.pathname == "/quanlysanbong/trangchu.php") {
		$("#navHome").css("color", "white");
	}
	if (window.location.pathname == "/quanlysanbong/index.php") {
		$("#navDS").css("color", "white");
		// $("#navDS-block").css("background-image", "linear-gradient(to right, #03b610,#3ae447)");
	}
	if (window.location.pathname == "/quanlysanbong/khachhang.php") {
		$("#navKH").css("color", "white");
		// $("#navKH-block").css("background-image", "linear-gradient(to right, #04be12,#32dc3f)");
	}
	if (window.location.pathname == "/quanlysanbong/doanhthu.php") {
		$("#navDT").css("color", "white");
		// $("#navDT-block").css("background-image", "linear-gradient(to right, #0dc11a,#3fd34a)");
	}
	if (window.location.pathname == "/quanlysanbong/san.php") {
		$("#navSB").css("color", "white");
		// $("#navSB-block").css("background-image", "linear-gradient(to right, #19c625,#8bee92)");
	}
});
</script>