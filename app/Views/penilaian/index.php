<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Data Penilaian</h1>
        <p class="lead"><a class="btn btn-primary btn-md" href="/penilaian/create/" role="button"><i class="fa-solid fa-ranking-star"></i> Input Penilaian</a></p>
        <?php if (session()->getFlashdata('notif')) : ?>
            <p class="alert alert-success" role="alert">
                <?= session()->getFlashdata('notif') ?>
            </p>
        <?php endif; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Program</th>
                    <th scope="col">Padukuhan</th>
                    <th scope="col">RT</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($alternatif as $alt) :
                ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $alt['alternatif']; ?></td>
                        <td><?= $alt['padukuhan']; ?></td>
                        <td><?= $alt['rt']; ?></td>
                        <td><?= $alt['paket']; ?> Paket</td>
                        <td>
                            <a href="/penilaian/<?= $alt['id_alternatif'] ?>" class="btn btn-info btn-sm"><i class="fa-solid fa-ranking-star"></i></a>
                        </td>
                    </tr>
                <?php
                    $no++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<?php $this->endSection(); ?>