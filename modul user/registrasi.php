<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Masukkan Judul Dokumen</title>
	<link rel="stylesheet" type="text/css" href="res/css/style.css" media="all"/>
</head>
<body>
	
	<div id="container">
		
		<!-- Header Section -->
		<div id="header" class="frame">
			<div class="kolom-7">
				<img src="res/img/logo.png" alt="" id="logo"/>
			</div>
			<div class="kolom-4">
				<div id="user-panel">
					
					<div id="user" class="frame">
						<img id="user-pict" class="kolom-5" src="res/img/userpict_h.png" alt=""/>
						<div id="user-text" class="kolom-7">
						<?php session_start(); ?>
						 <?php if(isset($_COOKIE['username'])){ $hoho = $_SESSION['username'];?>
							<h3>Welcome, <span class="user-name"><a href="edit-profile.php" id="member"><?php echo "$hoho" ?></a></span>!</h3>
							<p id="user-control">
								<span class="edit-logout">	<a href='logout.php' id='logout2'>Logout</a></span>
							</p>
							<?php }else {
								UNSET($_SESSION['username']);  
								UNSET($_SESSION['password']); 
								session_destroy();  
							?>
							<div id = "logreg">
							<p id="user-control">
								
									<span class="edit-logout">	<a id="login2" href="javascript:login('show')">Login</a></span>
									&nbsp;or&nbsp;
									<span class="edit-logout">	<a id="register2" href="register.php">Register</a></span>
								
							</p>
							<br/></div>
							<?php } ?>
							<a href="#" class="btn">Check Your Cart</a>
						</div>
					</div>
					
					<div id="search-bar" class="frame">
						<form action="search.php">
							<input id="search-box" class="kolom-9" type="text" name="src" value="Ketikkan barang yang dicari...">
							<input id="search-button" class="kolom-1" type="submit" value="">
						</form>					
					</div>
				</div>
			</div>			
		</div>
		
		<div id="popupbox"> 
			<form name="login" id="login" action="cek_login.php" method="post">
				<center><a href="javascript:login('hide')" id ="close">[X] close</a></center> 
				<center>Username:</center>
				<center><input name="username" size="14" /></center>
				<center>Password:</center>
				<center><input name="password" type="password" size="14" /></center>
				<center><input type="button" name="button" id= "sbmtlogin"  onclick="forLogin()" value="login" /></center>
			</form>

		</div> 
		<!-- End of Header -->
		

		<div id="form-registrasi" class="frame">
			<p id="registration-title">Registration</p>
			

			<form id='register' action='insertdata.php' method='post' accept-charset='UTF-8' onsubmit = "">
			
				<div class="form-field">
					<p class="label">Username :</p>
					<p>
					<input type='text' name='validasiusername' id='validasiusername' maxlength="10" value ="tidak valid" readonly/>
					<input name="username" title="minimal 5 karakter" id="username" required="required" onkeyup="!!(cekusername() & cekvalidAll())" class="field-box kolom-12"/>
					</p>
				</div>
				
				<div class="form-field">
					<p class="label">Password :</p>
					<p>
					<input type='text' name='validasipassword' id='validasipassword' maxlength="10" value ="tidak valid" readonly/>
					<input type = "password" name="password" title="minimal 8 karakter" id="password" oninput="!!(cekPassword() & cekCPassword())" required="required" onkeyup="cekvalidAll()" class="field-box kolom-12"/>
					</p>
				</div>				

				<div class="form-field">
					<p class="label">Password(retype) :</p>
					<p>
					<input type='text' name='validasiCpassword' id='validasiCpassword' maxlength="10" value ="tidak valid" readonly/>
					<input type = "password" name="cpassword" title="minimal 8 karakter" id="cpassword" oninput="cekCPassword()" required="required" onkeyup="cekvalidAll()" class="field-box kolom-12"/>
					</p>
				</div>		
				
				<div class="form-field">
					<p class="label">Nama Lengkap :</p>
					<p><input type='text' name='validasinamalengkap' id='validasinamalengkap' maxlength="10" value ="tidak valid" readonly/>
					<input type='text' name='namalengkap' title ="lalala yeyeye" id='namalengkap' maxlength="50" required="required" onkeyup="!!(cekNamaDuaKata() & cekvalidAll())" class="field-box kolom-12"/>
					</p>
				</div>
				
				<div class="form-field">
					<p class="label">Email :</p>
					<p>
					<input type='text' name='validasiemail' id='validasiemail' maxlength="10" value ="tidak valid" readonly/>
					<input type='text' name='email'  id='email' title = "cuman@contoh.com" maxlength="50" required="required" onkeyup="!!(cekEmail() & cekvalidAll())" class="field-box kolom-12"/>
					</p>
				</div>
				
				<div class="form-field">
					<p class="label">Handphone :</p>
					<p>
					<input type='text' name='validasinohp' id='validasinohp' maxlength="10" value ="tidak valid" readonly/>
					<input type='text' name='nohp' id='nohp' title="harus angka" maxlength="50" required="required" onkeyup="!!(ceknohp() & cekvalidAll())" class="field-box kolom-12"/>
					</p>
				</div>
				
				<div class="form-field">
					<p class="label">Provinsi :</p>
					<p><input type='text' name='provinsi' id='provinsi' maxlength="50" required="required" onkeyup="cekvalidAll()" class="field-box kolom-12"/></p>
				</div>
				
				<div class="form-field">
					<p class="label">Kota/Kabupaten :</p>
					<p><input type='text' name='kotakabupaten' id='kotakabupaten' maxlength="50" required="required" onkeyup="cekvalidAll()" class="field-box kolom-12"/></p>
				</div>
				
				<div id="alamat" class="form-field">
					<p class="label">Alamat :</p>					
					<input type='textarea' name='alamat' id='alamat' maxlength="50" required="required" onkeyup="cekvalidAll()" class="field-box kolom-12 field-area"></textarea>
				</div>
				
				
				<div class="form-field">
					<p class="label">Kode Pos :</p>
					<p><input type='text' name='kodepos' id='kodepos' pattern="[0-9]+[0-9]*" title="harus angka" maxlength="50" required="required" onkeyup="cekvalidAll()" value="" class="field-box kolom-12"/></p>
				</div>
				



				<br/>
				<input type='submit' id="submitbutton"  class="btn" name='register' value='Register' disabled==false />
			</form>
		</div>
		
	</div>
	

	
	<!-- Javascript -->
	<script src="res/js/common.js" type="text/javascript"></script>	
	<script src="scriptregister.js"></script>
	<script src="AjaxRegister.js"></script>
	<script src="res/js/popup.js"></script> 
	<script src="Ajaxlogin.js"></script> 
	<script>
	function forLogin(){
		if (AJAXPost()!=' 100 '){
			var username = AJAXPost();
			document.getElementById('sbmtlogin').value="Login\nLogin Sukses";
			var newhtml =		'<h3>Welcome, <span class="user-name"><a href="edit-profile.php" id="member">'+username+'</a></span>!</h3><p id="user-control"><span class="edit-logout">	<a href="logout.php" id="logout2">Logout</a></span></p>';
			document.getElementById("logreg").innerHTML=newhtml;
			location.href="home.php";
			
		}else{
			document.getElementById('sbmtlogin').value="Login\nusername/password salah";
		}
	}
	</script>

</body>
</html>