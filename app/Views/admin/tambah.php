<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Tambah Kriteria</h1>
        <form>
            <div class="form-group mb-2">
                <input type="text" class="form-control" id="namaKriteria" placeholder="Masukkan Nama Kriteria">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="<?= base_url(); ?>/kriteria">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>