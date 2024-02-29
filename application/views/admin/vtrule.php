<!-- vtuser.php -->
<div class="card">
    <div class="card-header">
        <h5>Tambah Rule</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('crule/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <label>Gejala</label>
                <input type="text" name="gejala" class="form-control" value="<?= set_value('gejala') ?>">
                <?= form_error('gejala', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Penyakit</label>
                <input type="text" name="penyakit" class="form-control" value="<?= set_value('penyakit') ?>">
                <?= form_error('penyakit', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Simpan</button>
                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Reset</button>
            </div>
        </form>
    </div>
</div>
