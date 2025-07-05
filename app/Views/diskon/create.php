<h3>Tambah Diskon Baru</h3>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<form action="<?= base_url('admin/diskon/store') ?>" method="post">
    <label>Tanggal</label>
    <input type="date" name="tanggal" class="form-control" required>

    <label>Nominal</label>
    <input type="number" name="nominal" class="form-control" required>

    <br>
    <button class="btn btn-primary">Simpan</button>
</form>