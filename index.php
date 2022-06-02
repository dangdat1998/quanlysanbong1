<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>QUẢN LÝ SÂN BÓNG 1.0</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/index.css" />
<body>
	<?php
		include("session.php");
		include("header.php");
		include('sanbongjs.php')
	?>
	<div class="container page-datsan cont">
		<h1><b>THÔNG TIN ĐẶT SÂN</b></h1> 
		<div class="input-group date">
			<span class="input-group-text"><b>NGÀY</b></span>
			<input type="text" aria-label="First name" class="form-control" id="datepicker">
		</div>
		<!-- <div class="ngaydatsan"><b>NGÀY: </b><input type="text" id="datepicker"/></div><br/> -->
		<br />
		<div class="datsan-block">
			<div class="title-list"><b>TÌNH TRẠNG ĐẶT SÂN </div><div class="ngay-list"> NGÀY <span id='tieudetime'></span></b></div><br />
			<div class="time-table-block">
				<div class="container" id="time_table"></div> <br />
			</div>
		</div>
		<br/>
		<?php 
			if ($rs['chucvu'] == 1) {
				echo '<div class="datsan-block">
				<div class="title-list"><b>DANH SÁCH ĐẶT SÂN </div> <div class="ngay-list">NGÀY <span id="tieudeds"></span></b></div><br />
				<div class="list-table-block">
					<div class="container" id="ds_datsan"></div><br />
				</div>
			<div>
			<br />';
			}
		?>
		<?php 
			if ($rs['chucvu'] == 0) {
				echo '<div class="datsan-block">
				<div class="title-list"><b>SÂN ĐÃ ĐẶT THEO NGÀY</div> <div class="ngay-list">NGÀY <span id="tieudeds_khach"></span></b></div><br />
				<div class="list-table-block">
					<div class="container" id="ds_datsan_khach"></div><br />
				
				</div>
			<div>
			<br />';
			}
		?>

		
		
		<style>
			#formDatSan {
				position:absolute;margin:auto;top:0;right:0;bottom:0;left:0;width:450px;height:450px;z-index:100;background:#eee;padding:15px;border:0px solid #000;box-shadow:5px 5px 20px #000;display:none;border-radius:10px;
			}
			#formDatSan td{vertical-align:center;padding-top:5px;}

			#grayscreen{width:100%;height:100%;background:#333;opacity:0.7;z-index:99;display:none;position:absolute;left:0;top:0;}
			#datsan_themkhach{display:block;}
		</style>
		<?php
		$sql = "SELECT * FROM tai_khoan WHERE username = '".$_SESSION['login_user']."'";
		$rs = mysqli_fetch_assoc(mysqli_query($db, $sql));
			
		?>
		<div id='grayscreen'></div>
		<div id='formDatSan'>
			<b style='font-size: 18px;'>ĐẶT SÂN</b><br />
			<br />
			<table>
				<tr>
					<td>Sân:</td>
					<td><span id='datsan_tensan' style='font-weight:bold;color:red;'></span></td>
				</tr>
				<tr class="display-none">
					<td>ID:</td>
					<td><span id='datsan_khachhang' style='font-weight:bold;color:red;'><?php echo $rs['id'];?></span></td>
				</tr>
				<tr>
					<td>Khách hàng:</td>
					<td><span id='datsan_tenkhachhang' style='font-weight:bold;color:red;'></span><?php echo $rs['username'];?></td>
				</tr>
				<tr>
					<td>SĐT:</td>
					<td><span id='datsan_sdt' style='font-weight:bold;color:red;'></span><?php echo $rs['sdt'];?></td>
				</tr>
				<tr>
					<td>Ngày đặt:</td>
					<td><b><span id='datsan_ngaydat'></span></b></td>
				</tr>
				<tr>
					<td>Bắt đầu:</td>
					<td>
						Giờ: 
						<select id="datsan_batdau_gio">
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
						</select>
						Phút:
						<select id="datsan_batdau_phut">
							<option value="0">00</option>
							<option value="15">15</option>
							<option value="30">30</option>
							<option value="45">45</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Kết thúc:</td>
					<td>
						Giờ: 
						<select id='datsan_ketthuc_gio'>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
						</select>
						Phút:
						<select id="datsan_ketthuc_phut">
							<option value="0">00</option>
							<option value="15" selected>15</option>
							<option value="30">30</option>
							<option value="45">45</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Tổng thời gian (phút):</td>
					<td><span id='datsan_phut'></span></td>
				</tr>
				<tr>
					<td>Đơn giá (/phút):</td>
					<td><input type='text' id='datsan_dongia' size='5' value='3000' disabled/>đ</td>
				</tr>
				<tr>
					<td>Tổng tiền:</td>
					<td><span id='datsan_tongtien' style='color:red;font-weight:bold;'>0đ</span></td>
				</tr>
				<tr>
					<td></td>
					<td><br />
						<button id='datsan_ok'>Đồng ý</button>
						<button id='datsan_cancel'>Hủy</button>
					</td>
				</tr>
			</table>
		</div>
</div>
<?php 
	if ($rs['chucvu'] == 1) {
		echo '<div class="datsan-block">
			<div class="title-list"><b>SƠ ĐỒ SÂN BÓNG</b></div><br />

			<div id="viewsanbong"></div>
		</div>';
	}
