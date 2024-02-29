<!-- vtuser.php -->
<div class="card">
    <div class="card-header">
        <h5>Tambah Pengguna</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('cuser/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" value="<?= set_value('nim') ?>">
                <?= form_error('nim', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama_mahasiswa" class="form-control" value="<?= set_value('nama_mahasiswa') ?>">
                <?= form_error('nama_mahasiswa', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Umur</label>
                <input type="number" name="umur" class="form-control" value="<?= set_value('umur') ?>">
                <?= form_error('umur', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control" value="<?= set_value('jenis_kelamin') ?>">
                <?= form_error('jenis_kelamin', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?= set_value('email') ?>">
                <?= form_error('email', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?= set_value('password') ?>">
                <?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Simpan</button>
                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Reset</button>
            </div>
        </form>
    </div>
</div>
