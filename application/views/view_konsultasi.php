<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url();?>./css/konsultasi.css">
    <link rel="icon" href="<?php echo base_url();?>./assets/logospk.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Konsultasi</title>
</head>

<body>
    <main>
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



        <section class="widget table-widget" id="konsultasi-table">
            <div class="pakar">
                <h1>Konsultasi Gangguan Mental</h1>
            </div>
            <form action="#" method="post" id="konsultasi-form">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pertanyaan</th>
                            <th>Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tbl_gejala as $index => $row): ?>
                        <tr>
                            <td>
                                <?php echo $index + 1; ?>
                            </td>
                            <td>
                                <?php echo $row->nama_gejala; ?>
                            </td>
                            <td>
                                <select class="jawaban-select" name="jawaban[<?php echo $row->id_gejala; ?>]">
                                    <?php foreach ($tbl_nilai_kepastian as $nilai): ?>
                                        <option value="<?php echo $nilai->Keterangan; ?>"><?php echo $nilai->Keterangan; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="button-container">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </section>
    </main>

    <script src="script.js"></script>
</body>

</html>