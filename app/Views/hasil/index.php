<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Urutan Alternatif Berdasarkan Rangking</h1>
        <table class="table table-striped" id="hasil">
            <thead>
                <tr>
                    <th>Urutan</th>
                    <th>Kode Alternatif</th>
                    <th>Alternatif</th>
                    <th>NetFlow</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($alternatif); $i++) : ?>
                    <?php foreach ($rank as $row) : ?>
                        <?php if ($row['rangking'] == $i + 1) : ?>
                            <?php foreach ($alternatif as $row2) : ?>
                                <?php if ($row['id_alternatif'] == $row2['id_alternatif']) : ?>
                                    <tr>
                                        <td><?= $i + 1; ?></td>
                                        <td><?= $row['id_alternatif']; ?></td>
                                        <td><?= $row2['alternatif']; ?></td>
                                        <td><?= $hasil[$row['id_alternatif'] - 1][7]; ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</main>
<?= $this->endSection(); ?>