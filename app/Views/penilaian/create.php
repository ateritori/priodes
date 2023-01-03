<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Input Penilaian</h1>
        <?php if (session()->getFlashdata('notif')) : ?>
            <p class="alert alert-success" role="alert">
                <?= session()->getFlashdata('notif') ?>
            </p>
        <?php endif; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Alternatif</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($penilaian as $nilai) :
                ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $nilai['alternatif']; ?></td>                                                
                    </tr>
                <?php
                    $no++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<?php $this->endSection(); ?>S