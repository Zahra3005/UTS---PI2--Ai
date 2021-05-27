<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Absen</title>
</head>
<br><br><br><br>
<body>

<div class="container">
  <div class="row">

  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/features-4.png" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Tambah Data Absen</h1>
	<a class="btn btn-sm btn-warning" href="tblabsen.php">Kembali</a>
	<br><br>
	<form align="center" action="Proses.php" method="post"> <strong>
		<label>Id Absen</label>
		<br>
		<input class="form-control" type="text" name="id_absen">
		<br>
		<label>Tanggal Absen</label>
		<br>
		<input class="form-control" type="date" name="tgl_absen"><br>
		<br>
		<label>Masuk</label>
		<br>
		<input class="form-control" type="time" name="masuk">
		<br>
		<label>Keluar</label>
		<br>
		<input class="form-control" type="time" name="keluar">
		<br>
		<label>Kode Dosen</label>
		<br>
		<input class="form-control" type="number" name="kode_dosen">
		<br>
		<label>Sesi</label>
		<br>
		<input class="form-control" type="number" name="sesi">
		<br>
		<label>Kelas Sesi</label>
		<br>
		<input class="form-control" type="number" name="kelas_sesi"> </strong>
		<br>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-info" type="submit" name="submit_absen">Submit</button>
		
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