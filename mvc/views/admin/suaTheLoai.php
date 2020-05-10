<h2>Sửa thể loại</h2>
<form action="" method="post" accept-charset="utf-8">
<table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">	
	<?php 
		foreach ($data['chitiettheloai'] as $key => $value) {
			# code...
		}
	?>
	<tbody>
	
		<tr>
			<td>Tên Thể Loại </td>
			<td><input type="text" name="TenTL" value="<?php echo $value['TenTL'] ?>" placeholder=""></td>
		</tr>
		<tr>
			<td>Thứ tự </td>
			<td><input type="text" name="ThuTu" value="<?php echo $value['ThuTu'] ?>" placeholder=""></td>
		</tr>
		<tr>
			<td>Ẩn Hiện </td>
			<td><p>
				<label>
				<input <?php if($value['AnHien'] ==1) echo "checked = 'checked'" ?> type="radio" name="AnHien" value="1" placeholder=""> Hiện
			</label>
			<label>
				<input <?php if($value['AnHien'] ==0) echo "checked = 'checked'" ?> type="radio" name="AnHien" value="0" placeholder=""> Ẩn
			</label>
			</p></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="txtSua" value="Sửa"></td>
		</tr>


	</tbody>
</table>
</form>