<!-- view pengguna -->
<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('cgejala/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah Gejala</a>
    </div>
    
    <!-- table create/read data -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>Kd Gejala</th>
                    <th>NO</th>
                    <th>Nama Gejala</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $kd_gejala = 1; foreach($tbl_gejala as $row) : ?>
                    <tr class="text-center">
                        <td><?= $kd_gejala++ ; ?></td>
                        <td><?= $row->no; ?></td>
                        <td><?= $row->nama_gejala; ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $row->kd_gejala ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('cgejala/delete/' . $row->kd_gejala) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal-edit -->
<?php foreach($tbl_gejala as $row) : ?>
    <div class="modal fade" id="edit<?= $row->kd_gejala ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Gejala</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('cgejala/edit/'. $row->kd_gejala) ?>" method="POST">
                        <div class="form-group">
                            <label>NO</label>
                            <input type="text" name="no" class="form-control" value="<?= $row->no ?>">
                            <?= form_error('no', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Nama Gejala</label>
                            <input type="text" name="nama_gejala" class="form-control" value="<?= $row->nama_gejala ?>">
                            <?= form_error('nama_gejala', '<div class="text-small text-danger">', '</div>'); ?>
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
