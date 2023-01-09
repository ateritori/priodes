<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1><?= $alternatif['alternatif']; ?></h1>
        <form action="/penilaian/update/<?= $alternatif['id_alternatif']; ?>">
            <input type="hidden" name="idAlternatif" value="<?= $alternatif['id_alternatif']; ?>">
            <table class="table table-striped">
                <thead>
                    <th width=5%>#</th>
                    <th colspan="7">Alternatif</th>
                </thead>
                <tbody>
                    <?php foreach ($kriteria as $krt => $value) : ?>
                        <input type="hidden" name="idKriteria1[]" value="<?= $value['nama_kriteria']; ?>">
                        <tr>
                            <td><?= $value['id_kriteria']; ?></td>
                            <td><?= $value['nama_kriteria']; ?></td>
                            <td>
                                <?php
                                foreach ($subkriteria as $subkrt) : ?>
                                    <?php
                                    if ($value['id_kriteria'] == $subkrt['id_kriteria']) :
                                    ?>
                                        <input type="hidden" name="idKriteria2[]" value="<?= $subkrt['id_kriteria']; ?>">
                                        <input class="form-check-input" type="radio" name="bobot[<?= $value['id_kriteria']; ?>]" value="<?= $subkrt['bobot_sub_kriteria']; ?>">
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