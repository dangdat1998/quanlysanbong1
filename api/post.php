<?php
	include("../session.php");

	if ($rs['chucvu'] == 0) {
		echo 'Bạn không có quyền đăng bài.';
	}else if ($_GET['action'] == 'post') {
		$content = 'this is my test post';
		mysqli_query($db, "INSERT INTO post (`id`, `username`, `content`, `time`) VALUES (NULL, '".$rs['username']."', '".$content."', '".time()."')");
		echo "Đăng bài thành công";
	}
?>