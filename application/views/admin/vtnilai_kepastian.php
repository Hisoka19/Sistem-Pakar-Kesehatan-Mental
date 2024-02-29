<!-- vtuser.php -->
<div class="card">
    <div class="card-header">
        <h5>Tambah Nilai Kepastian</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('cnilaikepastian/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <label>NO</label>
                <input type="text" name="no" class="form-control" value="<?= set_value('no') ?>">
                <?= form_error('no', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="Keterangan" class="form-control" value="<?= set_value('Keterangan') ?>">
                <?= form_error('Keterangan', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Nilai Kepastian</label>
                <input type="text" name="Nilai_kepastian" class="form-control" value="<?= set_value('Nilai_kepastian') ?>">
                <?= form_error('Nilai_kepastian', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Simpan</button>
                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Reset</button>
            </div>
        </form>
    </div>
</div>
