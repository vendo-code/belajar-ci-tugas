<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h3 class="mb-3">Manajemen Diskon</h3>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<a href="<?= base_url('admin/diskon/create') ?>" class="btn btn-primary mb-3">+ Tambah Diskon</a>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nominal</th>
                    <th width="160">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($diskon as $i => $d): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= $d['tanggal'] ?></td>
                    <td>Rp <?= number_format($d['nominal']) ?></td>
                    <td>
                        <a href="<?= base_url('admin/diskon/edit/'.$d['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= base_url('admin/diskon/delete/'.$d['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>