<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Savy - www.dewankomputer.com</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>
	
	<div class="container">
		<h2 align="center" style="margin: 30px;">Dewan Savy Menyimpan History Form Input</h2>

        <form method="post" action="" id="form-input">  
        	<div class="row">
        		<div class="col-sm-5 offset-sm-3">
        			<div class="form-group">
						<label>Nama Mahasiswa</label>
						<input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control auto-save" required="true">
					</div>

	            	<div class="form-group">
						<label>Jurusan</label>
						<select name="jurusan" id="jurusan" class="form-control auto-save" required="true">
							<option value=""></option>
							<option value="Sistem Informasi">Sistem Informasi</option>
							<option value="Teknik Informatika">Teknik Informatika</option>
						</select>
					</div>

	            	<div class="form-group">
						<label>Jenis Kelamin</label><br>
						<input class="auto-save" type="radio" name="jenkel" id="jenkel1" value="Laki-laki"> Laki-laki
						<input class="auto-save" type="radio" name="jenkel" id="jenkel2" value="Perempuan"> Perempuan
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" id="alamat" class="form-control auto-save" required="true"></textarea>
						<p class="text-danger" id="err_alamat"></p>
					</div>

					<div class="form-group">
						<label>Hobi</label><br>
						<input class="auto-save" type="checkbox" name="hobi" id="hobi1" value="Memancing" required="true"> Memancing
						<input class="auto-save" type="checkbox" name="hobi" id="hobi2" value="Membaca"> Membaca
						<input class="auto-save" type="checkbox" name="hobi" id="hobi3" value="Programming"> Programming
					</div>

					<div class="form-group">
						<button type="submit" name="simpan" id="simpan" class="btn btn-primary">
							Simpan
						</button>
						<button type="submit" name="hapus" id="hapus" class="btn btn-primary">
							Simpan &amp; Hapus History
						</button>
					</div>
	            </div>
			</div>
        </form>
        <hr>
    </div>

    <div class="text-center">© <?php echo date('Y'); ?> Copyright:
	    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/savy.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.auto-save').savy('load');
			$( "#hapus" ).click(function() {
				$('.auto-save').savy('destroy');
			});
		});
	</script>
</body>
</html>