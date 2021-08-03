
                    <div class="uk-padding-remove uk-margin-large-top uk-width-1-1" id="body">
                        <div class="uk-padding-small uk-margin-medium-top uk-width-1-1 uk-border-rounded bg-color-white">
                            <ul class="uk-breadcrumb uk-margin-remove">
                                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><span>Data Pasien</span></li>
                            </ul>
                        </div>
                        <div class="uk-padding-small uk-margin-medium-top uk-width-1-1 uk-border-rounded bg-color-white">
                            <div class="uk-width-1-1 uk-margin-small-bottom uk-padding-small uk-clearfix">
                                <a class="uk-float-left uk-button uk-button-primary" href="<?php echo base_url(); ?>pasien/tambah"><span class="iconify" data-icon="ant-design:user-add-outlined" data-inline="false"></span> Pendaftaran Pasien</a>
                                <a class="uk-float-right uk-button uk-button-secondary" href="<?php echo base_url(); ?>pasien/cetak" target="_blank"><span class="iconify" data-icon="file-icons:microsoft-excel" data-inline="false"></span> Cetak</a>
                            </div>
                            <table id="example" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID Pasien</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tgl Lahir</th>
                                        <th>Alamat</th>
                                        <th>Created At</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data_pasien as $a) {
                                    ?>
                                    <tr>
                                        <td><?php echo sprintf("%04d", $a->id); ?></td>
                                        <td><?php echo $a->nama; ?></td>
                                        <td style="text-transform: capitalize;"><?php echo $a->jenkel; ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($a->tgl_lahir)); ?></td>
                                        <td><?php echo $a->alamat; ?></td>
                                        <td><?php echo $a->created_at; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>pasien/edit?id=<?php echo $a->id; ?>" class="uk-button uk-button-primary uk-button-small"><span class="iconify" data-icon="bi:pencil-square" data-inline="false"></span></a>
                                            <a href="<?php echo base_url(); ?>pasien/hapus?id=<?php echo $a->id; ?>" class="uk-button uk-button-danger uk-button-small"><span class="iconify" data-icon="bi:trash" data-inline="false"></span></a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>