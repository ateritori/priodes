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
                <table class="table table-striped">
                    <thead>
                        <tr align="center" style="vertical-align: middle;">
                            <th width=5%>No.</th>
                            <th width=5%>Perbandingan</th>
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
                        $dAlt = $this->PenilaianModel->getNilai($alt['id_alternatif']);
                        $no = 1;
                        $no2 = 2;
                        foreach ($dAlt as $da) :
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td>A<?= $da['id_alternatif']; ?>, A<?= $no2; ?></td>
                            </tr>
                        <?php
                            $no++;
                            $no2++;
                        endforeach;
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