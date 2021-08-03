<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
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


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/uikit/css/uikit.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/iziToast/dist/css/iziToast.min.css">

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="uk-width-1-1 uk-height-1-1 uk-padding-remove uk-margin-remove" id="login">
        <div class="uk-width-1-1 uk-height-1-1 uk-padding-remove uk-margin-remove" uk-grid>
            <div class="left uk-visible@s uk-width-3-5 uk-height-1-1 uk-margin-remove uk-padding-remove">
                <div class="uk-height-1-1 uk-background-cover" style="background-image: url('<?php echo base_url(); ?>assets/img/login.png');">
                    <div class="uk-overlay uk-position-center-left">
                        <p class="uk-text-capitalize color-white poppins-bold">MODUL PEMERIKSAAN<br>TES BUTA WARNA<br>PUSKESMAS NGEMPLAK I</p>
                    </div>
                </div>
            </div>
            <div class="right uk-flex uk-width-2-5@s uk-margin-remove uk-padding-large">
                <div class="uk-margin-auto-vertical uk-width-1-1 uk-padding-remove">
                    <h2 class="poppins-bold">Log in</h2>
                    <form class="uk-form-stacked" method="post" action="<?php echo base_url(); ?>login/aksi_login">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Username</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="username" id="form-stacked-text" type="text" placeholder="username...">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Password</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="password" id="form-stacked-text" type="password" placeholder="Password...">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <input type="submit" class="uk-button uk-button-primary uk-width-1-1" value="Sign In">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/vendor/iziToast/dist/js/iziToast.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/uikit/js/uikit.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit-icons.min.js"
        integrity="sha512-hcz3GoZLfjU/z1OyArGvM1dVgrzpWcU3jnYaC6klc2gdy9HxrFkmoWmcUYbraeS+V/GWSgfv6upr9ff4RVyQPw=="
        crossorigin="anonymous"></script>
    <?php
    if(isset($_GET['msg']))
    {
    ?>
    <script>
    iziToast.warning({
        timeout: 10000,
        position: 'topRight',
        title: 'Peringatan!',
        message: '<?php echo $msg; ?>',
    });
    </script>
    <?php
    }
    ?>
</body>

</html>