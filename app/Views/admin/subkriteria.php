<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h2><?= $kriteria['nama_kriteria']; ?></h2>
        <div class="lead">
            <a class="btn btn-primary btn-sm" href="<?= base_url(); ?>/kriteria/tambahsub" role="button"><i class="fa-solid fa-plus"></i> Sub-Kriteria</a>
            <a class="btn btn-secondary btn-sm" href="<?= base_url(); ?>/kriteria" role="button"><i class="fa-solid fa-chevron-left"></i> Kembali</a>
        </div>
        <?php if (session()->getFlashdata('notif')) : ?>
            <p class="alert alert-success" role="alert">
                Data Kriteria Berhasil Disimpan
            </p>
        <?php endif; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sub Kriteria</th>
                    <th scope="col">Status Kriteria</th>
                    <th scope="col">Bobot</th>
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
                        <td>
                            <?php
                            $status = $subK['status_sub_kriteria'];
                            if ($status == 1) :
                                $stat = 'Aktif';
                            else :
                                $stat = 'Tidak Aktif';
                            endif;
                            echo $stat;
                            ?>
                        </td>
                        <td><?= $subK['bobot_sub_kriteria']; ?></td>
                        <td>
                            <a href="#"><i class="fas fa-edit" style="color: orange;"></i></a>
                            <a href="#"><i class="fas fa-trash" style="color: red;"></i></a>
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