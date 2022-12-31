<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Tambah Alternatif</h1>
        <form action="<?= base_url(); ?>/alternatif/simpan">
            <?= csrf_field(); ?>
            <div class="form-group mb-2">
                <label for="kegiatan" class="form-label">Program/ Kegiatan :</label>
                <input type="text" class="form-control <?= ($validation->hasError('kegiatan')) ? 'is-invalid' : '' ?>" id="kegiatan" name="kegiatan" placeholder="Masukkan Program/ Kegiatan" autofocus value="<?= old('kegiatan'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('kegiatan'); ?>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="padukuhan" class="form-label">Padukuhan :</label>
                <select class="form-select form-select-md" name="padukuhan">
                    <option value="0" selected>Pilih Padukuhan</option>
                    <?php foreach ($padukuhan as $pd) : ?>
                        <option value="<?= $pd['id_padukuhan']; ?>"><?= $pd['padukuhan']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="rt" class="form-label">RT :</label>
                <select class="form-select form-select-md" name="rt">
                    <option value="0" selected>Pilih RT</option>
                    <?php foreach ($rt as $rt) : ?>
                        <option value="<?= $rt['id_rt']; ?>"><?= $rt['rt']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-secondary" href="<?= base_url(); ?>/alternatif">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>