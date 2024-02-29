<!-- vtuser.php -->
<div class="card">
    <div class="card-header">
        <h5>Tambah Interpretasi CF</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('cnilaiinterpretasicf/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <label>NO</label>
                <input type="text" name="no" class="form-control" value="<?= set_value('no') ?>">
                <?= form_error('no', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Certainty Term</label>
                <input type="text" name="Certainty_Term" class="form-control" value="<?= set_value('Certainty_Term') ?>">
                <?= form_error('Certainty_Term', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>CF Akhir</label>
                <input type="text" name="CF_Akhir" class="form-control" value="<?= set_value('CF_Akhir') ?>">
                <?= form_error('CF_Akhir', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Simpan</button>
                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Reset</button>
            </div>
        </form>
    </div>
</div>
