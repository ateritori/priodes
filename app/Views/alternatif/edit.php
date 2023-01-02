<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Edit Alternatif</h1>
        <form action="/alternatif/update/<?= $alternatif['id_alternatif']; ?>">
            <?= csrf_field(); ?>
            <div class="form-group mb-2">
                <label for="masalah" class="form-label">Masalah :</label>
                <textarea class="form-control" id="masalah" name="masalah" rows="3" autofocus required><?= old('panjang'); ?> <?= $alternatif['masalah']; ?></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="potensi" class="form-label">Potensi :</label>
                <textarea class="form-control" id="potensi" name="potensi" rows="3" required><?= old('panjang'); ?><?= $alternatif['masalah']; ?></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="alternatif" class="form-label">Gagasan Program :</label>
                <input type="text" class="form-control <?= ($validation->hasError('alternatif')) ? 'is-invalid' : '' ?>" name="alternatif" value="<?= old('alternatif'); ?><?= $alternatif['alternatif']; ?>" required>
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
                    <input type="text" class="form-control <?= ($validation->hasError('paket')) ? 'is-invalid' : '' ?>" name="paket" value="<?= old('paket'); ?><?= $alternatif['paket']; ?>" required>
                    <div class="invalid-feedback">
                        <?= $validation->getError('paket'); ?>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Panjang</span>
                    </div>
                    <input type="text" class="form-control <?= ($validation->hasError('panjang')) ? 'is-invalid' : '' ?>" name="panjang" value="<?= old('panjang'); ?><?= $alternatif['panjang']; ?>" required>
                    <div class="invalid-feedback">
                        <?= $validation->getError('panjang'); ?>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Lebar</span>
                    </div>
                    <input type="text" class="form-control <?= ($validation->hasError('lebar')) ? 'is-invalid' : '' ?>" name="lebar" value="<?= old('lebar'); ?><?= $alternatif['lebar']; ?>" required>
                    <div class="invalid-feedback">
                        <?= $validation->getError('lebar'); ?>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tinggi</span>
                    </div>
                    <input type="text" class="form-control <?= ($validation->hasError('tinggi')) ? 'is-invalid' : '' ?>" name="tinggi" value="<?= old('tinggi'); ?> <?= $alternatif['tinggi']; ?>" required>
                    <div class="invalid-feedback">
                        <?= $validation->getError('tinggi'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="padukuhan" class="form-label">Padukuhan :</label>
                <select class="form-select form-select-md" name="padukuhan" required>
                    <option disabled value="">Pilih Padukuhan</option>
                    <option selected value="<?= $alternatif['id_padukuhan']; ?>"><?= $alternatif['padukuhan']; ?></option>
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
                    <option disabled value="">Pilih RT</option>
                    <option selected value="<?= $alternatif['id_rt']; ?>"><?= $alternatif['rt']; ?></option>
                    <?php foreach ($rt as $rt) : ?>
                        <option value="<?= $rt['id_rt']; ?>"><?= $rt['rt']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('rt'); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
            <a class="btn btn-secondary" href="/alternatif">Kembali</a>
        </form>
    </div>
</main>
<?php $this->endSection(); ?>