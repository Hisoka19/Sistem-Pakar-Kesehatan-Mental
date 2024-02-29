<!-- view pengguna -->
<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('cuser/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah User</a>
    </div>
    
    <!-- table create/read data -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>Kd User</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $kd_user = 1; foreach($tbl_user as $row) : ?>
                    <tr class="text-center">
                        <td><?= $kd_user++ ; ?></td>
                        <td><?= $row->nim; ?></td>
                        <td><?= $row->nama_mahasiswa; ?></td>
                        <td><?= $row->umur; ?></td>
                        <td><?= $row->jenis_kelamin; ?></td>
                        <td><?= $row->email; ?></td>
                        <td><?= $row->password; ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $row->kd_user ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('cuser/delete/' . $row->kd_user) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal-edit -->
<?php foreach($tbl_user as $row) : ?>
    <div class="modal fade" id="edit<?= $row->kd_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('cuser/edit/'. $row->kd_user) ?>" method="POST">
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" name="nim" class="form-control" value="<?= $row->nim ?>">
                            <?= form_error('nim', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" name="nama_mahasiswa" class="form-control" value="<?= $row->nama_mahasiswa ?>">
                            <?= form_error('nama_mahasiswa', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Umur</label>
                            <input type="number" name="umur" class="form-control" value="<?= $row->umur ?>">
                            <?= form_error('umur', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" value="<?= $row->jenis_kelamin ?>">
                            <?= form_error('jenis_kelamin', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?= $row->email ?>">
                            <?= form_error('email', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="<?= $row->password ?>">
                            <?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
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
