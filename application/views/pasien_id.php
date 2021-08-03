
                    <div class="uk-padding-remove uk-margin-large-top uk-width-1-1" id="body">
                        <div
                            class="uk-padding-small uk-margin-medium-top uk-width-1-1 uk-border-rounded bg-color-white">
                            <ul class="uk-breadcrumb uk-margin-remove">
                                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>pasien">Data Pasien</a></li>
                                <li><a href="<?php echo base_url(); ?>pasien/tambah">Tambah</a></li>
                                <li><span>ID</span></li>
                            </ul>
                        </div>
                        <div class="uk-padding-small uk-margin-medium-top uk-width-1-1 uk-border-rounded bg-color-white">
                            <h3 class="uk-text-center">PASIEN</h3>
                            <table class="uk-table">
                                <tr>
                                    <th class="uk-text-right">Nama</th>
                                    <td>: <?php echo $pasien->nama; ?></td>
                                </tr>
                                <tr>
                                    <th class="uk-text-right">Jenis Kelamin</th>
                                    <td>: <?php echo $pasien->jenkel; ?></td>
                                </tr>
                                <tr>
                                    <th class="uk-text-right">Tanggal Lahir</th>
                                    <td>: <?php echo date('d/m/Y', strtotime($pasien->tgl_lahir)); ?></td>
                                </tr>
                                <tr>
                                    <th class="uk-text-right">Alamat</th>
                                    <td>: <?php echo $pasien->alamat; ?></td>
                                </tr>
                            </table>
                            <p class="uk-text-center">ID ini agar <strong>disimpan baik baik</strong> untuk test buta warna</p>
                            <h2 class="uk-text-center id poppins-black"><?php echo sprintf("%04d", $pasien->id); ?></h2>
                            <div class="uk-width-1-1 uk-padding-remove uk-margin-medium-top">
                                
                                <a class="uk-inline uk-button uk-button-primary" href="<?php echo base_url(); ?>pasien/tambah"><span class="iconify" data-icon="ant-design:user-add-outlined" data-inline="false"></span> Pendaftaran Pasien</a>
                                <a class="uk-inline uk-button uk-button-danger" href="<?php echo base_url(); ?>pasien"><span class="iconify" data-icon="akar-icons:arrow-back-thick" data-inline="false"></span> Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>