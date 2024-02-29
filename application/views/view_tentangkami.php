<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/tentang_kami.css">
    <link rel="icon" href="<?php echo base_url();?>./assets/logospk.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Tentang Kami</title>
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
            <h1>Sayangi Dirimu, <?php echo $_SESSION['nama_mahasiswa']; ?>!</h1>
            <p> Di mana setiap langkah perjalanan kesehatan mental Anda bernilai lebih dari sekadar pencapaian – itu adalah
                investasi dalam kehidupan yang lebih baik.</p>
        </div>
    </section>

    <section class="hero-section-2">
        <div class="pakar">
            <img src="./assets/logospk.png" alt="Pakar" width="100%">
        </div>

        <div class="content">
            <h1>MENTAL ZONE</h1>
            <p> Kami adalah tim yang berdedikasi untuk menyediakan sumber daya kesehatan mental dan dukungan untuk
                mahasiswa. Dengan fokus pada kesejahteraan mental, kami bertujuan membantu Anda mengatasi tantangan
                akademis dan stres sehari-hari.</p>
        </div>
    </section>

    <section class="about-us-section">
        <div class="container">
            <div class="team-member">
                <img src="./assets/izal.PNG" alt="Team Member 1">
                <p class="member-name">Moch Rizal Herdiansyah</p>
            </div>

            <div class="team-member">
              <img src="./assets/abay.PNG" alt="Team Member 3">
              <p class="member-name">Ahmad Baehaqi</p>
          </div>

            <div class="team-member">
                <img src="./assets/ibul.PNG" alt="Team Member 2">
                <p class="member-name">Muhammad Iqbal Rafid Santoso</p>
            </div>
            
            <div class="team-member">
                <img src="./assets/arya.PNG" alt="Team Member 4">
                <p class="member-name">Arya Agus Wicaksana</p>
            </div>
            <div class="team-member">
                <img src="./assets/ngantuk.PNG" alt="Team Member 5">
                <p class="member-name">Syarifudin Ahmad</p>
            </div>
        </div>
    </section>

    <section class="contact-info">
        <div class="container">
            <p class="address">Sleman, Depok-SLM, Jalan Jembatan Merah III Gg Flamboyan, RT6/RW 38, Condong Catur, Depok
                (Warmindo sederhana) DEPOK, KAB. SLEMAN, DI YOGYAKARTA, ID, 55282</p>
            <div class="social-icons">
                <a href="https://wa.me/qr/VIK3HSC4UU2AL1" target="_blank">
                    <img src="./assets/whatsapp.jpeg" alt="Phone Icon">
                    <span>Whatsapp</span>
                </a>
                <a href="https://www.facebook.com/link-anda" target="_blank">
                    <img src="./assets/facebook.png" alt="Facebook Icon">
                    <span>Facebook</span>
                </a>
                <a href="https://www.instagram.com/link-anda" target="_blank">
                    <img src="./assets/instagram.jpeg" alt="Instagram Icon">
                    <span>Instagram</span>
                </a>
                <a href="https://www.twitter.com/link-anda" target="_blank">
                    <img src="./assets/tweetdter.jpeg" alt="Twitter Icon">
                    <span>Twitter</span>
                </a>
            </div>
        </div>
    </section>

</body>
