<html>
	<head>
	</head>
	<body>
		<center>
			<h2>Cetak Laporan SIMPEL</h2>
			<h4>Sistem Informasi Peminjaman Novel</h4>
		</center>
		<table cellpadding="2" cellspacing="0" border="1" width="90%" align="center">
			<thead>
				<tr>
					<th>ID Peminjaman</th>
					<th>Judul Novel</th>
					<th>Peminjam</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Kembali</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = $this->m_peminjaman->tampil_peminjaman();
					foreach($query->result() as $row){
				?>
				<tr>
					<td align="center"><?php echo $row->id_peminjaman; ?></td>
					<td><?php echo $row->judul; ?></td>
					<td><?php echo $row->nama; ?></td>
					<td align="center"><?php echo date('d F Y',strtotime($row->tgl_pinjam)); ?></td>
					<td align="center"><?php if($row->tgl_kembali == NULL){ echo '--'; }else{ echo date('d F Y',strtotime($row->tgl_kembali)); } ?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<br />
		<div style="padding-left:5%;">Tanggal Rekap : <?php echo date('d F Y');?></div>
	</body>
</html>

<script>
	window.print();
</script>