<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Input Penilaian</h1>
        <table class="table table-striped">
            <thead>
                <th width=5%>#</th>
                <th colspan="7">Alternatif</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                ?>
                <form action="/penilaian/save">
                    <?php foreach ($alternatif as $alt) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td colspan="7"><?= $alt['alternatif']; ?></td>
                        </tr>
                        <?php
                        $no++;
                        $no2 = 1;
                        foreach ($kriteria as $krt) :
                        ?>
                            <tr>
                                <td width=5%></td>
                                <td width=5%><?= $no2; ?></td>
                                <td><?= $krt['deskripsi_kriteria']; ?></td>
                                <?php
                                $no2++;
                                foreach ($subkriteria as $sub) :
                                    if ($krt['id_kriteria'] == $sub['id_kriteria']) :
                                ?>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bobot[<?= $alt['id_alternatif'] . $krt['id_kriteria'] ?>]" id="bobot" value="<?= $sub['bobot_sub_kriteria'] ?>">
                                                <label class="form-check-label" for="bobot">
                                                    <?= $sub['nama_sub_kriteria']; ?>
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
                    endforeach;
                    ?>
                    <button type="submit">Simpan</button>
                </form>
            </tbody>
        </table>
    </div>
</main>
<?php $this->endSection(); ?>