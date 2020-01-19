<title>	<?=$header;?></title>

<style type="text/css">
	table.data {
		border-collapse: collapse;
	}
	table.data th, table.data td{
		padding: 6px;
	}


</style>

<div style="margin-bottom: 20px;">
<a href="<?=site_url('buku/add');?>"><button>Tambah</button></a>
</div>


<table class="data" border="3">	
		<tr>	
				<th>No.</th>
				<th>Judul</th>
				<th>Pengarang</th>
				<th>tahun Terbit</th>
		</tr>
		<?php 
			$no=1;
			foreach ($buku as $b => $row) { ?>
				<tr>	
						<td><?=$no++;?></td>
						<td><?=$row->judul;?></td>
						<td><?=$row->pengarang;?></td>
						<td><?=$row->tahun_terbit;?></td>
				</tr>

		<?php

			} ?>
</table>