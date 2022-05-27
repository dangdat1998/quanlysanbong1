<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>QUẢN LÝ SÂN BÓNG 1.0</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/index.css" />
<body>
	<?php
	include("config/config.php");
	session_start();
	include("header.php");
	?>
	<div class="container slider">
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="6000">
					<img src="images\carosel1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h4>Sân bóng đá mini An Dương</h4>
						<a href="index.php" class="carousel-datsan"><button class="btn">Đặt sân</button></a>
					</div>
				</div>
				<div class="carousel-item" data-bs-interval="6000">
					<img src="images\carosel2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h4>Giá thuê sân 7 người</h4>
						<p>Trước 16:00:  3.000đ/phút</p>
						<p>Từ 16:01 đến 17:30:  6.000đ/phút</p>
						<p>Từ 17:31 đến 20:30:  8.000đ/phút</p>
						<p>Sau 20:30:  4.000đ/phút</p>
					</div>	
				</div>
				<div class="carousel-item">
					<img src="images\carosel3.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block carosel-diachi" >
						<h4>Liên hệ</h4>
						<p>Địa chỉ:  Ngõ 76 An Dương, Yên Phụ (Quận Tây Hồ, Hà Nội)</p>
						<p>Thời gian mở cửa: 06:00 - 22:00, từ thứ 2 đến CN</p>
						<p>Số điện thoại: 0984380888</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	<div class="container cont header trangchu">	
		<h1 class="page-name">SÂN BÓNG ĐÁ AN DƯƠNG</h1>
		<div>
			<div>Địa chỉ</div>
			
		</div>
		<div>
			GIỚI THIỆU CHUNG VỀ SÂN BÓNG ĐÁ MINI AN DƯƠNG
		</div>
	</div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
