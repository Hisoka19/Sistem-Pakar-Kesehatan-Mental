<!-- view pengguna -->
<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('crule/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah Rule</a>
    </div>
    
    <!-- table create/read data -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>Kd Rule</th>
                    <th>Gejala</th>
                    <th>Penyakit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $kd_rule = 1; foreach($tbl_rule as $row) : ?>
                    <tr class="text-center">
                        <td><?= $kd_rule++; ?></td>
                        <td><?= $row->gejala; ?></td>
                        <td><?= $row->penyakit; ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $row->kd_rule ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('crule/delete/' . $row->kd_rule) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal-edit -->
<?php foreach($tbl_rule as $row) : ?>
    <div class="modal fade" id="edit<?= $row->kd_rule ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Rule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('crule/edit/'. $row->kd_rule) ?>" method="POST">
                        <div class="form-group">
                            <label>Gejala</label>
                            <input type="text" name="gejala" class="form-control" value="<?= $row->gejala ?>">
                            <?= form_error('gejala', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Penyakit</label>
                            <input type="text" name="penyakit" class="form-control" value="<?= $row->penyakit ?>">
                            <?= form_error('penyakit', '<div class="text-small text-danger">', '</div>'); ?>
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
