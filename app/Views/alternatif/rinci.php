<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1><?= $alternatif['alternatif']; ?></h1>
        <table class="table p-2">
            <tr>
                <td width=10%>ID Alternatif</td>
                <td width=5%>:</td>
                <td width=85%><?= $alternatif['id_alternatif']; ?></td>
            </tr>
            <tr>
                <td width=10%>Masalah</td>
                <td width=5%>:</td>
                <td width=85%><?= $alternatif['masalah']; ?></td>
            </tr>
            <tr>
                <td width=10%>Potensi</td>
                <td width=5%>:</td>
                <td width=85%><?= $alternatif['potensi']; ?></td>
            </tr>
            <tr>
                <td width=10%>Alternatif</td>
                <td width=5%>:</td>
                <td width=85%><?= $alternatif['alternatif']; ?></td>
            </tr>
            <tr>
                <td width=10%>Padukuhan</td>
                <td width=5%>:</td>
                <td width=85%><?= $alternatif['padukuhan']; ?></td>
            </tr>
            <tr>
                <td width=10%>RT</td>
                <td width=5%>:</td>
                <td width=85%><?= $alternatif['rt']; ?></td>
            </tr>
            <tr>
                <td width=10%>Paket</td>
                <td width=5%>:</td>
                <td width=85%><?= $alternatif['paket']; ?> Paket</td>
            </tr>
            <tr>
                <td width=10%>Panjang</td>
                <td width=5%>:</td>
                <td width=85%><?= $alternatif['panjang']; ?> m</td>
            </tr>
            <tr>
                <td width=10%>Lebar</td>
                <td width=5%>:</td>
                <td width=85%><?= $alternatif['lebar']; ?> m</td>
            </tr>
            <tr>
                <td width=10%>Tinggi</td>
                <td width=5%>:</td>
                <td width=85%><?= $alternatif['tinggi']; ?> m</td>
            </tr>
        </table>
        <a href="/alternatif" class="btn btn-secondary btn-sm"><i class="fa-solid fa-arrow-left"></i>Kembali</a>
        <a href="<?= base_url(); ?>/alternatif/edit/<?= $alternatif['id_alternatif'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>Edit</a>
    </div>
</main>
<?php $this->endSection(); ?>