<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
</head>
<body><center>
	<table cellspacing="20">
		<thead>
			<tr>
				<th>No</th>
				<th>No Surat</th>
				<th>Nama Perusahaan</th>
				<th>Alamat Perusahaan</th>
				<th>Jenis Surat</th>
				<th>Tanggal Diambil</th>
				<th>Prodi</th>
				<th>NIM</th>
				<th>NIK</th>
			</tr>
		</thead>
		<tbody>
			<?php
                      $i=0;
                      foreach($data as $d) {
                        $i++;
                      ?>
			<tr>
				<td><?=$i;?></td>
                <td><?php echo $d['no_surat'];?></td>
                <td><?php echo $d['nama_perusahaan'];?></td>
                <td><?php echo $d['alamat_perusahaan'];?></td>
                <td><?php echo $d['jenis_surat'];?></td>
                <td><?php echo $d['tanggal_diambil'];?></td>
                <td><?php echo $d['prodi'];?></td>
                <td><?php echo $d['nim'];?></td>
                <td><?php echo $d['nik'];?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table></center>
</body>
</html>