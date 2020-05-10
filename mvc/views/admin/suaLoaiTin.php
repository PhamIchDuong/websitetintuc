<h2>Sửa loại tin</h2>
<form action="" method="post" accept-charset="utf-8">
<table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">	
	<tbody>
	<?php 
		foreach ($data['chitietloaitin'] as $key => $value) {
			# code...
		}
	?>
		<tr>
			<td>Tên</td>
			<td><input type="text" name="Ten" value="<?php echo $value['Ten'] ?>" placeholder=""></td>
		</tr>
		<tr>
			<td>Thứ tự </td>
			<td><input type="text" name="ThuTu" value="<?php echo $value['ThuTu'] ?>" placeholder=""></td>
		</tr>
		<tr>
			<td>Ẩn Hiện </td>
			<td><p>
				<label>
				<input <?php if($value['AnHien'] == 1) echo "checked = 'checked';"; ?> type="radio" name="AnHien" value="1"> Hiện
			</label>
			<label>
				<input <?php if($value['AnHien'] == 0) echo "checked = 'checked';"; ?> type="radio" name="AnHien" value="0"> Ẩn
			</label>
			</p></td>
		</tr>
		<tr>
			<td>idTL </td>
			<td>
				<label for="idTL"></label>
				<select name="idTL" id="idTL">
					<?php
					foreach ($data['danhsachtheloai'] as $key1 => $value1) {
						
					?>
					<option <?php if($value['idTL'] ==$value1['idTL'] )  echo "selected = 'selected'";?>  value="<?php echo $value1['idTL'] ?>"><?php echo $value1['TenTL'] ?></option>
					<?php
					}
					?>
				</select>
				
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="txtSua" value="Sửa"></td>
		</tr>


	</tbody>
</table>
</form>