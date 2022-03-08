    <main>
        <section class="hero-section">
            <div class="container">
                <div class="row flex-column-reverse flex-lg-row">                  
                    <div class="col-lg-6 align-self-center" data-aos="fade-right" data-aos-duration="1500">
                        <h1 class="h1-custom mb-4">Laptop anda rusak? <span>DR.IT</span> solusinya!</h1>
                        <p class="p-muted mb-5">Memiliki masalah pada laptop/komputer?  Dapatkan bantuan sekarang. kami akan membantu memperbaikinya dengan cepat dan dapat diandalkan. </p>
                        <a class="btn btn-Primary" href="<?= site_url('contact'); ?>" role="button">Hubungi kami</a>
                        <a class="btn btn-Secondary ml-2" href="#why-section    " role="button">Selengkapnya</a>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <img class="img-section img-fluid" src="<?= base_url('assets/img/image-hero.svg'); ?>" alt="Image hero-section">
                        <div class="card-header d-none d-lg-block">
                            <img class="service" src="<?= base_url('assets/img/Popupservice.svg'); ?>" alt="Popupservice">
                            <img class="website" src="<?= base_url('assets/img/Popupwebsite.svg'); ?>" alt="Popupwebsite">
                            <img class="software" src="<?= base_url('assets/img/Popupsoftware.svg'); ?>" alt="Popupsoftware">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="why-section" class="why-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h1 class="line mb-4 text-center">Mengapa <span>Memilih Kami ?</span></h1>
                    </div>
                    <div class="col-12 mb-5">
                        <p class="text-center">Layanan perbaikan yang dapat di andalkan dengan harga terbaik!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 d-flex justify-content-around item-why-section" data-aos="zoom-in-up">
                        <img class="img-fluid" src="<?= base_url('assets/img/icon-price.svg');?>" alt="icon-price">
                    </div>
                    <div class="col-md-4 d-flex justify-content-center item-why-section" data-aos="zoom-in-up">
                        <img class="img-fluid" src="<?= base_url('assets/img/icon-call.svg');?>" alt="icon-call">
                    </div>
                    <div class="col-md-4 d-flex justify-content-center item-why-section" data-aos="zoom-in-up">
                        <img class="img-fluid" src="<?=base_url('assets/img/icon-reliable.svg');?>" alt="icon-reliable">
                    </div>
                </div>
                <div class="shape d-none d-lg-block">
                    <img class="img-fluid" src="<?= base_url('assets/img/shape.svg'); ?>" alt="shape">
                </div>
            </div>
        </section>
        <div class="service-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h1 class="line mb-4 text-center">Layanan <span>Kami</span></h1>
                    </div>
                    <div class="col-12 mb-5">
                        <p class="p-custom text-center">kami memprioritaskan pelanggan dalam menangani masalah komputer dan laptop Anda</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 d-flex align-items-stretch">
                        <div class="card" data-aos="fade-right">
                            <div class="card-body">
                                <img class="mb-3 img-fluid" src="<?= base_url('assets/img/icon-computer.svg'); ?>" alt="service komputer/notebook">
                                <h1 class="mb-3">Service Komputer/Notebook</h1>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="<?= base_url('layanan/serviceComputer'); ?>" class="card-link">
                                    <img class="img-fluid" src="<?= base_url('assets/img/arrow-right.svg'); ?>" alt="arrow-right">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-stretch">
                        <div class="card " data-aos="fade-right">
                            <div class="card-body d-flex flex-column">
                                <img class="mb-3 img-fluid mr-auto" src="<?= base_url('assets/img/icon-software.svg'); ?>" alt="setup & instal software">
                                <h1 class="mb-3">Setup & Instal software</h1>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="<?= base_url('layanan/instalSoftware'); ?>" class="card-link mt-auto">
                                    <img class="img-fluid" src="<?= base_url('assets/img/arrow-right.svg'); ?>" alt="arrow-right">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-stretch">
                        <div class="card " data-aos="fade-right">
                            <div class="card-body d-flex flex-column">
                                <img class="mb-3 img-fluid mr-auto" src="<?= base_url('assets/img/icon-windows.svg'); ?>" alt="instal ulang">
                                <h1 class="mb-3">Instal Ulang</h1>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="<?= base_url('layanan/instalUlang'); ?>" class="card-link  mt-auto">
                                    <img class="img-fluid" src="<?= base_url('assets/img/arrow-right.svg'); ?>" alt="arrow-right">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-stretch">
                        <div class="card " data-aos="fade-right">
                            <div class="card-body d-flex flex-column">
                                <img class="mb-3 img-fluid mr-auto" src="<?= base_url('assets/img/icon-website.svg'); ?>" alt="Pembuatan Website">
                                <h1 class="mb-3">Pembuatan Website</h1>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="<?= base_url('layanan/pembuatanWebsite'); ?>" class="card-link  mt-auto">
                                    <img class="img-fluid" src="<?= base_url('assets/img/arrow-right.svg'); ?>" alt="arrow-right">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape d-none d-lg-block">
                <img class="img-fluid" src="<?= base_url('assets/img/Circle.svg'); ?>" alt="shape">
            </div>
        </div>
        <section id="tentang" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="<?= base_url('assets/img/undraw_team_spirit_hrr4.svg');?>" alt="about-section">
                    </div>
                    <div class="col-lg-6 col-sm-12 align-self-center" data-aos="fade-right">
                        <h1 class="mt-5 mb-5">Tentang <span>Kami</span></h1>
                        <p class="mb-5">DR.IT adalah sebuah penyedia jasa IT solution. Mulai dari service hardware komputer/notebook hingga instalasi software.</p>
                        <button class="btn btn-Secondary">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="add-section parallax">
            <div class="container">
                <div class="row">
                    <div class="mb-4 col-12">
                        <h1>Laptop Anda Lemot?</h1>
                    </div>
                    <div class="mb-5 col-12">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium pariatur quod saepe quibusdam obcaecati. Unde officia repudiandae beatae iste laboriosam!</p>
                    </div>
                    <div class="col-12" data-aos="fade-up">
                        <a href="#" class="btn btn-Primary">Hubungi kami</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="artikel" class="article-section">
            <div class="container">
                <h1>Artikel <span>terbaru kami</span></h1>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div data-aos="fade-up" class="card"> 
                            <img class="card-img-top" src="<?= base_url('assets/img/post1.png');?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Cara merakit pc dengan mudah</h5>
                                <p class="card-text">Komputer menjadi bagian terpenting dalam berbagai jenis pekerjaan. Dari kasir swalayan, pegawai...</p>
                                <a href="" class="btn btn-Primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-aos="fade-up" class="card">
                            <img class="card-img-top" src="<?= base_url('assets/img/post2.png');?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Tips Mudah Memperbaiki Laptop</h5>
                                <p class="card-text">Laptop Anda lambat? Coba ikuti tips cara mudah mengatasi laptop lemot berikut ini. Berhubung...</p>
                                <a href="#" class="btn btn-Primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-aos="fade-up" class="card">
                            <img class="card-img-top" src="<?= base_url('assets/img/post3.png');?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Penyebab kerusakan yang sering terjadi pada monitor</h5>
                                <p class="card-text">Monitor komputer atau laptop kita merupakan salah satu hardware mengemban fungsi vital dari...</p>
                                <a href="#" class="btn btn-Primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimoni-section">
            <div class="container">
                <div class="text-center row mb-5">
                    <div class="col-12 mb-3">
                        <h1 class="line mb-4">Testimonial <span>& Client</span></h1>
                    </div>
                    <div class="col-12">
                        <p>Apa yang mereka katakan tentang kami?</p>
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="img-testimoni col-lg-6">
                                    <img src="<?= base_url('assets/img/img-testimoni1.svg');?>" alt="">
                                </div>
                                <div class="col-lg-6 align-self-center mt-4">
                                    <h1>John kasino</h1>
                                    <p class="p-custom mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, nam neque at nibh. Facilisis fringilla pharetra vitae condimentum. A ipsum, vulputate fringilla urna. Commodo elementum diam dictum phasellus tincidunt pellentesque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="<?= base_url('assets/img/img-testimoni2.svg');?>" alt="">
                                </div>
                                <div class="col-lg-6 align-self-center mt-4">
                                    <h1>Jennifer Aurelie</h1>
                                    <p class="p-custom mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, nam neque at nibh. Facilisis fringilla pharetra vitae condimentum. A ipsum, vulputate fringilla urna. Commodo elementum diam dictum phasellus tincidunt pellentesque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="<?= base_url('assets/img/img-testimoni3.svg');?>" alt="">
                                </div>
                                <div class="col-lg-6 align-self-center mt-4">
                                    <h1>Murtaza Ghani</h1>
                                    <p class="p-custom mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, nam neque at nibh. Facilisis fringilla pharetra vitae condimentum. A ipsum, vulputate fringilla urna. Commodo elementum diam dictum phasellus tincidunt pellentesque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
    </main>
    