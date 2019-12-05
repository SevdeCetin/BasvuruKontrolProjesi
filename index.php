<html >
<head>
	<title>Link Gönderimi</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</head>
<style type="text/css">
/*ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #e8ecef;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #c4c7ca;
  color: white;
}

.active {
  background-color: #a4a7a9;
}	*/

</style>
<body>

<div class="jumbotron text-center">
  <center><div class="res"><img src="\icon\YoneticiF.png"></div></center>
<p>Firmalara Mail Gönderimi</p>

  <ul class="nav nav-tabs">
    <li class="active"><a href="http://localhost/index.php">Link Gönderimi</a></li>
    <li><a href="Y_listeleme.php">Başvurular</a></li>
  </ul>

<!-- Navbar 

<ul>
  <li><a class="active" href="http://localhost/index.php">Link Gönderimi</a></li>
  <li><a href="Y_listeleme.php">Başvurular</a></li>
</ul>
 Navbar -->

</div>
  
  <div class="container">


<form class="needs-validation" method="POST" action="" novalidate>
  <div >
    <div class="col-sm-8">
		<select name="SLink" class="browser-default custom-select">
		  <option selected >Gönderilecek Linki Seçiniz!</option>
		  <option  value="http://localhost/Link1.php">1.Seviye Link</option>
		  <option  value="http://localhost/Link2.php">2.Seviye Link</option>
		  <option  value="http://localhost/Link3.php">3.Seviye Link</option>
		  <option  value="http://localhost/Link4.php">4.Seviye Link</option>
		  <option  value="http://localhost/Link5.php">5.Seviye Link</option>		  
		</select>
    </div>  
  <div class="Row"></div>
  <div class="col-sm-6"><br>
  	  <label for="validationTooltip01">Firma Adı</label>
      <input type="text" class="form-control" name="Ad" placeholder="Firma Adını Giriniz.." required>
  </div>
    <div class="col-sm-6"><br>
  	  <label for="validationTooltip01">E-Mail</label>
      <input type="text" class="form-control" name="email" placeholder="Mail Adresini Giriniz.." required>
  </div>
  <div class="Row"></div>
  <div class="col-sm-12"><br>
  <button class="btn btn-primary btn-sm" name="gonder" type="submit" >Gönder</button>
</div>

</form>
</div>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php'; //Hata çıktıları için 
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['gonder'])){

if(isset($_POST['SLink']))
{
	$Link=$_POST['SLink'];
}
if(isset($_POST['Ad']))
{
	$Ad=$_POST['Ad'];
}
if(isset( $_POST['email']))
{
	$email=$_POST['email'];
}


$mail = new PHPMailer();

$mail ->IsSMTP();
$mail ->SMTPKeepAlive = true;
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'tls';
 
$mail ->Port = 587; //25,465
$mail ->Host = "smtp.gmail.com";

$mail ->Username = "YazilimLabProje.2@gmail.com";
$mail ->Password = "yazlabproje2";

$mail->setFrom('YazilimLabProje.2@gmail.com', 'Yaz');
$mail->addAddress($email, $Ad);

$mail->Subject = "Mail Gonderme Denemesi";
$mail->Body = "Merhaba, İş başvurusu için lütfen linke tıklanıyız! .$Link";

	if($mail->send())
{
	echo "<br><br><center><h4>Mail Gönderildi.</h4></center>";
}
else 
{
	echo "<br><br>Mail Gönderilemedi.";
}


}

?>

</body>
</html>