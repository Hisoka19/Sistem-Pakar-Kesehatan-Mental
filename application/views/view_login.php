<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="<?php echo base_url();?>./assets/logospk.png">
    <link rel="stylesheet" href="./css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>./css/login.css">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="./assets/logospk.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Login
        </div>
        <form class="p-3 mt-3" action="<?php echo base_url(); ?>login/process" method="post">
    <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span>
        <input type="email" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" id="password" name="password" placeholder="Password" required>
    </div>

    <button class="btn mt-3" type="submit">Login</button>
</form>

        <div class="text-center fs-6">
            <p>Belum punya akun? <a href="<?php echo base_url();?>register">Register</a></p>
                <a href="/forgot_password">Lupa password ?</a> 
        </div>
    </div>
    

    
</body>
</html>