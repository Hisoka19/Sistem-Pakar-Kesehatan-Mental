<!-- view pengguna -->
<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('cnilaiinterpretasicf/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah Interpretasi CF</a>
    </div>
    
    <!-- table create/read data -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>Kd Certainty Term</th>
                    <th>NO</th>
                    <th>Certainty Term</th>
                    <th>CF Akhir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $kd_Certainty_Term = 1; foreach($tbl_interpretasi_cf as $row) : ?>
                    <tr class="text-center">
                        <td><?= $row->Kd_Certainty_Term ; ?></td>
                        <td><?= $row->no; ?></td>
                        <td><?= $row->Certainty_Term; ?></td>
                        <td><?= $row->CF_Akhir; ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $row->Kd_Certainty_Term ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('cnilaiinterpretasicf/delete/' . $row->Kd_Certainty_Term) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal-edit -->
<?php foreach($tbl_interpretasi_cf as $row) : ?>
    <div class="modal fade" id="edit<?= $row->Kd_Certainty_Term ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Interpretasi CF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('cnilaiinterpretasicf/edit/'. $row->Kd_Certainty_Term) ?>" method="POST">
                        <div class="form-group">
                            <label>NO</label>
                            <input type="text" name="no" class="form-control" value="<?= $row->no ?>">
                            <?= form_error('no', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Certainty Term</label>
                            <input type="text" name="Certainty Term" class="form-control" value="<?= $row->Certainty_Term ?>">
                            <?= form_error('Certainty Term', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                            <label>CF Akhir</label>
                            <input type="text" name="CF Akhir" class="form-control" value="<?= $row->CF_Akhir ?>">
                            <?= form_error('CF_Akhir', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Simpan</button>
                            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
