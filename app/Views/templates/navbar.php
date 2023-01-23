<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url(); ?>">
            SPK-PROMETHEE
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url(); ?>">Beranda</a>
                </li>
                <?php if (in_groups('admin')) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/kriteria">Kriteria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/alternatif">Alternatif</a>
                    </li>
                <?php endif; ?>
                <?php if (in_groups('user')) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/penilaian">Penilaian</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="/analisis">Analisis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hasil">Hasil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Keluar</a>
                </li>
            </ul>
        </div>
        <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <?= user()->nama; ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="/logout">Log Out</a></li>
            </ul>
        </li>

    </div>
</nav>