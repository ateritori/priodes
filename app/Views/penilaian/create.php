<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Input Penilaian</h1>
        <?php if (session()->getFlashdata('notif')) : ?>
            <p class="alert alert-success" role="alert">
                <?= session()->getFlashdata('notif') ?>
            </p>
        <?php endif; ?>
        <table class="table table-striped">
            <tbody>
                <?php
                $no = 1;
                foreach ($alternatif as $alt) :
                ?>
                    <tr>
                        <th scope="row" width=2%><?= $no; ?></th>
                        <th colspan="2"><?= $alt['alternatif']; ?></th>
                    </tr>
                    <?php
                    $no2 = 1;
                    foreach ($kriteria as $krt) :
                    ?>
                        <tr>
                            <td></td>
                            <td width=1%><?= $no2; ?></td>
                            <td><?= $krt['deskripsi_kriteria'] ?></td>
                            <?php
                            foreach ($subkriteria as $sub) :
                            ?>
                                <?php if ($sub['id_kriteria'] == $krt['id_kriteria']) : ?>
                                    <td>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault<?= $no . $no2; ?>">
                                        <?= $sub['nama_sub_kriteria']; ?>
                                    </td>
                                <?php endif; ?>
                            <?php endforeach;
                            ?>
                        </tr>
                    <?php
                        $no2++;
                    endforeach;
                    ?>
                <?php
                    $no++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<?php $this->endSection(); ?>