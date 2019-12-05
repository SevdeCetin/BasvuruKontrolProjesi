<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kullanıcı Girişi</title>
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
<body>

  

<div class="jumbotron text-center">
  <center><div class="res"><img src="\icon\Kgiris.png"></div></center>
<h2>Kullanıcı Girişi</h2>
</div>
  

<div class="container">


<form class="needs-validation" action="kayitekle.php" method="POST" novalidate>
  <div >

  <div class="row">
  <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <label for="validationTooltip01">KullanıcıAdı</label>
      <input type="text" class="form-control" name="TC" placeholder="TC kimlik numaranızı giriniz." required> 
    </div>
   </div>
   <div class="row">
   <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <label for="validationTooltip03">Şifre</label>
      <input type="password" class="form-control" name="Sifre"  required>
      
    </div>
    </div>
   <div class="row">
   <div class="col-sm-4"></div>
   <div class="col-sm-4">
   <br>
  <button class="btn btn-primary btn-sm" name="gonder" type="submit" >Gönder</button>
  </div>
  </div>
</form>
</div>


<?php



?>

</body>
</html>