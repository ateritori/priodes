<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h2>Kriteria : <?= $kriteria['nama_kriteria']; ?></h2>
        <h5>Deskripsi : <?= $kriteria['deskripsi_kriteria']; ?></h5>
        <h6>Tambah Sub Kriteria</h6>
        <form action="/kriteria/sub/save/<?= $kriteria['id_kriteria'] ?>">
            <?= csrf_field(); ?>
            <div class="form-group mb-2">
                <label for="nama_sub_kriteria" class="form-label">Nama Sub-Kriteria :</label>
                <input type="text" class="form-control <?= ($validation->hasError('nama_sub_kriteria')) ? 'is-invalid' : '' ?>" name="nama_sub_kriteria" placeholder="Masukkan Nama Sub-Kriteria" autofocus value="<?= old('nama_sub_kriteria'); ?>" required>
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_sub_kriteria'); ?>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="bobot_sub_kriteria" class="form-label">Bobot Sub-Kriteria (10-100) :</label>
                <input type="text" class="form-control <?= ($validation->hasError('bobot_sub_kriteria')) ? 'is-invalid' : '' ?>" name="bobot_sub_kriteria" placeholder="Masukkan Bobot Sub-Kriteria" value="<?= old('bobot_sub_kriteria'); ?>" required>
                <div class="invalid-feedback">
                    <?= $validation->getError('bobot_sub_kriteria'); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-secondary" href="/kriteria/sub/<?= $kriteria['id_kriteria'] ?>">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>