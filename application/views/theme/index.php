<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>" >
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css'); ?>" >
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/animate.css'); ?>" >
    <?php $active = $this->uri->segment(1)?>
    <title>DokterIT | <?php 
        if($active == 'homepage'){
            echo 'Beranda';
        }else if($active == 'about'){
            echo 'Tentang';
        }else if($active == 'service'){
            echo 'Layanan';
        }else if($active == 'Contact'){
            echo 'Kontak Kami';
        }else{
            echo 'Artikel';
        }?>
    </title>
</head>
<body>

    <!-- load header -->
    <?php $this->load->view('theme/navbar'); ?>

    <!-- load main content -->
    <?php $this->load->view($theme_page); ?>

    <!-- load footer -->
    <?php $this->load->view('theme/footer'); ?>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?= base_url('assets/js/app.js'); ?>"></script>
    <script src="<?= base_url('assets/js/all.js');?>"></script>
</body>
</html>