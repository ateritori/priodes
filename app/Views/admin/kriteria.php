<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Data Kriteria</h1>
        <p class="lead"><a class="btn btn-primary btn-sm" href="<?= base_url(); ?>/kriteria/tambah" role="button"><i class="fa-solid fa-plus"></i> Kriteria</a></p>
        <?php if (session()->getFlashdata('notif')) : ?>
            <p class="alert alert-success" role="alert">
                <?= session()->getFlashdata('notif') ?>
            </p>
        <?php endif; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Diubah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kriteria as $krt) :
                ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $krt['nama_kriteria']; ?></td>
                        <td><?= $krt['created_at']; ?></td>
                        <td><?= $krt['updated_at']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>/kriteria/sub/<?= $krt['id_kriteria'] ?>" class="btn btn-info btn-sm"><i class="fa-solid fa-wave-square"></i></a>
                            <a href="<?= base_url(); ?>/kriteria/edit/<?= $krt['id_kriteria'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="<?= base_url(); ?>/kriteria/hapus/<?= $krt['id_kriteria'] ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Kriteria?');"><i class="fas fa-trash"></i></button>
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