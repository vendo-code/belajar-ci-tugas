<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<?php echo form_open('keranjang/edit') ?>
<!-- Table with stripped rows -->
<table class="table">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Harga Asli</th>
            <th>Diskon</th>
            <th>Harga Setelah Diskon</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cart->contents() as $item): ?>
        <tr>
            <td><?= $item['name'] ?></td>
            <td>Rp <?= number_format($item['options']['harga_asli']) ?></td>
            <td>Rp <?= number_format($item['options']['diskon']) ?></td>
            <td>Rp <?= number_format($item['price']) ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<!-- End Table with stripped rows -->
<div class="alert alert-info">
    <?php echo "Total = " . number_to_currency($total, 'IDR') ?>
</div>

<button type="submit" class="btn btn-primary">Perbarui Keranjang</button>
<a class="btn btn-warning" href="<?php echo base_url() ?>keranjang/clear">Kosongkan Keranjang</a>
<?php if (!empty($items)) : ?>
    <a class="btn btn-success" href="<?php echo base_url() ?>checkout">Selesai Belanja</a>
<?php endif; ?>
<?php if (session()->get('diskon_nominal')) : ?>
    <div style="color: green;">
        Diskon Hari Ini: Rp<?= number_format(session()->get('diskon_nominal'), 0, ',', '.') ?>
    </div>
<?php endif; ?>

<?php echo form_close() ?>
<?= $this->endSection() ?>