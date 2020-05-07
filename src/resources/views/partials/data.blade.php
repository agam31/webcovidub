<section id="data-covid-section" style="">
    <div class="container container-default container-mini" style="padding-bottom: 0px;">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <ul class="nav nav-pills nav-fill" id="data-covid-nav">
                    <li class="nav-item">
                        <a data-toggle="pill" class="nav-link active" href="#data-covid-jatim-tab">Jawa Timur</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="pill" class="nav-link" href="#data-covid-malang-tab">Kota Malang</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>
<section id="data-covid-content">
    <div class="tab-content">
        <div id="data-covid-jatim-tab" class="tab-pane active">
            <div class="container container-mini container-default" style="padding-top: 30px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Angka Kejadian Covid-19 di Jawa Timur</h2>
                            <p style="margin-bottom: 20px;">Data ini bersumber dari situs resmi Pemerintah Provinsi Jawa Timur</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-4">
                        <div class="card card-data-covid" id="data-positif-jatim">
                            <div class="card-header text-center">Positif Covid-19</div>
                            <div class="card-body">
                                <div class="info-covid-text">
                                    <span class="data-covid-label float-left">Jawa Timur</span>
                                    <span class="data-covid-number float-right"><i class="fa fa-spin fa-spinner"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-data-covid" id="data-cured-jatim">
                            <div class="card-header text-center">Sembuh</div>
                            <div class="card-body">
                                <div class="info-covid-text">
                                    <span class="data-covid-label float-left">Jawa Timur</span>
                                    <span class="data-covid-number float-right"><i class="fa fa-spin fa-spinner"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-data-covid" id="data-died-jatim">
                            <div class="card-header text-center">Meninggal</div>
                            <div class="card-body">
                                <div class="info-covid-text">
                                    <span class="data-covid-label float-left">Jawa Timur</span>
                                    <span class="data-covid-number float-right"><i class="fa fa-spin fa-spinner"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-data-covid" id="data-odp-jatim">
                            <div class="card-header text-center">Positif Covid-19</div>
                            <div class="card-body">
                                <div class="info-covid-text">
                                    <span class="data-covid-label float-left">Jawa Timur</span>
                                    <span class="data-covid-number float-right"><i class="fa fa-spin fa-spinner"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-data-covid" id="data-pdp-jatim">
                            <div class="card-header text-center">Sembuh</div>
                            <div class="card-body">
                                <div class="info-covid-text">
                                    <span class="data-covid-label float-left">Jawa Timur</span>
                                    <span class="data-covid-number float-right"><i class="fa fa-spin fa-spinner"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="data-covid-section">
                <div class="container-fluid container-default">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="map-covid">
                                <div class="map-header text-center">
                                    <h2> Peta Sebaran Kasus Covid-19 Jawa Timur</h2>
                                </div>
                                <div class="map-body">
                                    <iframe id="map-covid-iframe" src="https://ub-gis.maps.arcgis.com/apps/opsdashboard/index.html#/9064df11534047f3a85dd98420018bff"></iframe>
                                </div>
                                <div class="map-footer text-center">
                                    <p>Sumber: <a href="https://ub-gis.maps.arcgis.com/apps/opsdashboard/index.html#/9064df11534047f3a85dd98420018bff">Infeksi Emerging Kemenkes RI  |  Pemerintah Provinsi Jawa Timur</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="data-covid-malang-tab" class="tab-pane fade">
            <div class="container container-mini container-default" style="padding-top: 30px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Angka Kejadian Covid-19 di Kota Malang</h2>
                            <p style="margin-bottom: 20px;">Data ini bersumber dari situs resmi Pemerintah Kota Malang</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-4">
                        <div class="card card-data-covid" id="data-positif-malang">
                            <div class="card-header text-center">Positif Covid-19</div>
                            <div class="card-body">
                                <div class="info-covid-text">
                                    <span class="data-covid-label float-left">Kota Malang</span>
                                    <span class="data-covid-number float-right"><i class="fa fa-spin fa-spinner"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <div class="card card-data-covid" id="data-cured-malang">
                            <div class="card-header text-center">Sembuh</div>
                            <div class="card-body">
                                <div class="info-covid-text">
                                    <span class="data-covid-label float-left">Kota Malang</span>
                                    <span class="data-covid-number float-right"><i class="fa fa-spin fa-spinner"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-data-covid" id="data-died-malang">
                            <div class="card-header text-center">Meninggal</div>
                            <div class="card-body">
                                <div class="info-covid-text">
                                    <span class="data-covid-label float-left">Kota Malang</span>
                                    <span class="data-covid-number float-right"><i class="fa fa-spin fa-spinner"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-data-covid" id="data-odp-malang">
                            <div class="card-header text-center">Positif Covid-19</div>
                            <div class="card-body">
                                <div class="info-covid-text">
                                    <span class="data-covid-label float-left">Kota Malang</span>
                                    <span class="data-covid-number float-right"><i class="fa fa-spin fa-spinner"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-data-covid" id="data-pdp-malang">
                            <div class="card-header text-center">Sembuh</div>
                            <div class="card-body">
                                <div class="info-covid-text">
                                    <span class="data-covid-label float-left">Kota Malang</span>
                                    <span class="data-covid-number float-right"><i class="fa fa-spin fa-spinner"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="data-covid-section">
                <div class="container-fluid container-default">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="map-covid">
                                <div class="map-header text-center">
                                    <h2> Peta Sebaran Kasus Covid-19 Kota Malang</h2>
                                </div>
                                <div class="map-body">
                                    <iframe id="map-covid-iframe" src="https://ub-gis.maps.arcgis.com/apps/opsdashboard/index.html#/e48f2e875a9346e49edeb2fda8bb32ca"></iframe>
                                </div>
                                <div class="map-footer text-center">
                                    <p>Sumber: <a href="https://ub-gis.maps.arcgis.com/apps/opsdashboard/index.html#/e48f2e875a9346e49edeb2fda8bb32ca">Infeksi Emerging Kemenkes RI  |  Pemerintah Provinsi Jawa Timur</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
