<h2>Quản lí thể loại</h2>
<table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">
	<thead>
		<tr>
			<th >idTL</th>
			<th >TenTL</th>
			<th >TenTL_KhongDau</th>
			<th > Thứ tự</th>
			<th >AnHien</th>
			<th ><a href="/laptrinhmvc/AdminHome/ThemTheLoai/themTheLoai">Thêm</a></th>
		</tr>
	</thead>
	<tbody>
	
		<?php 
		foreach ($data['danhsachtheloai'] as $key => $value) {
			# code...
			ob_start();

		?>
		<tr>
			<td>{idTL} </td>
			<td>{TenTL}</td>
			<td>{TenTL_KhongDau}</td>
			<td>{ThuTu}</td>
			<td>{AnHien}</td>
			<td><a href="/laptrinhmvc/AdminHome/SuaTheLoai/suaTheLoai/{idTL}">Sửa</a> - <a href="/laptrinhmvc/AdminHome/XoaTheLoai/xoaTheLoai/{idTL}">Xóa</a></td>
		</tr>
		<?php 
			$s = ob_get_clean();
			$s = str_replace("{idTL}",$value["idTL"], $s);
			$s = str_replace("{TenTL}",$value["TenTL"], $s);
			$s = str_replace("{TenTL_KhongDau}",$value["TenTL_KhongDau"], $s);
			$s = str_replace("{ThuTu}",$value["ThuTu"], $s);
			$s = str_replace("{AnHien}",$value["AnHien"], $s);
			echo $s;
		}
		?>


	</tbody>
</table>