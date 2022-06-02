<?php
	include("../session.php");
	
	if ($rs['chucvu'] == 0) {
		echo 'chỉ ad mới được xác nhận';
	}else{
		$datsan_id = $_POST['datsan_id'];
		$conn = new mysqli('localhost','root','','quanlysanbong');
		$sql_check = "SELECT * FROM dat_san WHERE id=$datsan_id" ;
		$result= $conn->query($sql_check);
		$row = $result->fetch_assoc();
		if($row['da_thanh_toan'] == 0){
			$sql = "UPDATE dat_san SET da_thanh_toan=1 WHERE id=$datsan_id";
		} else{
			$sql = "UPDATE dat_san SET da_thanh_toan=0 WHERE id=$datsan_id";
		}
		mysqli_query($db, $sql);
	}
	die;
?>