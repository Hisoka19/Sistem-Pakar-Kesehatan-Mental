<!-- view_home.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url();?>./css/home.css">
  <link rel="icon" href="<?php echo base_url();?>./assets/logospk.png">
  <title>Home</title>
</head>
<body>

<header>
  <div class="logo">
    <img src="./assets/logospk.png" alt="Logo" width="100px">
  </div>

  <nav>
    <a href="<?php echo base_url();?>home">Home</a>
    <a href="<?php echo base_url();?>informasi">Informasi</a>
    <a href="<?php echo base_url();?>konsultasi">Konsultasi</a>
    <a href="<?php echo base_url();?>tentangkami">Tentang Kami</a>
    <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']) : ?>
      <a href="<?php echo base_url('home/logout'); ?>">Logout</a>
    <?php endif; ?>
  </nav>
</header>

<section class="hero-section">
  <div class="pakar">
    <img src="./assets/pakar.png" alt="Pakar" width="100%">
  </div>

  <div class="content">
    <h1>Selamat Datang, <?php echo $_SESSION['nama_mahasiswa']; ?>!</h1>
    <p>Temukan informasi, dukungan komunitas, dan sumber daya kesehatan mental khusus untuk mahasiswa. Kami berkomitmen untuk membantu Anda mengelola stres, mengatasi tekanan akademis, dan membangun kesehatan mental yang kuat. Mari bersama-sama jaga kesejahteraan mental kita!</p>
  </div>
</section>

</body>
</html>
