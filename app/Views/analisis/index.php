<?= $this->extend('templates/index'); ?>
<?= $this->section('content');

use \App\Models\PenilaianModel;

$this->PenilaianModel = new PenilaianModel();
?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <ul class="list-group">
            <li class="list-group-item">
                <h5>1. REKAPITULASI PENILAIAN</h5>
            </li>
            <table class="table table-striped">
                <thead>
                    <tr align="center" style="vertical-align: middle;">
                        <th width=5%>No.</th>
                        <th width=5%>Kode Alternatif</th>
                        <th width=30%>Alternatif</th>
                        <?php
                        foreach ($kriteria as $krt) :
                        ?>
                            <th>K<?= $krt['id_kriteria']; ?></th>
                        <?php
                        endforeach;
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($alternatif as $alt) :
                    ?>
                        <tr>
                            <td align="center"><?= $no; ?></td>
                            <td align="center">A<?= $alt['id_alternatif']; ?></td>
                            <td><?= $alt['alternatif']; ?></td>
                            <?php
                            foreach ($kriteria as $krt) :
                                $nilai = $this->PenilaianModel->getHasil($alt['id_alternatif'], $krt['id_kriteria']);
                                foreach ($nilai as $nl) :
                            ?>
                                    <td align="center"><?= $nl['nilai']; ?></td>
                            <?php
                                endforeach;
                            endforeach;
                            ?>
                        </tr>
                    <?php
                        $no++;
                    endforeach;
                    ?>
                </tbody>
            </table>
            <?php
            foreach ($alternatif as $alt) :
            ?>
                <table class="table table-bordered">
                    <thead>
                        <tr align="center" style="vertical-align: middle;">
                            <th width=5% rowspan="2">No.</th>
                            <th width=10% rowspan="2">Perbandingan</th>
                            <?php
                            foreach ($kriteria as $krt) :
                            ?>
                                <th colspan="2">K<?= $krt['id_kriteria']; ?></th>
                            <?php
                            endforeach;
                            ?>
                            <th rowspan="2">Indeks</th>
                        </tr>
                        <tr align="center">
                            <th><i class="fa-solid fa-plus-minus"></i></th>
                            <th><i class="fa-solid fa-indent"></i></th>
                            <th><i class="fa-solid fa-plus-minus"></i></th>
                            <th><i class="fa-solid fa-indent"></i></th>
                            <th><i class="fa-solid fa-plus-minus"></i></th>
                            <th><i class="fa-solid fa-indent"></i></th>
                            <th><i class="fa-solid fa-plus-minus"></i></th>
                            <th><i class="fa-solid fa-indent"></i></th>
                            <th><i class="fa-solid fa-plus-minus"></i></th>
                            <th><i class="fa-solid fa-indent"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        for ($i = 1; $i < ($total + 1); $i++) :
                            if ($alt['id_alternatif'] != $i) :
                        ?>
                                <tr align="center">
                                    <td><?= $no; ?></td>
                                    <td>A<?= $alt['id_alternatif']; ?>,
                                        A<?= $i; ?>
                                    </td>
                                    <?php
                                    foreach ($kriteria as $krt) :
                                        $nilai1 = $this->PenilaianModel->getHasil($alt['id_alternatif'], $krt['id_kriteria']);
                                        $nilai2 = $this->PenilaianModel->getHasil($i, $krt['id_kriteria']);
                                        foreach ($nilai1 as $nl) :
                                            foreach ($nilai2 as $nl2) :
                                                $nilai3 = $nl2['nilai'] - $nl['nilai'];
                                                if ($nilai3 < 0) :
                                                    $nilai4 = 0;
                                                else :
                                                    $nilai4 = 1;
                                                endif;
                                    ?>
                                                <td><?= $nl2['nilai']; ?>- <?= $nl['nilai']; ?> = <?= $nilai3; ?></td>
                                                <td><?= $nilai4; ?></td>
                                    <?php
                                                $nilai5 = $nilai4 + $nilai4;
                                            endforeach;
                                        endforeach;
                                    endforeach;
                                    ?>
                                    <td><?= $nilai5 + $nilai4 ?></td>
                                </tr>
                        <?php
                                $no++;
                            endif;
                        endfor;
                        ?>
                        <li class="list-group-item">
                            <h5>A<?= $alt['id_alternatif']; ?>. <?= $alt['alternatif']; ?></h5>
                        </li>
                    <?php
                endforeach;
                    ?>
                    </tbody>
                </table>
        </ul>
    </div>
</main>
<?php $this->endSection(); ?>