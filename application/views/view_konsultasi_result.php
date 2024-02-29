<!-- Tampilkan hasil konsultasi -->
<h1>Hasil Konsultasi</h1>
<table border="1">
    <thead>
        <tr>
            <th>Gejala</th>
            <th>Jawaban Pengguna</th>
            <th>Nilai Certainty Factor</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($hasil_konsultasi as $kd_gejala => $cf_value) : ?>
            <tr>
                <td><?php echo $kd_gejala; ?></td>
                <td><?php echo $jawaban_user[$kd_gejala]; ?></td>
                <td><?php echo $cf_value; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
