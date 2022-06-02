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
<?php
if(isset($_SESSION['login_user'])){
	$sql = "SELECT * FROM tai_khoan WHERE username = '".$_SESSION['login_user']."'";
	$rs = mysqli_fetch_assoc(mysqli_query($db, $sql));
}

?>
<div class="top-head">
	<div class="row">
		<div class="col-2 avt"><a class="navbar-brand" href="trangchu.php" id='navHome_logo'><img class="logo" src="images\logo.png" alt=""></a></div>
		<div class="col hello"><p>Website chính thức <br />Sân bóng đá mini An Dương</p></div>
		<div class="col-2 date-view"><p id="date-now"></p></div>
	</div>
</div>
<nav class="navbar navbar-expand-lg header1">
	<div class="container-fluid header-cont" id='navHome-block'>
		<div>
			
		</div>
		<div>
			<a class="navbar-brand" href="trangchu.php" id='navHome'></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item" id='navDS-block'>
					<a class="nav-link" aria-current="page" href="trangchu.php" id='navTC'>Trang chủ</a>
				</li>
				<li class="nav-item" id='navDS-block'>
					<a class="nav-link" aria-current="page" href="index.php" id='navDS'>Đặt sân</a>
				</li>
				<?php
				if(isset($_SESSION['login_user'])){
					if ($rs['chucvu'] == 0) {
						echo '<li class="nav-item" id="navLS-block">
							<a class="nav-link" aria-current="page" href="xemlichsu.php" id="navLS">Lịch sử đặt sân</a>
							</li>';
					} else{
						echo '<li class="nav-item" id="navKH-block">
							<a class="nav-link" aria-current="page" href="khachhang.php" id="navKH">Khách hàng</a>
							</li>
							<li class="nav-item" id="navDT-block">
								<a class="nav-link" aria-current="page" href="doanhthu.php" id="navDT">Doanh thu</a>
							</li>
							<li class="nav-item dropdown" id="navSB-block">
								<a class="nav-link" aria-current="page" href="san.php" id="navSB">Sân Bóng</a>
							</li>';
					}
				}
				?>
				
			</ul>
			
			
			<p class="nav-link disable" aria-current="page" style='padding-right: 20px'><?php 
			if(isset($_SESSION['login_user'])){echo "Xin chào <a href='taikhoan.php'><b>";
			echo $_SESSION['login_user']; 
			?></b></a> (<a style='color:red;' href='logout.php'>Đăng xuất</a>)<?php } else {?></b></a> 
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item dropdown"><a class="nav-link login" href='login.php'>Đăng nhập</a></li>
				<li class="nav-item dropdown"><a class="nav-link signin" href='register.php'>Đăng ký</a></li>
			</ul></p><?php } ?>
		</div>
	</div>
</nav>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
	if (window.location.pathname == "/quanlysanbong/trangchu.php") {
		$("#navTC").css("color", "white");
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
	if (window.location.pathname == "/quanlysanbong/xemlichsu.php") {
		$("#navLS").css("color", "white");
		// $("#navSB-block").css("background-image", "linear-gradient(to right, #19c625,#8bee92)");
	}
});

function getnowdate(){
		var today = new Date();
		var date ='Ngày  '+ today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
		var hour = today.getHours();
		var min = today.getMinutes();
		var sec = today.getSeconds();
		if(hour<10){
			hour='0'+hour;
		}
		if(min<10){
			min='0'+min;
		}
		if(sec<10){
			sec='0'+sec;
		}
		var time = hour + ":" + min + ":" + sec;
		var dateTime = date+'<br /> '+time;

		
		document.getElementById("date-now").innerHTML = dateTime;
		setTimeout("getnowdate()",1000)
	}
	getnowdate();
</script>