<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Tambah Kriteria</h1>
        <form action="<?= base_url(); ?>/kriteria/simpan">
            <?= csrf_field(); ?>
            <div class="form-group mb-2">
                <label for="namaKriteria" class="form-label">Nama Kriteria :</label>
                <input type="text" class="form-control <?= ($validation->hasError('namaKriteria')) ? 'is-invalid' : '' ?>" id="namaKriteria" name="namaKriteria" placeholder="Masukkan Nama Kriteria" autofocus value="<?= old('namaKriteria'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('namaKriteria'); ?>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="deskripsiKriteria" class="form-label">Deskripsi Kriteria :</label>
                <textarea class="form-control" id="deskripsiKriteria" name="deskripsiKriteria" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-secondary" href="<?= base_url(); ?>/kriteria">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>