<?php
include 'header.html';
$kode_prodi = $_GET['kode_prodi'];
include 'model.php';
$model = new Model();
$data = $model->edit($kode_prodi);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Tabel Prodi</title>
</head>
<br><br><br><br>
<body>
	
	<div class="container">
  	<div class="row">
    	<div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/features-3.png" class="img-fluid" alt="">
	</div>
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Data Prodi</h1>
	<br><br>
	<form form align="center" action="proses.php" method="post"> <strong>
		<label>Kode Prodi</label>
		<br>
		<input class="form-control" type="number" name="kode_prodi" value="<?php echo $data->kode_prodi ?>">
		<br>
		<label>Nama Prodi</label>
		<br>
		<input class="form-control" type="text" name="nama_prodi" value="<?php echo $data->nama_prodi ?>">
		<br><br></strong>
		<a class="btn btn btn-warning"  href="tblprodi.php">Kembali</a> <button class="btn btn btn-info" type="submit" name="submit_editprodi">Submit</button> 
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
