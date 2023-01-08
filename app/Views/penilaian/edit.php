<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1><?= $alternatif['alternatif']; ?></h1>
        <?php
        $request = \Config\Services::request();
        $idAlternatif = $request->uri->getSegment(2);
        ?>
        <form action="/penilaian/update/<?= $idAlternatif; ?>">
            <input type="hidden" name="idAlternatif" value="<?= $idAlternatif; ?>">
            <table class="table table-striped">
                <thead>
                    <th width=5%>#</th>
                    <th colspan="7">Alternatif</th>
                </thead>
                <tbody>
                    <?php foreach ($kriteria as $krt) : ?>
                        <input type="hidden" name="idkrit[]" value="<?= $krt['id_kriteria']; ?>">
                        <tr>
                            <td><?= $krt['id_kriteria']; ?></td>
                            <td><?= $krt['deskripsi_kriteria']; ?></td>
                            <?php foreach ($subkriteria as $subkrt) :
                                if ($krt['id_kriteria'] == $subkrt['id_kriteria']) :
                            ?>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bobot[<?= $krt['id_kriteria']; ?>]" value="<?= $subkrt['bobot_sub_kriteria']; ?>">
                                            <label class="form-check-label" for="bobot">
                                                <?= $subkrt['nama_sub_kriteria']; ?>
                                            </label>
                                        </div>
                                    </td>
                            <?php
                                endif;
                            endforeach;
                            ?>
                        </tr>
                    <?php
                    endforeach;
                    ?>

                </tbody>
            </table>
            <button class="btn-primary btn-sm" type="submit">Update</button>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>