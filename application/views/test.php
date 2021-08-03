
                    <div class="uk-padding-remove uk-margin-large-top uk-width-1-1" id="body">
                        <div class="uk-padding-small uk-margin-medium-top uk-width-1-1 uk-border-rounded bg-color-white">
                            <ul class="uk-breadcrumb uk-margin-remove">
                                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><span>Riwayat Test</span></li>
                            </ul>
                        </div>
                        <div class="uk-padding-small uk-margin-medium-top uk-width-1-1 uk-border-rounded bg-color-white">
                            <div class="uk-width-1-1 uk-margin-small-bottom uk-padding-small uk-clearfix">
                                <?php
                                $level_session = $this->session->userdata('level_butawarna');
                                ?>
                                <a class="uk-float-right uk-button uk-button-secondary" href="<?php echo base_url(); ?>test/cetak"><span class="iconify" data-icon="file-icons:microsoft-excel" data-inline="false"></span> Cetak</a>
                            </div>
                            <table id="example" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID Pasien</th>
                                        <th>Nama</th>
                                        <th>Tanggal Test</th>
                                        <th>Nama Test</th>
                                        <th>Hasil</th>
                                        <th>Catatan</th>
                                        <?php
                                        if($level_session == 'dokter_butawarna')
                                        {
                                        ?>
                                        <th>Aksi</th>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data_test as $a) {
                                    ?>
                                    <tr>
                                        <td><?php echo sprintf("%04d", $a->id); ?></td>
                                        <td><?php echo $a->nama; ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($a->tgl_test)); ?></td>
                                        <td><?php echo $a->nm_test; ?></td>
                                        <td><?php echo $a->hasil; ?></td>
                                        <td><?php echo $a->catatan; ?></td>
                                        <?php
                                        if($level_session == 'dokter_butawarna')
                                        {
                                        ?>
                                        <td>
                                            <a href="<?php echo base_url(); ?>test/edit?id=<?php echo $a->id_test; ?>" class="uk-button uk-button-primary uk-button-small"><span class="iconify" data-icon="akar-icons:edit" data-inline="false"></span></a>
                                        </td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>