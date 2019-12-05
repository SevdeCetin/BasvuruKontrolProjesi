<html>
<head>

<title>Basvuru Kayıt</title>

</head>
<body>


<?php
  
include 'Link1.php';

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
  $LinkSeviye="Seviye1";
  $onay="onaylanmadı";

  $sql="INSERT INTO isci (Firma,TC,AdSoyad,Alan,email,Belge1,LinkSeviye,onay) 
  VALUES ('$Firma','$TC','$AdSoyAd','$Alan','$email','$Belge1','$LinkSeviye','$onay')";



  $ekle=@mysqli_query($conn,$sql);

if ($ekle)
{
  echo "Kayıt Eklendi";
  header("location: Link1.php");
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