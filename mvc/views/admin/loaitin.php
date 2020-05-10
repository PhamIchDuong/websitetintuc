<h2>Quản lí loại tin</h2>
<table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">
	<thead>
		<tr>
			<th >idLT</th>
			<th >Ten</th>
			<th >TenTL_KhongDau</th>
			<th >Thứ tự</th>
			<th >AnHien</th>
			<th >idTL</th>
			<th ><a href="/laptrinhmvc/AdminHome/ThemLoaiTin/themLoaiTin">Thêm</a></th>
		</tr>
	</thead>
	<tbody>
	
		<?php 
		foreach ($data['danhsachloaitin'] as $key => $value) {
			# code...
			ob_start();

		?>
		<tr>
			<td>{idLT} </td>
			<td>{Ten}</td>
			<td>{Ten_KhongDau}</td>
			<td>{ThuTu}</td>
			<td>{AnHien}</td>
			<td>{idTL} </td>
			<td><a href="/laptrinhmvc/AdminHome/SuaLoaiTin/suaLoaiTin/{idLT}">Sửa</a> - <a href="/laptrinhmvc/AdminHome/XoaLoaiTin/xoaLoaiTin/{idLT}">Xóa</a></td>
		</tr>
		<?php 
			$s = ob_get_clean();
			$s = str_replace("{idTL}",$value["idTL"], $s);
			$s = str_replace("{idLT}",$value["idLT"], $s);
			$s = str_replace("{Ten}",$value["Ten"], $s);
			$s = str_replace("{Ten_KhongDau}",$value["Ten_KhongDau"], $s);
			$s = str_replace("{ThuTu}",$value["ThuTu"], $s);
			$s = str_replace("{AnHien}",$value["AnHien"], $s);
			echo $s;
		}
		?>


	</tbody>
</table>