<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<html>
    <head>
    <title> Tabel Absen</title>
    </head>
	<br><br><br><br>
    <body>
    <body align="center">
	
	<div align="center" class="tabel">
		<h1>Data Absen</h1>		
		<a class="btn btn-sm btn-success" href="create_absen.php">Tambah Data</a>
		<br><br>
		<table align="center" width="800px" border="1">
			<thead align="center">
				<tr align="center" style="background-color:pink;">
					<th>Nomor</th>
					<th>ID Absen</th>
					<th>Tanggal Absen</th>
					<th>Masuk</th>
					<th>Keluar</th>
                    <th>Kode Dosen</th>
                    <th>Sesi</th>
                    <th>Kelas Sesi</th>
					<th>aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_absen();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr style="background-color:aqua;">
							<td><?=$index++ ?></td>
							<td><?=$data->id_absen ?></td>
							<td><?=$data->tgl_absen ?></td>
							<td><?=$data->masuk ?></td>
                            <td><?=$data->keluar ?></td>
                            <td><?=$data->kode_dosen ?></td>
                            <td><?=$data->sesi ?></td>
                            <td><?=$data->kelas_sesi ?></td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_absen.php?id_absen=<?=$data->id_absen ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="Proses.php?id_absen=<?=$data->id_absen ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel data absen.</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>


</body>
<?php
include 'footer.html';
?>
</html>