?>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
	
	xemDsDatSan(getToday());
	xemDsDatSanKhach(getToday());

	$("#datsan_batdau_gio").on("input", function(){
        // Print entered value in a div box
		if($("#datsan_batdau_gio").val()<16){
			$("#datsan_dongia").val('3000');
		}
		else if($("#datsan_batdau_gio").val()<17 || ($("#datsan_batdau_gio").val()>=17 && $("#datsan_batdau_gio").val()<18 && $("#datsan_batdau_phut").val()<=30)){
			$("#datsan_dongia").val('6000');
		}
		else if($("#datsan_batdau_gio").val()<20 || ($("#datsan_batdau_gio").val()>=20 && $("#datsan_batdau_gio").val()<21 && $("#datsan_batdau_phut").val()<=30)){
			$("#datsan_dongia").val('8000');
		}
		else {
			$("#datsan_dongia").val('4000');
		} 
    });
	$("#datsan_batdau_phut").on("input", function(){
        // Print entered value in a div box
		if($("#datsan_batdau_gio").val()<16){
			$("#datsan_dongia").val('3000');
		}
		else if($("#datsan_batdau_gio").val()<17 || ($("#datsan_batdau_gio").val()>=17 && $("#datsan_batdau_gio").val()<18 && $("#datsan_batdau_phut").val()<=30)){
			$("#datsan_dongia").val('6000');
		}
		else if($("#datsan_batdau_gio").val()<20 || ($("#datsan_batdau_gio").val()>=20 && $("#datsan_batdau_gio").val()<21 && $("#datsan_batdau_phut").val()<=30)){
			$("#datsan_dongia").val('8000');
		}
		else {
			$("#datsan_dongia").val('4000');
		} 
    });

	$("#datepicker").daterangepicker({
		singleDatePicker: true,
		showDropdowns: true,
		minYear: 2019,
		maxYear: parseInt(moment().format('YYYY'), 10)
	}, function(start, end, label) {
		xemDsDatSan(start.format("YYYY-MM-DD"));
		xemDsDatSanKhach(start.format("YYYY-MM-DD"));
	});
	
	
	$("#datsan_ok").click(function() {
		// insert into database
		var ma_kh = Number($('#datsan_khachhang')[0].lastChild.data);
		var ma_san = $("#datsan_tensan").attr("ma_san");
		var ngay_dat = $("#datsan_ngaydat").text();
		var bat_dau_gio = $("#datsan_batdau_gio").val();
		var bat_dau_phut = $("#datsan_batdau_phut").val();
		var ket_thuc_gio = $("#datsan_ketthuc_gio").val();
		var ket_thuc_phut = $("#datsan_ketthuc_phut").val();
		var bat_dau = ngay_dat + " " + bat_dau_gio + ":" + bat_dau_phut + ":" + "00";
		var ket_thuc = ngay_dat + " " + ket_thuc_gio + ":" + ket_thuc_phut + ":" + "00";
		if ($("#datsan_dongia").val().trim() == "") {
			$("#datsan_dongia").val("0");
		}
	
		var don_gia = $("#datsan_dongia").val();
		if (parseInt(don_gia) < 3000) {
			thongbaoloi("Đơn giá không được nhỏ hơn 3000đ/phút!!!");
			return;
		}
		taoDatSan(ma_kh, ma_san, bat_dau, ket_thuc, don_gia);
		$("#formDatSan").css("display","none");
		$("#grayscreen").css("display","none");
	});
	
	$("#datsan_cancel").click(function() {
		$("#formDatSan").css("display","none");
		$("#grayscreen").css("display","none");
		// $("#datsan_them_ten").val("");
		// $("#datsan_them_sdt").val("");
	});

	function taoDatSan(ma_kh, ma_san, bat_dau, ket_thuc, don_gia) {
		$.ajax({
			url: "/quanlysanbong/api/taodatsan.php",
			type: "POST",
			cache: false,
			data: {
				ma_kh : ma_kh,
				ma_san : ma_san,
				bat_dau : bat_dau,
				ket_thuc : ket_thuc,
				don_gia : don_gia
			},
			success: function(msg) {
				if (msg.includes("trùng")) {
					thongbaoloi("Không thể tạo đặt sân", msg);
				} else {
					thongbaotot(msg);
				}
				xemDsDatSan(getCurrentFormattedDate());
				xemDsDatSanKhach(getCurrentFormattedDate());
			},
			error: function() {
				thongbaoloi("Lỗi hệ thống!!");
			}
		});
	}
	

	// $("#datsan_btnthemkh").click(function() {
	// 	var ten = $("#datsan_them_ten").val();
	// 	var sdt = $("#datsan_them_sdt").val();
	// 	if (kiemtraten(ten) && kiemtrasdt(sdt)) {
	// 		themKhachHang(ten, sdt);
	// 	}
	// });
	
	// $("#chbThemKhach").change(function() {
	// 	if($(this).is(":checked")) {
	// 		$("#datsan_themkhach").removeClass("disabled");
	// 	} else {
	// 		$("#datsan_themkhach").addClass("disabled");
	// 	}
	// });
	
// 	function themKhachHang(ten, sdt) {
// 	$.ajax({
// 		url: "/quanlysanbong/api/dskhachhang.php",
// 		type: "POST",
// 		cache: false,
// 		data: {
// 			action: "add",
// 			ten : ten,
// 			sdt : sdt
// 		},
// 		success: function(msg) {
// 			if (msg.includes("đã tồn tại")) {
// 				thongbaoloi(msg);
// 			} else {
// 				$("#datsan_them_ten").val("");
// 				$("#datsan_them_sdt").val("");
// 				getDsKhachHang();
// 			}
// 		},
// 		error: function() {
// 			alert("Khong the them khach hang moi!!!");
// 		}
// 	});
// }
});
</script>