<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Tambah Alternatif</h1>
        <form action="<?= base_url(); ?>/alternatif/simpan">
            <?= csrf_field(); ?>
            <div class="form-group mb-2">
                <label for="masalah" class="form-label">Masalah :</label>
                <textarea class="form-control" id="masalah" name="masalah" rows="3" placeholder="Masukkan Permasalahan Yang Ditemui"></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="potensi" class="form-label">Potensi :</label>
                <textarea class="form-control" id="potensi" name="potensi" rows="3" placeholder="Masukkan Potensi Yang Dimiliki"></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="alternatif" class="form-label">Gagasan Program :</label>
                <input type="text" class="form-control <?= ($validation->hasError('alternatif')) ? 'is-invalid' : '' ?>" id="alternatif" name="alternatif" placeholder="Masukkan Program/ alternatif" autofocus value="<?= old('alternatif'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('alternatif'); ?>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="dimensi" class="form-label">Dimensi :</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Panjang</span>
                    </div>
                    <input type="text" class="form-control <?= ($validation->hasError('panjang')) ? 'is-invalid' : '' ?>" id="panjang" name="panjang" placeholder="Masukkan Panjang (m)" autofocus value="<?= old('panjang'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('panjang'); ?>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Lebar</span>
                    </div>
                    <input type="text" class="form-control <?= ($validation->hasError('lebar')) ? 'is-invalid' : '' ?>" id="lebar" name="lebar" placeholder="Masukkan lebar (m)" autofocus value="<?= old('lebar'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('lebar'); ?>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Tinggi</span>
                    </div>
                    <input type="text" class="form-control <?= ($validation->hasError('tinggi')) ? 'is-invalid' : '' ?>" id="tinggi" name="tinggi" placeholder="Masukkan tinggi (m)" autofocus value="<?= old('tinggi'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tinggi'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="padukuhan" class="form-label">Padukuhan :</label>
                <select class="form-select form-select-md" name="padukuhan" id="padukuhan" required>
                    <option selected disabled value="">Pilih Padukuhan</option>
                    <?php foreach ($padukuhan as $pd) : ?>
                        <option value="<?= $pd['id_padukuhan']; ?>"><?= $pd['padukuhan']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('padukuhan'); ?>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="rt" class="form-label">RT :</label>
                <select class="form-select form-select-md" name="rt">
                    <?php foreach ($rt as $rt) : ?>
                        <option value="<?= $rt['id_rt']; ?>"><?= $rt['rt']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('rt'); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-secondary" href="<?= base_url(); ?>/alternatif">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>