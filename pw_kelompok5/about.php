<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>


<img src="images/about-bg.png" alt="" width= 100%>


<section class="about">

   <div class="row">
   
      <div class="box1">
         <h3>Tentang Kami</h3>
         <p>HiFive adalah platform belanja online khusus pakaian yang dibuat untuk memenuhi tugas pemrograman web. Platform ini dibuat pada tahun 2022. Kami percaya bahwa kegiatan belanja online harus terjangkau, mudah, dan menyenangkan.</p>
      </div>

</section>

<section class="about">

   <div class="row">
   
      <div class="box">
         <h3>Tujuan Kami</h3>
         <p>Kami percaya pada kekuatan transformatif dari teknologi dan ingin mengubah dunia menjadi lebih baik dengan menyediakan platform untuk menghubungkan pembeli dan penjual dalam satu komunitas.</p>
      </div>

      <div class="box">
         <h3>Posisi Kami</h3>
         <p>Untuk pengguna di seluruh wilayah, HiFive menawarkan pengalaman belanja online komprehensif, dengan berbagai pilihan produk, dan layanan untuk selalu memenuhi kebutuhan konsumen tanpa hambatan.</p>
      </div>
   </div>

</section>

<img src="images/about1.png" alt="" width= 100% >











<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>