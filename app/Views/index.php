<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Selamat Datang</h1>
        <?php if (in_groups('admin')) :
            $hal = 'Admin';
        else :
            $hal = 'User';
        endif;
        ?>
        <p class="lead">Halaman <?= $hal; ?></p>
    </div>
</main>
<?php $this->endSection(); ?>