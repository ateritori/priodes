<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h2>Kriteria : <?= $kriteria['nama_kriteria']; ?></h2>
        <h5>Deskripsi : <?= $kriteria['deskripsi_kriteria']; ?></h5>
        <h6>Tambah Sub Kriteria</h6>
        <form action="<?= base_url(); ?>/kriteria/simpansub/<?= $kriteria['id_kriteria'] ?>">
            <?= csrf_field(); ?>
            <div class="form-group mb-2">
                <label for="namaSubkriteria" class="form-label">Nama Sub-Kriteria :</label>
                <input type="text" class="form-control <?= ($validation->hasError('namaSubkriteria')) ? 'is-invalid' : '' ?>" id="namaSubkriteria" name="namaSubkriteria" placeholder="Masukkan Nama Sub-Kriteria" autofocus value="<?= old('namaSubkriteria'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('namaSubkriteria'); ?>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="bobotSubkriteria" class="form-label">Bobot Sub-Kriteria (1-10) :</label>
                <input type="text" class="form-control <?= ($validation->hasError('bobotSubkriteria')) ? 'is-invalid' : '' ?>" id="bobotSubkriteria" name="bobotSubkriteria" placeholder="Masukkan Bobot Sub-Kriteria" value="<?= old('bobotSubkriteria'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('bobotSubkriteria'); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-secondary" href="<?= base_url(); ?>/kriteria/sub/<?= $kriteria['id_kriteria'] ?>">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>