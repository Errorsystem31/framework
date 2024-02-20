<?php 

 
require 'Functions.php';

if (isset($_POST['REGISTRASI'])){
  mysqli_query($conn,"INSERT INTO pengguna set 
    Nama_Lengkap='$_POST[Nama_Lengkap]',
    Jenis_Kelamin='$_POST[Jenis_Kelamin]',
    Usia='$_POST[Usia]',
    Anak_Nomor='$_POST[Anak_Nomor]',
    Alamat='$_POST[Alamat]',
    Nomor_Telepon='$_POST[Nomor_Telepon]',
    Asal_Sekolah='$_POST[Asal_Sekolah]',
    Agama='$_POST[Agama]'");
  echo "Data baru ditambahkan";

  $result=mysqli_query($conn,"SELECT * FROM pengguna WHERE Nama_Lengkap='$_POST[Nama_Lengkap]'");

  if (mysqli_fetch_assoc($result)===1) {
    header("Location: admin2.php");exit;
  }
  if (isset($_POST['REGISTRASI'])) {
    header ("Location: udahsubmit.php");exit;
    
  }




}

    
  


 ?>



 <!DOCTYPE html>
<html lang="en">
<head>

     <title>ICO Konsultasi </title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/all.min.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-ben-resume-style.css">
     <link rel="stylesheet" href="css/csspendaftaran.css">
     <style>
       .tabel {
        text-align: center;
        justify-content: center;
        display: grid;
        height: 100%;
        width: auto;
        place-items: center;
        position: relative;
       }
     </style>

</head>

<body>
  <div class="banner">
    <video autoplay loop muted>
      <source src="css/bgpendfix.mp4" type="video/mp4">
    </video>
  </div>
  <br>
  <br>

    
    <form action="" method="post">
      <div class="tabel">
      <table>
        <div class="tabel">
        <tr>
        <td>Nama Lengkap</td>
        <td><input type="text" name="Nama_Lengkap"></td>
      </tr>
      <br>
      <tr>
        <td>Jenis Kelamin</td>
        <td><input type="text" name="Jenis_Kelamin"></td>
      </tr>
      <tr>
        <td>Usia</td>
        <td><input type="text" name="Usia"></td>
      </tr>
      <tr>
        <td>Anak Nomor</td>
        <td><input type="text" name="Anak_Nomor"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="Alamat"></td>
      </tr>
      <tr>
        <td>Nomor Telepon</td>
        <td><input type="tel" name="Nomor_Telepon"></td>
      </tr>
      <tr>
        <td>Asal Sekolah</td>
        <td><input type="text" name="Asal_Sekolah"></td>
      </tr>
      <tr>
        <td>Agama</td>
        <td><input type="text" name="Agama"></td>
      </tr>

      <tr>

        <td></td>
        <td><input type="submit" value="submit" name="REGISTRASI">  </td>
      </tr>
  </table>
</div>



      </form>
      

        


      

        




        
      

</body>