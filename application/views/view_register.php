<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="<?php echo base_url();?>./assets/logospk.png">
    <link rel="stylesheet" href="./css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>./css/registrasi.css">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="./assets/logospk.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Register
        </div>
        <form class="p-3 mt-3" action="<?php echo base_url(); ?>register/process" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" id="nim" name="nim" placeholder="NIM" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Nama Mahasiswa" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="number" id="umur" name="umur" placeholder="Umur" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button class="btn mt-3" type="submit"><a href="<?php echo base_url();?>login"></a>Register</button>
        </form>
        <div class="text-center fs-6">
            <p>Sudah punya akun? <a href="<?php echo base_url();?>login">Login</a></p>
        </div>
    </div>
    

    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>