<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yönetici Listesi</title>
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
 /* ul {
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
} 
*/
</style>
<body>

 <script type="text/javascript">
   
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});

 </script> 

  <div class="jumbotron text-center">
    <center><div class="res"><img src="\icon\YoneticiL.png"></div></center>
<p>Yönetici Listeleme</p>

  <ul class="nav nav-tabs">
    <li ><a href="http://localhost/index.php">Link Gönderimi</a></li>
    <li class="active"><a href="Y_listeleme.php">Başvurular</a></li>
  </ul>
<!-- Navbar 

<ul>
  <li><a  href="http://localhost/index.php">Link Gönderimi</a></li>
  <li><a class="active" href="http://localhost/Y_listeleme.php">Başvurular</a></li>
</ul>

 Navbar -->

</div>

<div class="Container">
<div class='col-sm-1'></div>
<div class='col-sm-10'>
  <form class="needs-validation" method="post" action="" novalidate>
  <div class="row">
    <div class="col-sm-4">
      <label for="validationTooltip01">Firma:</label>
      <input type="text" class="form-control" name="Firma" required> 
    </div>
    <div class="col-sm-4">
      <label for="validationTooltip01">TC Kimlik Numarası:</label>
      <input type="text" class="form-control" name="TC" required> 
    </div>
   </div>
   <div class="row">
   <div class="col-sm-4">
   <br>
  <button class="btn btn-primary btn-sm" name="Fgonder" type="submit" >Listele</button>
  </div>
  <div class="col-sm-4">
   <br>
  <button class="btn btn-primary btn-sm" name="Getir" type="submit" >Onayla</button>
  </div>
  <div class="col-sm-4">
   <br>
  <button class="btn btn-primary btn-sm" name="Liste" type="submit" >Tümünü Listele</button>
  </div>
</div>

<?php
// Guvenlik.php sayfasındaki form verileirini veri tabanı ile doğrulayıp girişi Guvenlik.php sayfasın ayönlendirilir.


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yazlab";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı Kontrolü
     if(!$conn){
      die('<br>Mysql bağlantısı basarısız!<br>');
     }
     else{
        echo'<br>Mysql bağlantısı başarılı<br>';
     }
     $DBselect=@mysqli_select_db($conn,"yazlab");

if(!$DBselect)
{
  die("<p>olmadı</p>".mysqli_error($conn));
}
echo "oldu";


//------------------------Onaylama------------------------------

if(isset($_POST['Getir']))
{
if(empty($_POST['TC']))
{
  echo "<h5>TC Kimlik Numarasını Giriniz.</h5>";
}

       $TC=$_POST['TC'];
      $Onay="onaylandi";


      $sql="UPDATE isci SET onay ='$Onay' WHERE TC='$TC'";

      $update= $conn->query($sql);


$TcBul= $conn->query("Select * From isci where TC='$TC'");
  if($TcBul->num_rows>0)
  {
      while($satir=$TcBul->fetch_assoc())
      {
        echo "<table id='dtBasicExample' class='table table-striped table-bordered' cellspacing='0' width='100%'>
  <thead>
    <tr>
      <th class='th-sm'>Firma
      </th>
      <th class='th-sm'>TC
      </th>
      <th class='th-sm'>Ad SoyAd
      </th>
      <th class='th-sm'>Alan
      </th>
      <th class='th-sm'>Email
      </th>
      <th class='th-sm'>Seviye
      </th>
      <th class='th-sm'>Belge 1
      </th>
      <th class='th-sm'>Belge 2
      </th>
      <th class='th-sm'>Belge 3
      </th>
      <th class='th-sm'>Belge 4
      </th>
      <th class='th-sm'>Belge 5
      </th>
      <th class='th-sm'>Onay Durumu
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>".$satir['Firma']."</td>
      <td>".$satir['TC']."</td>
      <td>".$satir['AdSoyad']."</td>
      <td>".$satir['Alan']."</td>
      <td>".$satir['email']."</td>
      <td>".$satir['LinkSeviye']."</td>
      <td>".$satir['Belge1']."</td>
      <td>".$satir['Belge2']."</td>
      <td>".$satir['Belge3']."</td>
      <td>".$satir['Belge4']."</td>
      <td>".$satir['Belge5']."</td>
      <td>".$satir['onay']."</td>
    </tr>

  </tbody>
</table>
";
      }

          if ($update)
          {
            echo "<br><h5>Onaylama İşlemi Başarıyla Gerçekleştirildi.</h5><br>";
          }
    
          else
          {
            echo "Hata";
          }

  }

}

