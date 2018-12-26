<nav class="navbar fixed-top navbar-expand-lg navbar-dark default-color scrolling-navbar">
    <a class="navbar-brand py-0" href="<?php echo $f->url('/') ?>">
        <img class="logo" src="<?php echo $f->url('/assets/images/navbar_logo.svg') ?>" height="30" alt="Santri Asuh logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $f->url('/activities') ?>">Aktivitas<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $f->url('/about') ?>">Tentang Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $f->url('/donation') ?>">Donasi</a>
            </li>
        </ul>
    </div>
</nav>
