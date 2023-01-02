<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Tambah Kriteria</h1>
        <form action="/kriteria/simpan">
            <?= csrf_field(); ?>
            <div class="form-group mb-2">
                <label for="nama_kriteria" class="form-label">Nama Kriteria :</label>
                <input type="text" class="form-control <?= ($validation->hasError('nama_kriteria')) ? 'is-invalid' : '' ?>" name="nama_kriteria" placeholder="Masukkan Nama Kriteria" value="<?= old('nama_kriteria'); ?>" required>
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_kriteria'); ?>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="deskripsi_kriteria" class="form-label">Deskripsi Kriteria :</label>
                <textarea class="form-control" id="deskripsi_kriteria" name="deskripsi_kriteria" rows="3" required><?= old('deskripsi_kriteria'); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-secondary" href="<?= base_url(); ?>/kriteria">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>