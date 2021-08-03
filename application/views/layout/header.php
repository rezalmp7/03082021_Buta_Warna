<!DOCTYPE html>
<html lang="en">

<head>
    <title>Puskesmas Ngemplak</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url(); ?>assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Plugin/Framework -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/uikit/css/uikit.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.uikit.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/iziToast/dist/css/iziToast.min.css">

    <!-- Lokal -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css"
        integrity="sha512-C7hOmCgGzihKXzyPU/z4nv97W0d9bv4ALuuEbSf6hm93myico9qa0hv4dODThvCsqQUmKmLcJmlpRmCaApr83g=="
        crossorigin="anonymous" />


    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="uk-width-1-1 uk-height-1-1 uk-padding-remove uk-margin-remove" id="<?php echo $page; ?>">
        <div class="uk-width-1-1 uk-grid-match uk-height-1-1 uk-padding-remove uk-margin-remove" uk-grid>
            <div class="menu uk-width-1-6 uk-margin-remove uk-padding-remove">
                <div class="uk-inline">
                    <h1
                        class="poppins-semi-bold uk-text-center uk-margin-remove uk-padding uk-padding-remove-horizontal">
                        MODUL PEMERIKSAAN<br>TES BUTA WARNA<br>PUSKESMAS NGEMPLAK I</h1>
                    <ul class=" uk-nav-parent-icon poppins-semi-bold" uk-nav>
                        <li class="<?php if($page=='dashboard') echo 'uk-active '; ?>uk-padding uk-padding-remove-top uk-padding-remove-horizontal"><a
                                href="<?php echo base_url(); ?>dashboard"><span class="iconify" data-icon="akar-icons:grid" data-inline="false"></span>&nbsp; DASHBOARD</a></li>
                        <?php
                        $level_session = $this->session->userdata('level_butawarna');
                        if($level_session == 'admin_butawarna')
                        {
                        ?>
                        <li class="<?php if($page=='perawat') echo 'uk-active '; ?>uk-padding uk-padding-remove-top uk-padding-remove-horizontal"><a
                                href="<?php echo base_url(); ?>perawat"><span class="iconify" data-icon="vaadin:doctor-briefcase"
                                    data-inline="false"></span>&nbsp; DATA PERAWAT</a></li>
                        <?php
                        }
                        if($level_session == 'admin_butawarna' || $level_session == 'perawat_butawarna')
                        {
                        ?>
                        <li class="<?php if($page=='pasien') echo 'uk-active '; ?>uk-padding uk-padding-remove-top uk-padding-remove-horizontal"><a
                                href="<?php echo base_url(); ?>pasien"><span class="iconify" data-icon="ant-design:user-outlined"
                                    data-inline="false"></span>&nbsp; DATA PASIEN</a></li>
                        <?php
                        }
                        if($level_session == 'admin_butawarna')
                        {
                        ?>
                        <li class="<?php if($page=='dokter') echo 'uk-active '; ?>uk-padding uk-padding-remove-top uk-padding-remove-horizontal"><a
                                href="<?php echo base_url(); ?>dokter"><span class="iconify" data-icon="maki:doctor-15"
                                    data-inline="false"></span>&nbsp; DATA DOKTER</a></li>
                        <?php
                        }
                        ?>
                        <li class="<?php if($page=='test') echo 'uk-active '; ?>k-padding uk-padding-remove-top uk-padding-remove-horizontal"><a
                                href="<?php echo base_url(); ?>test"><span class="iconify" data-icon="vscode-icons:file-type-log"
                                    data-inline="false"></span>&nbsp; RIWAYAT HASIL</a></li>
                    </ul>
                    <footer
                        class="uk-text-small uk-width-1-1 uk-padding-small uk-padding-remove-horizontal uk-padding-remove-top uk-text-center">
                        <span class="iconify" data-icon="ph:copyright-fill" data-inline="false"></span> Copyright <?php echo date('Y'); ?> Ahmad
                        Habib</footer>
                </div>
            </div>
            
            <div class="content uk-width-5-6@s uk-margin-remove uk-padding-small">
                <div class="uk-width-1-1 uk-padding">
                    <div class="uk-padding-remove uk-margin-remove uk-clearfix" id="header">
                        <a class="uk-float-right uk-link-reset" uk-grid>
                            <div class="photo uk-border-circle"
                                style="height: 30px; width: 30px; border:2px solid blue;">
                                <div class="uk-margin-small uk-border-circle uk-height-1-1 uk-width-1-1 uk-background-cover uk-background-center-center uk-background-norepeat"
                                    style="background-image: url('<?php echo base_url(); ?>assets/img/profil.jpg');"></div>
                            </div>
                            <div class="nama">
                                <h4 class="poppins-bold uk-padding-remove uk-margin-remove"><?php echo $this->session->userdata('nama_butawarna'); ?></h4>
                                <label class="uk-padding-remove uk-margin-remove">
                                <?php
                                if($this->session->userdata('level_butawarna') == 'admin_butawarna')
                                {
                                    echo 'Admin';
                                }
                                elseif($this->session->userdata('level_butawarna') == 'dokter_butawarna')
                                {
                                    echo 'Dokter';
                                }
                                elseif($this->session->userdata('level_butawarna') == 'perawat_butawarna')
                                {
                                    echo 'Perawat';
                                }
                                else {
                                    echo "-";
                                }
                                ?>
                                </label>
                            </div>
                        </a>
                        <div uk-dropdown="mode: click">
                            <ul class="uk-nav uk-dropdown-nav">
                                <li><a href="<?php echo base_url(); ?>login/logout"><i data-feather="log-out"></i>&nbsp; Logout</a></li>
                            </ul>
                        </div>
                    </div>