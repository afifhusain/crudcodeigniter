<title><?=$header; ?></title>

<?php echo form_open('buku/proses'); ?>
	<table>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td>
				<?php echo form_input('judul', '', 'required="required"'); ?>
				<!-- pola lain.. required array('required' =>'required') -->
			</td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td>:</td>
			<td>
				<?php echo form_input('pengarang', '', 'required="required"'); ?>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td>:</td>
			<td>
				<?php echo form_input(array('type' => 'number', 'name' => 'tahun', 'required' => 'required')); ?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<?php echo form_input(array('type' => 'submit', 'name' => 'add', 'value' => 'tambah')); ?>
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>