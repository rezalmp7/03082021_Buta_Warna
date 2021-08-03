
                </div>
            </div>
        </div>
    </div>

    <!-- Pligin/Framework -->
    <script src="<?php echo base_url(); ?>assets/vendor/uikit/js/uikit.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit-icons.min.js"
        integrity="sha512-hcz3GoZLfjU/z1OyArGvM1dVgrzpWcU3jnYaC6klc2gdy9HxrFkmoWmcUYbraeS+V/GWSgfv6upr9ff4RVyQPw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"
        integrity="sha512-hZf9Qhp3rlDJBvAKvmiG+goaaKRZA6LKUO35oK6EsM0/kjPK32Yw7URqrq3Q+Nvbbt8Usss+IekL7CRn83dYmw=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.uikit.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/iziToast/dist/js/iziToast.min.js" type="text/javascript"></script>

    <!-- Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://code.iconify.design/2/2.0.0-rc.6/iconify.min.js"></script>

    <!-- Lokal -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <?php
    if(isset($_GET['success']))
    {
    ?>
    <script>
        iziToast.success({
            timeout: 6000,
            position: 'bottomRight',
            title: 'Success!',
            message: '<?php echo $_GET['success']; ?>',
        });
    </script>
    <?php
    }
    if(isset($_GET['warning']))
    {
    ?>
    <script>
        iziToast.warning({
            timeout: 10000,
            position: 'bottomRight',
            title: 'Peringatan!',
            message: '<?php echo $_GET['warning']; ?>',
        });
    </script>
    <?php
    }
    ?>
</body>

</html>