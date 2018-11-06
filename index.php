<?php 
require_once "baglan.php"; 



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JQuery PHP Crud İşlemleri</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<style type="text/css">
		
		#kayit-ekle {

			display: none;
		}

		#kayit-duzenle {

			display: none;
		}

		#bos-alan {

			display: none;
		}

		#basari-islem {

			display: none;
		}

		#basari-islem-duzenle {

			display: none;
		}

	</style>
	

	<body>

		<div class="container">
			
			<h1>Kayıt Formu</h1>
			<div align="right">
				<button id="yeni-ekle" class="btn btn-success mb-4">Yeni Ekle</button>
			</div>
			
			<div id="listele"></div>

			<div id="kayit-ekle">

				<h3>Kayıt Ekleme</h3>
				<hr>

				<div id="bos-alan" class="alert alert-danger">
					Form Alanlarını Boş Bırakamazsınız
				</div>

				<div id="basari-islem" class="alert alert-success">
					
				</div>


				<form method="post" id="jquery-ekle">
					
					<div class="form-group">
						<label>Adınız</label>
						<input type="text" class="form-control" id="ad_ekle" name="ad_ekle" placeholder="Adınızı Girin...">
					</div>

					<div class="form-group">
						<label>Soyadınız</label>
						<input type="text" class="form-control" id="soyad_ekle" name="soyad_ekle" placeholder="Soyadınızı Girin...">
					</div>
					<input type="hidden" name="bilgiekle">

					<button type="button" id="gonder" class="btn btn-primary">Kayıt Ekle</button>
					<button type="button" id="geridon" class="btn btn-warning">Geri Dön</button>

				</form>
				

			</div>


			<div id="kayit-duzenle">




				<h3>Kayıt Düzenleme</h3>
				<hr>

				<div id="bos-alan" class="alert alert-danger">
					Form Alanlarını Boş Bırakamazsınız
				</div>

				<div id="basari-islem-duzenle" class="alert alert-success">
					
				</div>


				<form method="post" id="jquery-duzenle">
					
					<div class="form-group">
						<label>Adınız</label>
						<input type="text" class="form-control" id="ad_duzenle" name="ad_duzenle" value="">
					</div>

					<div class="form-group">
						<label>Soyadınız</label>
						<input type="text" class="form-control" id="soyad_duzenle" name="soyad_duzenle" value="">
					</div>
					<input type="hidden" name="bilgiduzenle">
					<input type="hidden" id="bilgi_id" name="bilgi_id" value="">

					<button type="button" id="guncelle" class="btn btn-primary">Kayıt Düzenle</button>
					<button type="button" id="geridonduzenle" class="btn btn-warning">Geri Dön</button>

				</form>
				

			
				




			</div>

		</div>



		



		<!-- JQuery Projeye dahil etme -->
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/ozel.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



	</body>
	</html>