<?php

// Giris.php sayfasındaki form verileirini veri tabanı ile doğrulayıp girişi index.php sayfasın ayönlendirilir.
include 'Giris.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yazlab";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı Kontrolü
	   if(!$conn){
		  die('Mysql bağlantısı basarısız!');
	   }
	   else{
			  echo'Mysql bağlantısı başarılı';
	   }


//Veri tabanı ile bağlantıyı include komutu ile içe aktarıyoruz.

if(isset($_POST['gonder']))
{


//Formumuzdan POST methodu ile aldığımız kullanıcı adı ve şifreyi değişkene atıyoruz.
$kullaniciAdi = $_POST['TC'];
$Sifre = $_POST['Sifre'];
//Forma girilen kullanıcı adını veri tabanımızda böyle bir kullanıcı var mı eşleştiriyoruz.
$sql = "SELECT * FROM giris where TC='$kullaniciAdi' and Sifre='$Sifre'";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
//Eğer sorgulanan kullanıcı adı var ise bir oturum oluşturup home.php ye yönlendiriyoruz
//Yok ise hata verdiriyoruz.
 session_start();
if(mysqli_num_rows($result) == 1)
{

	$bul="Select * From giris where TC='$kullaniciAdi' and Sifre='$Sifre' ";
	
	$kayit= $conn->query($bul);
	$satir=$kayit->fetch_assoc();

	$_SESSION['TC'] = $kullaniciAdi; 
	$_SESSION['Sifre'] = $Sifre; 
	$_SESSION['Yetki'] = $satir['Yetki'];
	echo "Yetki:".$_SESSION['Yetki'];

		if($_SESSION['Yetki']=="1")
		{
			header("location: index.php");
		}
		else
		{
			header("location: Guvenlik.php");
		}
 	 // Redirecting To Other Page
}else
{
echo "<center>"."Kullanıcı adı veya şifreniz yanlış!"."</br>"."</center>";
}

/*if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
    header("location: index.php");
} 
else {
    echo "Error: " . mysqli_error($conn);
}*/


mysqli_close($conn);
  
}

?>