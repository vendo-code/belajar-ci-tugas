<h3>Edit Diskon</h3>

<form action="<?= base_url('admin/diskon/update/'.$diskon['id']) ?>" method="post">
    <label>Tanggal</label>
    <input type="date" name="tanggal" value="<?= $diskon['tanggal'] ?>" class="form-control" readonly>

    <label>Nominal</label>
    <input type="number" name="nominal" value="<?= $diskon['nominal'] ?>" class="form-control" required>

    <br>
    <button class="btn btn-primary">Update</button>
</form>