<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h2>Kriteria : <?= $kriteria['nama_kriteria']; ?></h2>
        <h6>Deskripsi : <?= $kriteria['deskripsi_kriteria']; ?></h6>
        <div class="lead mb-2">
            <a class="btn btn-primary btn-sm" href="/kriteria/sub/create/<?= $kriteria['id_kriteria'] ?>" role="button"><i class="fa-solid fa-plus"></i> Sub-Kriteria</a>
            <a class="btn btn-secondary btn-sm" href="/kriteria" role="button"><i class="fa-solid fa-chevron-left"></i> Kembali</a>
        </div>
        <?php if (session()->getFlashdata('notif')) : ?>
            <p class="alert alert-success" role="alert">
                <?= session()->getFlashdata('notif'); ?>
            </p>
        <?php endif; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sub Kriteria</th>
                    <th scope="col">Bobot</th>
                    <th scope="col">Diubah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($subKriteria as $subK) :
                ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $subK['nama_sub_kriteria']; ?></td>
                        <td><?= $subK['bobot_sub_kriteria']; ?></td>
                        <td><?= $subK['updated_at']; ?></td>
                        <td>
                            <a href="/kriteria/sub/edit/<?= $subK['id_sub_kriteria'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="/kriteria/sub/delete/<?= $subK['id_sub_kriteria'] ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="idKriteria" value="<?= $subK['id_kriteria']; ?>">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Sub-Kriteria?');"><i class="fas fa-trash"></i></button>
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