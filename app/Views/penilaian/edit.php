<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1><?= $alternatif['alternatif']; ?></h1>
        <?php if (session()->getFlashdata('notif')) : ?>
            <p class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('notif') ?>
            </p>
        <?php endif; ?>
        <form action="/penilaian/update/<?= $alternatif['id_alternatif']; ?>">
            <input type="hidden" name="idAlternatif" value="<?= $alternatif['id_alternatif']; ?>">
            <table class="table table-striped">
                <thead>
                    <th width=5%>#</th>
                    <th>Alternatif</th>
                    <th colspan="6">Penilaian</th>
                </thead>
                <tbody>
                    <?php foreach ($kriteria as $krt) : ?>
                        <tr>
                            <td><?= $krt['id_kriteria']; ?></td>
                            <td><?= $krt['nama_kriteria']; ?></td>
                            <td>
                                <?php
                                foreach ($subkriteria as $subkrt) : ?>
                                    <?php
                                    if ($krt['id_kriteria'] == $subkrt['id_kriteria']) :
                                    ?>
                                        <input class="form-check-input" type="radio" name="subKriteria[<?= $krt['id_kriteria']; ?>]" value="<?= $subkrt['id_sub_kriteria']; ?>" required>
                                        <?= $subkrt['nama_sub_kriteria']; ?>
                                <?php
                                    endif;
                                endforeach; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/penilaian" type="button" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>