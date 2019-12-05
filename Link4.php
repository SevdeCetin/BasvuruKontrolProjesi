<html>
<head>

<title>Basvuru</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>  

  <script language="javascript">
window.alert("Lütfen formu göndermeden önce videoyu izleyiniz!");
</script> 

<div class="jumbotron text-center">
    <center><div class="res"><img src="\icon\Link.png"></div></center>
<p>4. Seviye Başvuru</p>
</div>
  



 <div class="Container">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-5">
      <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM" allowfullscreen></iframe>
      </div>
<br><br>
<p><b>Bu video içerisinde saklı kelimeler mevcuttur. Size giriş sırasında bu kelimeler sorulacaktır.</b></p>
<h4><b>Lütfen Dikkatlice İzleyiniz!</b></h4>
    </div>


    <div class="col-sm-5">
<!-- Card -->
<div class="card mx-xl-5">

    <!-- Card body -->
    <div class="card-body">

        <!-- Default form subscription -->
        <form action="" method="POST">
            <p class="h4 text-center py-4"><b>Başvuru Formu</b></p>

            <!-- Default input name -->
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Firma Adı </label>
            <input type="text" name="Firma" class="form-control">

            <br>

            <!-- Default input email -->
            <label for="defaultFormCardEmailEx" class="grey-text font-weight-light">TC Kimlik Numarası</label>
            <input type="number" name="TC" class="form-control">

            <br>

            <!-- Default input name -->
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Ad SoyAd</label>
            <input type="text" name="AdSoyad" class="form-control">

            <br>
            
            <!-- Default input name -->
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Alan</label>
            <input type="text" name="Alan" class="form-control">

            <br>

            <!-- Default input name -->
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Email</label>
            <input type="email" name="email" class="form-control">

            <br>
            
            <!-- Default input name -->
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Belge-1</label>
            <input type="file" name="Belge1" class="form-control">

            <br>
            
            <!-- Default input name -->
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Belge-2</label>
            <input type="file" name="Belge2" class="form-control">

            <br>
            <!-- Default input name  -->
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Belge-3</label>
            <input type="file" name="Belge3" class="form-control">

            <br>
            <!-- Default input name  -->
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Belge-4</label>
            <input type="file" name="Belge4" class="form-control">
           <br>

            <button class="btn btn-primary btn-sm" name="gonder" type="submit" >Gönder</button>
            </div>
        </form>
        <!-- Default form subscription -->

    </div>
    <!-- Card body -->

</div>
<!-- Card -->

      </div>
    </div> 
</div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yazlab";

$conn = @mysqli_connect($servername, $username, $password, $dbname);
//Veritabanına Bağlanalım.
        
// Bağlantı Kontrolü
     if(!$conn){
      die('Mysql bağlantısı basarısız!<br>');
     }
     else{
        echo'Mysql bağlantısı başarılı<br>';
     }
$DBselect=@mysqli_select_db($conn,"yazlab");

if(!$DBselect)
{
  die("<p>olmadı</p>".mysqli_error($conn));
}
echo "oldu";

if(isset($_POST['gonder']))
{ 

  $Firma=$_POST['Firma'];
  $TC=$_POST['TC'];
  $AdSoyAd=$_POST['AdSoyad'];
  $Alan=$_POST['Alan'];
  $email=$_POST['email'];
  $Belge1=$_POST['Belge1'];
  $Belge2=$_POST['Belge2'];
  $Belge3=$_POST['Belge3'];
  $Belge4=$_POST['Belge4'];
  $LinkSeviye="Seviye3";
  $onay="onaylanmadı";

  $sql="INSERT INTO isci (Firma,TC,AdSoyad,Alan,email,Belge1,Belge2,Belge3,Belge4,LinkSeviye,onay) 
    VALUES ('$Firma','$TC','$AdSoyAd','$Alan','$email','$Belge1','$Belge2','$Belge3','$Belge4','$LinkSeviye','$onay')";



  $ekle=@mysqli_query($conn,$sql);

if ($ekle)
{
  echo "Kayıt Eklendi";
  header("location: Link4.php");
}
else
{
  echo "Kayıt Eklenemedi.<br>".mysqli_error($conn);

}

  

//baglantıyı sonlandır
mysqli_close($conn);
}


?>
</body>
</html>