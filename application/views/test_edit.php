
                    <div class="uk-padding-remove uk-margin-large-top uk-width-1-1" id="body">
                        <div
                            class="uk-padding-small uk-margin-medium-top uk-width-1-1 uk-border-rounded bg-color-white">
                            <ul class="uk-breadcrumb uk-margin-remove">
                                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>test">Test</a></li>
                                <li><span>Catatan</span></li>
                            </ul>
                        </div>
                        <div class="uk-padding-small uk-margin-medium-top uk-width-1-1 uk-border-rounded bg-color-white">
                            <h3>Edit Catatan Test Data</h3>
                            <small><?php echo date('d F Y'); ?></small>
                            <form class="uk-form-stacked uk-margin-medium-top" method="post" action="<?php echo base_url(); ?>test/edit_aksi">
                                <input type="hidden" name="id" value="<?php echo $test['id_test']; ?>">
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Pilih Pasien</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="text" name="pasien" value="<?php echo $test['nama']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Nama Test</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="nm_test" id="form-stacked-text" type="text" value="<?php echo $test['nm_test']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Hasil</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="text" name="hasil" value="<?php echo $test['hasil']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Catatan</label>
                                    <div class="uk-form-controls">
                                        <textarea class="uk-textarea" rows="5" name="catatan" placeholder="Catatan..." required></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="uk-button uk-button-primary" value="Update">
                            </form>
                        </div>
                    </div>
                </div>
            </div>