<title>Doanh Thu</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/index.css" />

<?php
	include("session.php");
	if ($rs['chucvu'] == 0) {
		header("location:index.php");
		die();
	}
	include("header.php");
?>
<div class="container cont">
	<h2>Thống kê doanh thu</h2>
	<div>Ngày <input type="text" id="datepicker"/><br/></div>
	<br />
	<span id='tieude'></span><br />
	<br />
	<div id='ds_datsan'>
		<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor' crossorigin='anonymous'>
		<link rel='stylesheet' type='text/css' href='css/common.css' />
		<table class='table'>
		<thead class='thead-listdatsan'><tr><th>#</th><th>Tên KH</th><th>SĐT</th><th>Sân</th><th>Bắt đầu</th><th>Kết thúc</th><th>Phút</th><th>Đơn giá (/phút)</th><th>Tiền</th><th>Đã thanh toán</th><th>Thanh toán</th><th>Xóa</th></tr></thead>
		<tbody>
			<tr>
				<td colspan="12" align='center'><i>Chọn khoảng thời gian cần thống kê doanh thu</i></td>
			</tr>
		</tbody>
	</div><br />
	
</div>
<script>
$(document).ready(function() {
	
	$('#datepicker').daterangepicker({
	
	}, function(start, end, label) {
		g_bat_dau = start.format("YYYY-MM-DD");	
		g_ket_thuc = end.format("YYYY-MM-DD");
		$("#tieude").html("<b>Doanh thu từ ngày " + g_bat_dau + " đến " + g_ket_thuc + "</b>");
		xemDoanhThu(g_bat_dau, g_ket_thuc);
	});
});
</script>