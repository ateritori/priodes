<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Data Alternatif</h1>
        <p class="lead"><a class="btn btn-primary btn-md" href="<?= base_url(); ?>/alternatif/create" role="button"><i class="fa-solid fa-plus"></i> Alternatif</a></p>
        <?php if (session()->getFlashdata('notif')) : ?>
            <p class="alert alert-success" role="alert">
                <?= session()->getFlashdata('notif') ?>
            </p>
        <?php endif; ?>
        <table class="table table-striped" id="alternatif">
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
                            <a href="<?= base_url(); ?>/alternatif/<?= $alt['id_alternatif'] ?>" class="btn btn-info btn-sm"><i class="fa-solid fa-circle-info"></i></i></a>
                            <a href="<?= base_url(); ?>/alternatif/edit/<?= $alt['id_alternatif'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="<?= base_url(); ?>/alternatif/delete/<?= $alt['id_alternatif'] ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Alternatif?');"><i class="fas fa-trash"></i></button>
                            </form>
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