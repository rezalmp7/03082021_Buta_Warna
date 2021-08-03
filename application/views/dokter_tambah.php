
                    <div class="uk-padding-remove uk-margin-large-top uk-width-1-1" id="body">
                        <div
                            class="uk-padding-small uk-margin-medium-top uk-width-1-1 uk-border-rounded bg-color-white">
                            <ul class="uk-breadcrumb uk-margin-remove">
                                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>dokter">Data Dokter</a></li>
                                <li><span>Tambah</span></li>
                            </ul>
                        </div>
                        <div class="uk-padding-small uk-margin-medium-top uk-width-1-1 uk-border-rounded bg-color-white">
                            <h3>Tambah Dokter</h3>
                            <form class="uk-form-stacked uk-margin-medium-top" method="post" action="<?php echo base_url(); ?>dokter/aksi_tambah">
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Nama Dokter</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="nama" id="form-stacked-text" type="text" placeholder="Nama Dokter...">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Username</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="username" id="form-stacked-text" type="text" placeholder="Username...">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Password</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="password" name="password" placeholder="Password...">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-form-label">jenis Kelamin</div>
                                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                        <label><input class="uk-radio" type="radio" value="laki-laki" name="jenkel"> Laki-laki</label>
                                        <label><input class="uk-radio" type="radio" value="perempuan" name="jenkel"> Perempuan</label>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-form-label">Tanggal Lahir</div>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="date" name="tgl_lahir" placeholder="Tanggal Lahir...">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Alamat</label>
                                    <div class="uk-form-controls">
                                        <textarea class="uk-textarea" rows="5" name="alamat" placeholder="Alamat..."></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="uk-button uk-button-primary" value="Tambah">
                            </form>
                        </div>
                    </div>
                </div>
            </div>