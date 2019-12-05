<!DOCTYPE html>
<html lang="en">
<head>

  <title>Güvenlik Girişi</title>
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
    
    .res{
      width:100px;
      height: 100px;
    }

  </style>
<body>


<div class="jumbotron text-center">
  <center><div class="res"><img src="\icon\Guvenlik.png"></div></center>
<p>Güvenlik Girişi</p>
</div>
  

<div class="container">


<form class="needs-validation" method="post" action="" novalidate>
  <div >

  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
      <label for="validationTooltip01">TC Kimlik Numarası:</label>
      <input type="text" class="form-control" name="TC"  required> 
    </div>
   </div>

   <div class="row">
    <div class="col-sm-1"></div>
   <div class="col-sm-4">
   <br>
  <button class="btn btn-primary btn-sm" name="gonder" type="submit" >Gönder</button>
  </div>



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yazlab";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı Kontrolü
     if(!$conn){
      die('Mysql bağlantısı basarısız!<br>');
     }
     else{
        echo'Mysql bağlantısı başarılı<br>';
     }



if($_POST)
{
      if(empty($_POST['TC']))
    {
      echo "<br><br>TC Kimlik Numarasını Giriniz!";
    } 
    
      if(isset($_POST['TC']))
    {
      $TC=$_POST['TC'];
    }


$bul="Select * From isci where TC='$TC'";

$kayit= $conn->query($bul);
  if($kayit->num_rows>0)
  {
      while($satir=$kayit->fetch_assoc())
      {
        echo "<div class='col-sm-4'><ul class='list-group'>
        <li class='list-group-item'>  TC:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$satir['Firma']."</li>
        <li class='list-group-item'>  Ad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$satir['TC']."</li>
        <li class='list-group-item'>  SoyAd:&nbsp;&nbsp;&nbsp;".$satir['AdSoyad']."</li>
        <li class='list-group-item'>  Alan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$satir['Alan']."</li>
        <li class='list-group-item'>  Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$satir['email']."</li>
        <li class='list-group-item'>  Belge1:&nbsp;&nbsp;&nbsp;".$satir['Belge1']."</li>
        <li class='list-group-item'>  Onay:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$satir['onay']."</li></ul></div>";

      }
  }
}

/* TÜM KAYITLARI LİSTELER
$bul="Select * From giris";
$kayit= $conn->query($bul);
  if($kayit->num_rows>0)
  {
      while($satir=$kayit->fetch_assoc())
      {
        echo "TC:".$satir['TC'];
        echo "<br>Ad:".$satir['Ad'];
        echo "<br>SoyAd:".$satir['SoyAd'];
      }
  }
*/




$conn->close();
?>

  </div>
</form>
</div>


</body>
</html>