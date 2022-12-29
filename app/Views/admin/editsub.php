<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Edit Sub Kriteria</h1>
        <form action="<?= base_url(); ?>/kriteria/sub/editsub/<?= $subKriteria['id_sub_kriteria'] ?>">
            <?= csrf_field(); ?>
            <div class="form-group mb-2">
                <label for="namaSubkriteria" class="form-label">Nama Sub-Kriteria :</label>
                <input type="text" class="form-control <?= ($validation->hasError('namaSubkriteria')) ? 'is-invalid' : '' ?>" id="namaSubkriteria" name="namaSubkriteria" placeholder="Masukkan Nama Sub-Kriteria" autofocus value="<?= $subKriteria['nama_sub_kriteria']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('namaSubkriteria'); ?>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="bobotSubkriteria" class="form-label">Bobot Sub-Kriteria (1-10) :</label>
                <input type="text" class="form-control <?= ($validation->hasError('bobotSubkriteria')) ? 'is-invalid' : '' ?>" id="bobotSubkriteria" name="bobotSubkriteria" placeholder="Masukkan Bobot Sub-Kriteria" value="<?= $subKriteria['bobot_sub_kriteria']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('bobotSubkriteria'); ?>
                </div>
            </div>
            <input type="hidden" value="<?= $subKriteria['id_kriteria']; ?>" name="idKriteria">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-secondary" href="<?= base_url(); ?>/kriteria/sub/<?= $subKriteria['id_kriteria'] ?>">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>