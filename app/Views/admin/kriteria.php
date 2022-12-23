<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Kriteria</h1>
        <p class="lead"><a class="btn btn-primary" href="<?= base_url(); ?>/kriteria/tambah" role="button">Tambah Kriteria</a></p>
        <?php if (session()->getFlashdata('notif')) : ?>
            <p class="alert alert-success" role="alert">
                Data Kriteria Berhasil Disimpan
            </p>
        <?php endif; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Status Kriteria</th>
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
                        <td>
                            <?php
                            $status = $krt['status_kriteria'];
                            if ($status == 1) :
                                $stat = 'Aktif';
                            else :
                                $stat = 'Tidak Aktif';
                            endif;
                            echo $stat;
                            ?>
                        </td>
                        <td>
                            <a href="#"><i class="fa-solid fa-circle-info" style="color: green;"></i></a>
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