//------------------FİRMA'YA GÖRE LİSTELE-----------------------
 

if(isset($_POST['Fgonder']))
{

      if(isset($_POST['Firma']))
    {
      $Firma=$_POST['Firma'];
    }
      if(empty($_POST['Firma']))
    {
      echo "<br><br><h5>Firma İsmini Giriniz!</h5>";
    }

$bul="Select * From isci where Firma='$Firma'";

$kayit= $conn->query($bul);

  if($kayit->num_rows>0)
  {
      while($satir=$kayit->fetch_assoc())
      {
        echo "<table id='dtBasicExample' class='table table-striped table-bordered' cellspacing='0' width='100%'>
  <thead>
    <tr>
      <th class='th-sm'>Firma
      </th>
      <th class='th-sm'>TC
      </th>
      <th class='th-sm'>Ad SoyAd
      </th>
      <th class='th-sm'>Alan
      </th>
      <th class='th-sm'>Email
      </th>
      <th class='th-sm'>Seviye
      </th>
      <th class='th-sm'>Belge 1
      </th>
      <th class='th-sm'>Belge 2
      </th>
      <th class='th-sm'>Belge 3
      </th>
      <th class='th-sm'>Belge 4
      </th>
      <th class='th-sm'>Belge 5
      </th>
      <th class='th-sm'>Onay Durumu
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>".$satir['Firma']."</td>
      <td>".$satir['TC']."</td>
      <td>".$satir['AdSoyad']."</td>
      <td>".$satir['Alan']."</td>
      <td>".$satir['email']."</td>
      <td>".$satir['LinkSeviye']."</td>
      <td><a href='".$satir['Belge1']."' download>".$satir['Belge1']."</a></td>
      <td><a href='".$satir['Belge2']."' download>".$satir['Belge2']."</a></td>
      <td><a href='".$satir['Belge3']."' download>".$satir['Belge3']."</a></td>
      <td><a href='".$satir['Belge4']."' download>".$satir['Belge4']."</a></td>
      <td><a href='".$satir['Belge5']."' download>".$satir['Belge5']."</a></td>
      <td>".$satir['onay']."</td>
    </tr>

  </tbody>
</table>";

      }
  }
}

//------------------TÜMÜNÜ LİSTELE-----------------------

if(isset($_POST['Liste']))
{
   $bul="Select * From isci";

    $kayit= $conn->query($bul);
   if($kayit->num_rows>0)
  {
      while($satir=$kayit->fetch_assoc())
      {
        echo "
        <table id='dtBasicExample' class='table table-striped table-bordered' cellspacing='0' width='100%'>
  <thead>
    <tr>
      <th class='th-sm'>Firma
      </th>
      <th class='th-sm'>TC
      </th>
      <th class='th-sm'>Ad SoyAd
      </th>
      <th class='th-sm'>Alan
      </th>
      <th class='th-sm'>Email
      </th>
      <th class='th-sm'>Seviye
      </th>
      <th class='th-sm'>Belge 1
      </th>
      <th class='th-sm'>Belge 2
      </th>
      <th class='th-sm'>Belge 3
      </th>
      <th class='th-sm'>Belge 4
      </th>
      <th class='th-sm'>Belge 5
      </th>
      <th class='th-sm'>Onay Durumu
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>".$satir['Firma']."</td>
      <td>".$satir['TC']."</td>
      <td>".$satir['AdSoyad']."</td>
      <td>".$satir['Alan']."</td>
      <td>".$satir['email']."</td>
      <td>".$satir['LinkSeviye']."</td>
      <td><a href='".$satir['Belge1']."' download>".$satir['Belge1']."</a></td>
      <td><a href='".$satir['Belge2']."' download>".$satir['Belge2']."</a></td>
      <td><a href='".$satir['Belge3']."' download>".$satir['Belge3']."</a></td>
      <td><a href='".$satir['Belge4']."' download>".$satir['Belge4']."</a></td>
      <td><a href='".$satir['Belge5']."' download>".$satir['Belge5']."</a></td>
      <td>".$satir['onay']."</td>
    </tr>

  </tbody>
</table>";





      }
  }
}






$conn->close();
?>
</form>
</div>
</div>
</body>
</html>