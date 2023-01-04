<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Edit Alternatif</h1>
        <form action="/alternatif/update/<?= $alternatif['id_alternatif']; ?>">
            <?= csrf_field(); ?>

            <button type="submit" class="btn btn-primary">Ubah</button>
            <a class="btn btn-secondary" href="/penilaian">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>