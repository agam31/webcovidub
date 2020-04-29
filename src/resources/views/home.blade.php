<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/libs/bootstrap-4.4.1-dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Web Covid UB</title>
    <script src="https://kit.fontawesome.com/8c953be2c7.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light static-top ">
        <div class="container-fluid header-container container-default">
            <a class="navbar-brand" href="#">
                <img class="logo" src="/assets/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="leftmenu">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about"> Tentang Covid-19 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/data"> Data </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/detector"> Deteksi Diri </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tips"> Info dan Tips </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Kontak </a>
                    </li>
                </ul>
                <form class="search-form searchbar" role="search" id="hiddenSearchBox" action="" method="get">
                    <div class="input-group">
                        <input type="hidden" name="id" value="63">
                        <input type="search" name="keywords" class="form-control" placeholder="Search..">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default" data-toggle="searchbar" data-target="#hiddenSearchBox">
                                <span class="fa fa-search"></span> <span class="sr-only">Submit</span>
                            </button>
                        </div>
                    </div>
                </form>
                <a href="https://sc19.ub.ac.id/apk/app-release.apk" type="button" class="btn btn-outline-info btn-sm login-btn"> Login </a>

            </div>
        </div>
    </nav>

    <section id="top-banner">
        <div class="container-fluid container-default">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-caption-wrapper">
                        <div class="banner-caption">
                            <h1>Hub UB Covid-19</h1>
                            <h3>Portal GIS Monitoring Status COVID-19
                                di Jawa Timur dan Malang Raya
                            </h3>
                            <a href="" class="btn btn-success caption-btn"> Cari tahu yuk! </a>
                            <blockquote class="blockquote caption-desc">Situs ini dikelola secara swadaya oleh tim GIS dari TEAM SATUAN TUGAS (SATGAS)
                                COVID-19 UNIVERSITAS BRAWIJAYA yang berisi informasi untuk masyarakat seputar
                                penyakit COVID-19  di area Jawa Timur dan Malang Raya.
                            </blockquote>
                        </div>
                    </div>
                    <div class="banner-image-wrapper">

                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<div class="body-wrap">
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
                        <div class="col-md-4" style="margin-bottom: 20px;">
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


    <section id="news-section">
        <div class="container container-default">
            <h2>Informasi Terkini Seputar Covid-19</h2>
            <div class="row">
                <div class="col-md-12 heroSlider-fixed">
                    <!-- control arrows -->
                    <div class="prev">
                        <span class="fa fa-arrow-left" aria-hidden="true"></span>
                    </div>
                    <div class="next">
                        <span class="fa fa-arrow-right" aria-hidden="true"></span>
                    </div>

                    <div class="overlay">
                    </div>
                    <!-- Slider -->
                    <div class="slider responsive">
                        <div>
                            <a class="twitter-timeline" data-height="400" data-width="400" href="https://twitter.com/KemenkesRI?ref_src=twsrc%5Etfw">Tweets by KemenkesRI</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div>
                            <a class="twitter-timeline" data-height="400" data-width="400" href="https://twitter.com/PemkotMalang?ref_src=twsrc%5Etfw">Tweets by PemkotMalang</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div>
                            <a class="twitter-timeline" data-height="400" data-width="400" href="https://twitter.com/kominfobatukota?ref_src=twsrc%5Etfw">Tweets by kominfobatukota</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div>
                            <a class="twitter-timeline" data-height="400" data-width="400" href="https://twitter.com/Pemkab_Malang?ref_src=twsrc%5Etfw">Tweets by Pemkab_Malang</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section id="another-section">
        <div class="container container-default">
            <h2> Situs resmi Pemerintah terkait Covid-19 </h2>
            <div class="row">
                <div class="col-md-5th-1 col-md-offset-0 col-sm-offset-2">
                    <div class="image-icon-wrapper" style="
    width: 105px;
">
                        <a href=""><img src="/assets/images/ri.png"></a>
                    </div>
                </div>
                <div class="col-md-5th-1 ">
                    <div class="image-icon-wrapper" style="
    width: 79px;
">
                        <a href=""><img src="/assets/images/jatim.png"></a>
                    </div>
                </div>
                <div class="col-md-5th-1 ">
                    <div class="image-icon-wrapper" style="
    width: 100px;
">
                        <a href=""><img src="/assets/images/malang.png"></a>
                    </div>
                </div>
                <div class="col-md-5th-1 ">
                    <div class="image-icon-wrapper" style="
    width: 200px;
">
                        <a href=""><img src="/assets/images/kemenkes.png"></a>
                    </div>
                </div>
                <div class="col-md-5th-1 ">
                    <div class="image-icon-wrapper" style="
    width: 105px;
">
                        <a href=""><img src="/assets/images/bnpb.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer>
    <section id="footer">
        <div class="container-default container">
            <div class="row">
                <div class="col-md-8">
                    <div class="address-info text-left">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="/assets/images/logo.png">
                            </div>
                            <div class="col-md-10">
                                <h3>Universitas Brawijaya</h3>
                                <p>Jl. Veteran Malang, Ketawanggede,</p>
                                <p>Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info text-right">
                        <p>Phone: +62-341-551611</p>
                        <p>Email: http://humas.ub.ac.id/</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<div class="result"></div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript" src="/assets/libs/bootstrap-4.4.1-dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>
</body>
</html>
