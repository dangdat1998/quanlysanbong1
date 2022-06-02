<title>Doanh Thu</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/index.css" />

<?php
	include("session.php");

	include("header.php");
?>
<div class="container">
    <div class="datsan-block">
        <div class="title-list"><b>DANH SÁCH ĐẶT SÂN </div> <br/>
        <div class="list-table-block">
            <div class="container" id="ds_datsan_lichsu"></div><br />
        </div>
    <div>
</div>
<script>
$(document).ready(function() {
    xemDsLichsu(getToday());
})
</script>
