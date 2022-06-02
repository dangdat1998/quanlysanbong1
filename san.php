<title>Sân Bóng</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/index.css" />
<?php
	include("session.php");
	if ($rs['chucvu'] == 0) {
		header("location:index.php");
		die();
	}
	include("header.php");
	include("sanbongjs.php")
?>
<div class="container cont">
	
	Tên sân: <input type='text' id='ten_san'/> <button id='btnThem'>Thêm sân bóng</button><br />
	<br />
	<div id='listsanbong'></div>
	
</div>
