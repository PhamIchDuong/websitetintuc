
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TableSaw Stack Table</title>

	<link rel="stylesheet" href="<?=PATH?>/public/tablesaw.stackonly.css">
	<link rel="stylesheet" href="<?=PATH?>/public/css/demo.css">

	<script src="<?=PATH?>/public/tablesaw.stackonly.js"></script>
	<script src="<?=PATH?>/public/tablesaw-init.js"></script>
</head>
<body>
	<div class="wrapper">
	<div class="demo-header">
		<H1>Trang quản trị</H1>
	</div>
	<div class="nav-container">
		<div class="docs-globalnav">
			<nav class="docs-nav">
			<a href="/laptrinhmvc/AdminHome">Trang chủ</a>
			<a href="/laptrinhmvc/AdminHome/TheLoai/">quản lí thể loại</a>
			<a href="/laptrinhmvc/AdminHome/LoaiTin/">quản lí loại tin</a>
			<a href="/laptrinhmvc/AdminHome/TinTuc/">quản lí tin tức</a>
			</nav>
		</div>
	</div>
	<div style = "clear: both;" ></div>
	<hr>
	<div class="docs-main">
		<?php
            require "admin/". $data["Page"].".php";
        ?>
	</div>
	</div>
</body>
</html>
