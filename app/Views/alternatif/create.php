<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Tambah Alternatif</h1>
        <form action="<?= base_url(); ?>/alternatif/save">
            <?= csrf_field(); ?>
            <div class="form-group mb-2">
                <label for="masalah" class="form-label">Masalah :</label>
                <textarea class="form-control" id="masalah" name="masalah" rows="3" placeholder="Masukkan Permasalahan Yang Ditemui" autofocus required><?= old('panjang'); ?></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="potensi" class="form-label">Potensi :</label>
                <textarea class="form-control" id="potensi" name="potensi" rows="3" placeholder="Masukkan Potensi Yang Dimiliki" required><?= old('panjang'); ?></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="alternatif" class="form-label">Gagasan Program :</label>
                <input type="text" class="form-control <?= ($validation->hasError('alternatif')) ? 'is-invalid' : '' ?>" id="alternatif" name="alternatif" placeholder="Masukkan Program/ alternatif" value="<?= old('alternatif'); ?>" required>
                <div class="invalid-feedback">
                    <?= $validation->getError('alternatif'); ?>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="dimensi" class="form-label">Dimensi :</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Jumlah Paket</span>
                    </div>
                    <input type="text" class="form-control <?= ($validation->hasError('paket')) ? 'is-invalid' : '' ?>" name="paket" placeholder="Jumlah Paket (paket)" value="<?= old('paket'); ?>" required>
                    <div class="invalid-feedback">
                        <?= $validation->getError('paket'); ?>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Panjang</span>
                    </div>
                    <input type="text" class="form-control <?= ($validation->hasError('panjang')) ? 'is-invalid' : '' ?>" name="panjang" placeholder="Panjang (m)" value="<?= old('panjang'); ?>" required>
                    <div class="invalid-feedback">
                        <?= $validation->getError('panjang'); ?>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Lebar</span>
                    </div>
                    <input type="text" class="form-control <?= ($validation->hasError('lebar')) ? 'is-invalid' : '' ?>" name="lebar" placeholder="lebar (m)" value="<?= old('lebar'); ?>" required>
                    <div class="invalid-feedback">
                        <?= $validation->getError('lebar'); ?>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tinggi</span>
                    </div>
                    <input type="text" class="form-control <?= ($validation->hasError('tinggi')) ? 'is-invalid' : '' ?>" name="tinggi" placeholder="tinggi (m)" value="<?= old('tinggi'); ?>" required>
                    <div class="invalid-feedback">
                        <?= $validation->getError('tinggi'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="padukuhan" class="form-label">Padukuhan :</label>
                <select class="form-select form-select-md" name="padukuhan" required>
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
                <select class="form-select form-select-md" name="rt" required>
                    <option selected disabled value="">Pilih RT</option>
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