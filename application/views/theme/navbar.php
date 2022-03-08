    <header>
        <nav class="navbar fixed-top py-4  navbar-expand-lg navbar-light bg-purple">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('./assets/img/img-logo.svg')?>" width="80px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-custom ml-auto">

                        <?php $active = $this->uri->segment(1)?>
                        <li class="<?php if ($active == 'homepage') echo "active"; ?> nav-item">
                            <a class="nav-link" href="<?= site_url('homepage/read'); ?>">Beranda</a>
                        </li>
                        <li class="<?php if ($active == 'about') echo "active"; ?> nav-item">
                            <a class="nav-link" href="<?= site_url('about/read'); ?>">Tentang</a>
                        </li>
                        <li class="<?php if ($active == 'service') echo "active"; ?> nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Layanan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php $active2 = $this->uri->segment(2)?>
                                <a class="<?php if ($active2 == 'serviceComputer') echo "active"; ?> dropdown-item" href="<?= site_url('layanan/serviceComputer'); ?>"> Service komputer/notebook </a>
                                <a class="<?php if ($active2 == 'instalSoftware') echo "active"; ?> dropdown-item" href="<?= site_url('layanan/instalSoftware'); ?>"> Instal software  </a>
                                <a class="<?php if ($active2 == 'instalUlang') echo "active"; ?> dropdown-item" href="<?= site_url('layanan/instalUlang'); ?>"> Instal ulang  </a>
                                <a class="<?php if ($active2 == 'pembuatanWebsite') echo "active"; ?> dropdown-item" href="<?= site_url('layanan/pembuatanWebsite'); ?>"> Pembuatan website  </a>
                            </div>
                        </li>
                        <li class="<?php if ($active == 'article') echo "active"; ?> nav-item">
                            <a class="nav-link" href="#artikel">Artikel</a>
                        </li>
                        <li class="<?php if ($active == 'contact') echo "active"; ?> nav-item">
                            <a class="nav-link" href="<?= site_url('contact/read'); ?>">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>