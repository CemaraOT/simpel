<html>
	<head>
	</head>
	<body>
		<?php
			$this->m_user->set_id_user($this->uri->segment(4));
			$query = $this->m_user->tampil_user_by_id_user();
			if($query->num_rows()){
				$row = $query->row();
		?>
		<div id="content" style="width:50%">
			<div style="border:1px solid black; text-align:center; padding:2% 0%;">
				<div>
					<text style="font-size:17pt;">Kartu SIMPEL</text><br/>
					<text style="font-size:13pt; top:25px;">Sistem Informasi Peminjaman Novel</text><br/>
				</div>
			</div>
			<div style="border:1px solid black; text-align:center; padding:3% 0%; padding-left:10%;">
				<table>
					<tr>
						<td>ID User</td>
						<td>:</td>
						<td><?php echo $row->id_user; ?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><?php echo $row->nama; ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><?php echo $row->alamat; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><?php echo $row->email; ?></td>
					</tr>
					<tr>
						<td>No. Telp</td>
						<td>:</td>
						<td><?php echo $row->no_telp; ?></td>
					</tr>
				</table>
			</div>
			<div style="border:1px solid black; text-align:left; padding:2% 0%; padding-left:7%;">
				<div>
					<text style="font-size:10pt;">* kartu ini harap dibawa disaat peminjaman atau pengembalian novel.</text><br/>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</body>
</html>

<script>
	window.print();
</script>

