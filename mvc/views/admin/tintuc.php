<h2>Quản lí tin tức</h2>
<table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack" style = "border:1px solid;">
	<thead>
		<tr>
			<th ></th>
			<th ></th>
			<th ></th>
			<th ></th>
			<th ><a href="/laptrinhmvc/AdminHome/ThemLoaiTin/themLoaiTin">Thêm</a></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach ($data['danhsachtintuc'] as $key => $value) {
			# code...
			ob_start();

		?>
		<tr>
			<td>idTin : {idTin}</br>
			{Ngay}</td>
			<td><a href="/laptrinhmvc/AdminHome/SuaTin/suaTin/{idTin}">{TieuDe}</a><br>
			<img style = "float: left; margin-right: 5px;" src="<?=PATH?>/public/upload/tintuc/{urlHinh}" alt="" width="150px"
			height="100px">{TomTat}
			</td>
			<td>{TenTL}<br>-<br>{Ten}</td>
			<td>Số lần xem: {SoLanXem}<br>{TinNoiBat}-{AnHien}</td>
			<td><a href="/laptrinhmvc/AdminHome/SuaTin/suaTin/{idTin}">Sửa</a> - <a href="/laptrinhmvc/AdminHome/XoaTin/xoaTin/{idTin}">Xóa</a></td>
		</tr>
		<?php 
			$s = ob_get_clean();
			$s = str_replace("{TieuDe}",$value["TieuDe"], $s);
			$s = str_replace("{idTin}",$value["idTin"], $s);
			$s = str_replace("{Ten}",$value["Ten"], $s);
			$s = str_replace("{TenTL}",$value["TenTL"], $s);
			$s = str_replace("{Ngay}",$value["Ngay"], $s);
			$s = str_replace("{TomTat}",$value["TomTat"], $s);
			$s = str_replace("{AnHien}",$value["AnHien"], $s);
			$s = str_replace("{urlHinh}",$value["urlHinh"], $s);
			$s = str_replace("{SoLanXem}",$value["SoLanXem"], $s);
			$s = str_replace("{TinNoiBat}",$value["TinNoiBat"], $s);
			echo $s;
		}
		?>

	</tbody>
</table>