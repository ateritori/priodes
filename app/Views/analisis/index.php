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
                    <tr align="center">
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
                            <td><?= $no; ?></td>
                            <td>A<?= $alt['id_alternatif']; ?></td>
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
            <li class="list-group-item">
                <h5>2. KRITERIA KE-2</h5>
            </li>
            <li class="list-group-item">
                <h5>3. KRITERIA KE-3</h5>
            </li>
            <li class="list-group-item">
                <h5>4. KRITERIA KE-4</h5>
            </li>
            <li class="list-group-item">
                <h5>5. KRITERIA KE-5</h5>
            </li>
            <li class="list-group-item">
                <h5>6. KRITERIA KE-6</h5>
            </li>
        </ul>
    </div>
</main>
<?php $this->endSection(); ?>