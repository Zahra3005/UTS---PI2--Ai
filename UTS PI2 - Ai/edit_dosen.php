<?php
include 'header.html';
$kode_dosen = $_GET['kode_dosen'];
include 'model.php';
$model = new Model();
$data = $model->edit_dosen($kode_dosen);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Tabel Dosen</title>
</head>
<br><br><br><br>
<body>
	
	<div class="container">
  	<div class="row">
    	<div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/features-3.png" class="img-fluid" alt="">
	</div>
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Data Dosen</h1>
	<br><br>
	<form form align="center" action="proses.php" method="post"> <strong>
		<label>Kode Dosen</label>
		<br>
		<input class="form-control" type="number" name="kode_dosen" value="<?php echo $data->kode_dosen ?>">
		<br>
		<label>NIDN</label>
		<br>
		<input class="form-control" type="number" name="nidn" value="<?php echo $data->nidn ?>">
		<br>
        <label>NIPY</label>
		<br>
		<input class="form-control" type="number" name="nipy" value="<?php echo $data->nipy ?>">
		<br>
        <label>Nama Dosen</label>
		<br>
		<input class="form-control" type="text" name="nama_dosen" value="<?php echo $data->nama_dosen ?>">
		<br>
        <label>Kode Prodi</label>
		<br>
		<input class="form-control" type="number" name="kode_prodi" value="<?php echo $data->kode_prodi ?>">
		<br><br></strong>
		<a class="btn btn btn-warning"  href="tbldosen.php">Kembali</a> <button class="btn btn btn-info" type="submit" name="submit_editdosen">Submit</button> 
	</form>
	<div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>
  </div>
</div>
	
	
</body>
<?php
include 'footer.html';
?>
</html>
