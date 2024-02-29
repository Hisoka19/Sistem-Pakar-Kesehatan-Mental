<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (bagian head tetap sama) ... -->
    <link rel="stylesheet" href="<?php echo base_url();?>./css/informasi.css">
    <link rel="icon" href="<?php echo base_url();?>./assets/logospk.png">
    <!-- Tambahkan link untuk FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Informasi</title>
</head>
<body>
<aside id="sidebar">
    <a href="<?php echo base_url();?>home"><i class="fas fa-home"></i> Home</a>
    <a href="#gejala-table"><i class="fas fa-heartbeat"></i> Gejala</a>
    <a href="#penyakit-table"><i class="fas fa-notes-medical"></i> Penyakit</a>
    <a href="#nilai-kepastian-table"><i class="fas fa-chart-line"></i> Nilai Kepastian</a>
    <a href="#interpretasi-cf-table"><i class="fas fa-lightbulb"></i> Interpretasi CF</a>
    <a href="#rule-table"><i class="fas fa-book"></i> Rule</a>
    <a href="#chat"><i class="fas fa-comments"></i> Chat</a>
</aside>

    <main>
        <header>
            <h1>Dashboard Informasi</h1>
        </header>
        <section class="dashboard">
            <section class="widget" id="gejala">
                <h2>Gejala</h2>
                <p> Berisi mengenai berbagai informasi gejala kesehatan mental.</p>
            </section>

            <section class="widget" id="penyakit">
                <h2>Penyakit</h2>
                <p> Berisi mengenai kemungkinan penyakit berdasarkan gejala yang dialami.</p>
            </section>

            <section class="widget" id="nilai-kepastian">
                <h2>Nilai Kepastian</h2>
                <p>Penjelasan tentang nilai kepastian dalam konteks kesehatan.</p>
            </section>

            <section class="widget" id="interpretasi-cf">
                <h2>Interpretasi CF</h2>
                <p>Penjelasan tentang interpretasi nilai kepastian dalam teori kecerdasan buatan.</p>
            </section>
        </section>

        <!-- Tabel Gejala -->
<!-- Tabel Gejala -->
<section class="widget table-widget" id="gejala-table">
    <h2>Table Gejala</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Gejala</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbl_gejala as $row): ?>
                <tr>
                    <td><?php echo $row->no; ?></td>
                    <td><?php echo $row->nama_gejala; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>


        <!-- Tabel Penyakit -->
<section class="widget table-widget" id="penyakit-table">
    <h2>Table Penyakit</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penyakit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbl_penyakit as $row): ?>
                <tr>
                    <td><?php echo $row->no; ?></td>
                    <td><?php echo $row->nama_penyakit; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

        <!-- Tabel Nilai Kepastian -->
<section class="widget table-widget" id="nilai-kepastian-table">
    <h2>Table Nilai Kepastian</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Keterangan</th>
                <th>Nilai Kepastian</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbl_nilai_kepastian as $row): ?>
                <tr>
                    <td><?php echo $row->no; ?></td>
                    <td><?php echo $row->Keterangan; ?></td>
                    <td><?php echo $row->Nilai_kepastian; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

        <!-- Tabel Interpretasi CF -->
<section class="widget table-widget" id="interpretasi-cf-table">
    <h2>Table Interpretasi CF</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Certainty Term</th>
                <th>CF Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbl_interpretasi_cf as $row): ?>
                <tr>
                    <td><?php echo $row->no; ?></td>
                    <td><?php echo $row->Certainty_Term; ?></td>
                    <td><?php echo $row->CF_Akhir; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

        <!-- RULE -->
<section class="widget table-widget" id="rule-table">
    <h2>RULE</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Gejala</th>
                <th>Penyakit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbl_rule as $row): ?>
                <tr>
                    <td><?php echo $row->gejala; ?></td>
                    <td><?php echo $row->penyakit; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

        <!-- CHAT -->
<section class="widget table-widget" id="chat">
        <h2>Chat Konsultasi Kesehatan Mental</h2>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css">
    <link rel="stylesheet" href="./styles/chat.css">
    <title>Chat</title>
</head>

<body>

    <header class="header">
        <h1 class="text-center mt-3">Konsultasi Kesehatan Mental</h1>
        <div id="header-doctor-image" class="text-center mt-3">
            <img src="./assets/budi.jpeg" alt="Doctor Image" class="rounded-circle" width="100" height="100">
        </div>
        <div class="container">
        </div>
        <div class="d-flex align-items-center justify-content-end">
            <select class="custom-select mr-3 ml-auto" id="doctor-select" onchange="updateDoctorImage()">
                <option value="1">Dokter Psikologi Andi</option>
                <option value="2">Dokter Psikologi Budi</option>
                <!-- Tambahkan dokter lainnya sesuai kebutuhan -->
            </select>
            <button class="btn btn-primary" onclick="startConsultation()">Mulai Konsultasi</button>
        </div>

        </div>
        </div>
        </div>

    </header>


    <!-- ... (kode sebelumnya) ... -->

    <main class="content">
        <div class="container p-0">
            <div class="row g-0">
                <div class="col-12 col-lg-12 col-xl-12">
                    <header class="header">
                        <!-- ... (kode header) ... -->
                    </header>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="position-relative">
                            <div class="chat-messages p-4" id="chat-messages">
                                <!-- Pesan-pesan akan ditampilkan di sini -->
                            </div>
                        </div>
                        <div class="flex-grow-0 py-3 px-4 border-top">
                            <div class="input-group">
                                <input type="text" class="form-control" id="message-input" placeholder="Type your message">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" onclick="sendMessage()">
                                    <i class="fas fa-paper-plane"></i> Kirim Pesan
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ... (kode selanjutnya) ... -->

    <script src="chat.js"></script>

</body>

</html>

</section>
    </main>

    <script src="script.js"></script>
</body>
</html>