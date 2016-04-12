<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<?php
$tahun=date(Y);

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Portal Kepegawaian</title>
</head>

<body class="body-login">
<div class="con-login">
<div id="lock"><img src="images/lock.png" width="50" height="50" /></div>
	<div class="foot-login">
<h1>Login</h1>
	<form id="loginform" name="loginform" method="post" action="act.php">
		<div align="center">
<input type="text" class="form-reg" id="username" name='username' placeholder="Username" required />
<input type="password" class="form-reg" id="password" name='password' placeholder="Password" required/>
<select name="user" class="forselect">
	<option disabled="disabled" selected="selected">Login as</option>
	<option value="KKKS">KKKS</option>
	<option value="Loket">Loket</option>
	<option value="Verifikator">Verifikator</option>
	<option value="Direktur">Direktur</option>
	<option value="Admin">Admin Sistem</option>
</select>
		</div>
			<button type="submit" class="btn-orange">Masuk</button>                
</form>
    </div>
</div>
</div>
<div id="line"><img src="images/loginshadow.png"  /></div>
<br>
<div id="foot1">Sistem RKBI Online</div>
<div id="foot2">Copyright &copy; <?php echo $tahun ?> ESDM. All Rights Reserved</div>

</body>
</html>
