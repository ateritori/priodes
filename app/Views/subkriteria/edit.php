<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Edit Sub Kriteria</h1>
        <form action="/kriteria/sub/update/<?= $subKriteria['id_sub_kriteria'] ?>">
            <?= csrf_field(); ?>
            <div class="form-group mb-2">
                <label for="nama_sub_kriteria" class="form-label">Nama Sub-Kriteria :</label>
                <input type="text" class="form-control <?= ($validation->hasError('nama_sub_kriteria')) ? 'is-invalid' : '' ?>" name="nama_sub_kriteria" placeholder="Masukkan Nama Sub-Kriteria" autofocus value="<?= $subKriteria['nama_sub_kriteria']; ?>" required>
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_sub_kriteria'); ?>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="bobot_sub_kriteria" class="form-label">Bobot Sub-Kriteria (1-10) :</label>
                <input type="text" class="form-control <?= ($validation->hasError('bobot_sub_kriteria')) ? 'is-invalid' : '' ?>" name="bobot_sub_kriteria" placeholder="Masukkan Bobot Sub-Kriteria" value="<?= $subKriteria['bobot_sub_kriteria']; ?>" required>
                <div class="invalid-feedback">
                    <?= $validation->getError('bobot_sub_kriteria'); ?>
                </div>
            </div>
            <input type="hidden" value="<?= $subKriteria['id_kriteria']; ?>" name="idKriteria">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-secondary" href="/kriteria/sub/<?= $subKriteria['id_kriteria'] ?>">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>