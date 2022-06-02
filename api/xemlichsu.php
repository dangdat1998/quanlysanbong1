<?php
	include("../session.php");
	$cv = $rs['ten'];
	if (isset($_GET['action'])) {
		$sql = "";
		if ($_GET['action']=='xemlichsu') {
			$day = $_GET['day'];
			$sql = "SELECT tai_khoan.ten as 'ten_kh', tai_khoan.sdt, san_bong.ten, dat_san.bat_dau, dat_san.ket_thuc, dat_san.id, dat_san.da_thanh_toan, dat_san.don_gia, dat_san.ma_san FROM dat_san, tai_khoan, san_bong WHERE dat_san.ma_kh=tai_khoan.id AND dat_san.ma_san=san_bong.id ORDER BY san_bong.ten, dat_san.bat_dau";
		} 


		$rs = mysqli_query($db, $sql);
		$json_response = array();
		
		while($row = mysqli_fetch_row($rs)) {
			$r['ten_kh'] = $row['0'];
			$r['sdt'] = $row['1'];
			$r['ten_san'] = $row['2'];
			$r['bat_dau'] = $row['3'];
			$r['ket_thuc'] = $row['4'];
			$r['datsan_id'] = $row['5'];
			$r['da_thanh_toan'] = $row['6'];
			$r['don_gia'] = $row['7'];
			$r['ma_san'] = $row['8'];
			if($r['ten_kh'] == $cv){
				array_push($json_response, $r);
			}
		}
		echo json_encode($json_response);
	}
	
		// ket thuc tra ve du lieu, stop khong chay tiep
		die;
?>