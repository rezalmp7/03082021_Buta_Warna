
                    <div class="uk-padding-remove uk-margin-large-top uk-width-1-1" id="body">
                        <div class="card uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                            <div>
                                <div class="uk-padding-small uk-card uk-card-body">
                                    <h3 class="poppins-medium">Perawat</h3>
                                    <div uk-grid>
                                        <div class="uk-text-large poppins-semi-black uk-width-expand uk-margin-small-top">
                                            <?php echo $jumlah_perawat; ?>
                                        </div>
                                        <div style="width: 72px">
                                            <span class="iconify uk-width-1-1" data-icon="vaadin:doctor-briefcase" data-inline="false"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-padding-small uk-card uk-card-body">
                                    <h3 class="poppins-medium">Pasien</h3>
                                    <div uk-grid>
                                        <div class="uk-text-large poppins-semi-black uk-width-expand uk-margin-small-top">
                                            <?php echo $jumlah_pasien; ?>
                                        </div>
                                        <div class="icon" style="width: 72px">
                                            <span class="iconify uk-width-1-1" data-icon="ant-design:user-outlined"
                                    data-inline="false"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-padding-small uk-card uk-card-body">
                                    <h3 class="poppins-medium">Dokter</h3>
                                    <div uk-grid>
                                        <div class="uk-text-large poppins-semi-black uk-width-expand uk-margin-small-top">
                                            <?php echo $jumlah_dokter; ?>
                                        </div>
                                        <div style="width: 72px">
                                            <span class="iconify uk-width-1-1" data-icon="maki:doctor-15" data-inline="false"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-padding-small uk-card uk-card-body">
                                    <h3 class="poppins-medium">Total Test</h3>
                                    <div uk-grid>
                                        <div class="uk-text-large poppins-semi-black uk-width-expand uk-margin-small-top">
                                            <?php echo $jumlah_test; ?>
                                        </div>
                                        <div style="width: 72px">
                                            <span class="iconify uk-width-1-1" data-icon="vscode-icons:file-type-log" data-inline="false"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chart uk-width-1-1 uk-margin-large-top uk-padding-remove" uk-grid>
                            <div class="uk-width-1-2 uk-padding-small">
                                <canvas class="uk-width-1-1" id="myChart"></canvas>
                            </div>
                            <div class="uk-width-1-2 uk-padding-small">
                                <table style="border: 0px">
                                    <tr>
                                        <td><?php echo $mata_normal; ?></td>
                                        <td><span class="iconify" style="color: #669AFF" data-icon="akar-icons:circle-fill" data-inline="false"></span></td>
                                        <td>Mata Normal</td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $mata_parsial; ?></td>
                                        <td><span class="iconify" style="color: #3D74FF" data-icon="akar-icons:circle-fill" data-inline="false"></span></td>
                                        <td>Mata merah - hijau (parsial)</td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $mata_buta_warna; ?></td>
                                        <td><span class="iconify" style="color: #1D5DFF" data-icon="akar-icons:circle-fill" data-inline="false"></span></td>
                                        <td>Mata buta warna total</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
            <script>    
                $(document).ready(function () {

                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ['Mata Nornal', 'Mata merah - hijau (parsial)', 'Mata buta warna total'],
                            datasets: [{
                                label: '# of Votes',
                                data: [<?php echo $mata_normal; ?>, <?php echo $mata_parsial; ?>, <?php echo $mata_buta_warna; ?>],
                                backgroundColor: [
                                    '#669AFF',
                                    '#3D74FF',
                                    '#1D5DFF',
                                ],
                                borderColor: [
                                    '#fff',
                                ],
                                borderWidth: 0
                            }]
                        },

                        options: {
                            plugins: {
                                legend: false,
                                tooltip: true,
                            },
                            responsive: true
                        }
                    });
                });
            </script>