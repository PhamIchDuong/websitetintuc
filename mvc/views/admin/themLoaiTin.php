<h2>Thêm loại tin</h2>
<form action="" method="post" accept-charset="utf-8">
<table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">	
	<tbody>
	
		<tr>
			<td>Tên</td>
			<td><input type="text" name="Ten" value="" placeholder=""></td>
		</tr>
		<tr>
			<td>Thứ tự </td>
			<td><input type="text" name="ThuTu" value="" placeholder=""></td>
		</tr>
		<tr>
			<td>Ẩn Hiện </td>
			<td><p>
				<label>
				<input type="radio" name="AnHien" value="1" placeholder=""> Hiện
			</label>
			<label>
				<input type="radio" name="AnHien" value="0" placeholder=""> Ẩn
			</label>
			</p></td>
		</tr>
		<tr>
			<td>idTL </td>
			<td>
				<label for="idTL"></label>
				<select name="idTL" id="idTL">
					<?php
					foreach ($data['danhsachtheloai'] as $key => $value) {
						
					?>
					<option value="<?php echo $value['idTL'] ?>"><?php echo $value['TenTL'] ?></option>
					<?php
					}
					?>
				</select>
				
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="txtThem" value="Thêm" placeholder=""></td>
		</tr>


	</tbody>
</table>
</form>