@extends('layouts.app')
@section('title', 'Homepage')

@section('header')
    @parent
    @yield('defaultheader', View::make('layouts.miniheader'))
@endsection


@section('content')
    <section id="data-covid-section" style="">
        <div class="container container-default container-mini" style="padding-bottom: 0px;">
            <h1 class="text-center" style="color: #333456;">Daftar Rumah Sakit Rujukan</h1>
            <p class="text-center">Berikut daftar Rumah Sakit Rujukan yang ada di Jawa Timur dan Malang Raya</p>
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
                <div class="container container-default" style="padding-top: 30px; padding-bottom: 20px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-no-border" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left" style="color: #333456;">
                                    <h2 class="card-title text-left">Rumah Sakit Rujukan Jawa Timur
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left ">
                                    <h4 class="card-title">RSUD Kanjuruhan Kabupaten Malang</h4>
                                    <p>Jl. Panji No.100, Krajan, Panggungrejo, Kec. Kepanjen,
                                        Malang, Jawa Timur 65163</p>
                                    <p><i class="fas fa-envelope"></i> rsud-kanjuruhan@malangkab.go.id </p>
                                    <p><i class="fa fa-phone"></i> +62341 - 395041 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left">
                                    <h4 class="card-title">RSU Lavalette Malang</h4>
                                    <p>Jl. WR. Supratman No.10 Kota Malang 65111</p>
                                    <p><i class="fas fa-envelope"></i> 	rslavalette.nsm@gmail.com </p>
                                    <p><i class="fa fa-phone"></i> +62341 - 470805 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left ">
                                    <h4 class="card-title">RSUD dr. Soetomo Surabaya</h4>
                                    <p>Jl. Mayjen Prof. Dr. Moestopo No.6-8, Airlangga, Kec. Gubeng, Kota SBY, Jawa Timur 60286</p>
                                    <p><i class="fas fa-envelope"></i> kontak@rsudrsoetomo.jatimprov.go.id </p>
                                    <p><i class="fa fa-phone"></i> +62341 - 395041 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left">
                                    <h4 class="card-title">RSUD dr. Soebandi, Jember</h4>
                                    <p>Jl. DR. Soebandi No.124, Cangkring, Patrang, Kec. Patrang, Kabupaten Jember, Jawa Timur 68111</p>
                                    <p><i class="fas fa-envelope"></i> sistemrsddrsoebandi@gmail.com </p>
                                    <p><i class="fa fa-phone"></i> (0331) 487441 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left ">
                                    <h4 class="card-title">RSUD Kabupaten Kediri
                                    </h4>
                                    <p>Jl. Pahlawan Kusuma Bangsa No.1, Cangkring, Pelem, Pare, Kediri, East Java 64213</p>
                                    <p><i class="fas fa-envelope"></i> rsud_pare@kedirikab.go.id </p>
                                    <p><i class="fa fa-phone"></i> (0354) 391718 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left">
                                    <h4 class="card-title">RSUD Dr.Soedono Madiun
                                    </h4>
                                    <p>Jl. Dr. Sutomo No.59, Kartoharjo, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63117</p>
                                    <p><i class="fas fa-envelope"></i> humas@rssoedono.jatimprov.go.id </p>
                                    <p><i class="fa fa-phone"></i> (0351) 454657 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left ">
                                    <h4 class="card-title">RSUD Dr. R. KOESMA Tuban
                                    </h4>
                                    <p> Jalan Doktor Wahidin Sudirohusodo No.800, Sidorejo, Kecamatan Tuban</p>
                                    <p><i class="fas fa-envelope"></i> rsud@rsudkoesma.id </p>
                                    <p><i class="fa fa-phone"></i> (0356) 321010 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left">
                                    <h4 class="card-title">RSUD Blambangan, Banyuwangi
                                    </h4>
                                    <p>Jl. Letkol Istiqlah No.49, Singonegaran, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68415</p>
                                    {{--<p><i class="fas fa-envelope"></i> humas@rssoedono.jatimprov.go.id </p>--}}
                                    <p><i class="fa fa-phone"></i> (0333) 421118 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left ">
                                    <h4 class="card-title">RSUD Dr R. Sosodoro Djatikoesoemo Bojonegoro
                                    </h4>
                                    <p> Jl. Veteran No.36, Jambean, Sukorejo, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115</p>
                                    <p><i class="fas fa-envelope"></i> info@rssosodoro.com</p>
                                    <p><i class="fa fa-phone"></i> (0353) 3412133 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left">
                                    <h4 class="card-title">RSUD Dr. Iskak Kab. Tulungagung
                                    </h4>
                                    <p>Jl. Dr. Wahidin Sudiro Husodo, Kedung Taman, Kedungwaru, Kec. Kedungwaru, Kabupaten Tulungagung, Jawa Timur 66223</p>
                                    {{--<p><i class="fas fa-envelope"></i> humas@rssoedono.jatimprov.go.id </p>--}}
                                    <p><i class="fa fa-phone"></i> (0355) 322609 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left ">
                                    <h4 class="card-title">Rumah Sakit Umum Daerah Sidoarjo
                                    </h4>
                                    <p> Jl. Mojopahit No.667, Sidowayah, Celep, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61215</p>
                                    <p><i class="fas fa-envelope"></i> rsudsda@yahoo.co.id</p>
                                    <p><i class="fa fa-phone"></i> (031) 8961649 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left">
                                    <h4 class="card-title">Rumah Sakit Khusus Infeksi Universitas Airlangga
                                    </h4>
                                    <p>Kampus C Unair, Jl. Mulyorejo, Mulyorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60115</p>
                                    <p><i class="fas fa-envelope"></i> info@rski.unair.ac.id </p>
                                    <p><i class="fa fa-phone"></i> (031) 5961389</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left">
                                    <h4 class="card-title">RSUD Dr. Saiful Anwar Malang</h4>
                                    <p>Jl. Jaksa Agung Suprapto No.2, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111
                                    </p>
                                    {{--<p><i class="fas fa-envelope"></i> 	rslavalette.nsm@gmail.com </p>--}}
                                    <p><i class="fa fa-phone"></i> (0341) 362101 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-default container" style="padding-top: 20px;">
                    <div class="search-hosital-box"  style="background: #F5F5F7; border-radius: 30px; padding: 45px;">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Cari Rumah Sakit Rujukan lain Covid-19
                                    Jawa Timur disini !</h4>
                            </div>
                            <div class="col-md-2 offset-md-4">
                                <a target="_blank" href="https://brawijaya-jatim-covid19-ub-gis.hub.arcgis.com/app/7c8de017efc54a7a904bafec9d478218" class="btn btn-lg btn-block btn-secondary" style="border-radius: 30px; color: white;"> Cari </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="data-covid-malang-tab" class="tab-pane fade">
                <div class="container container-default" style="padding-top: 30px; padding-bottom: 20px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-no-border" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left" style="color: #333456;">
                                    <h2 class="card-title text-left">Rumah Sakit Rujukan Kota Malang
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left ">
                                    <h4 class="card-title">RSU Lavalette Malang</h4>
                                    <p>Jl. WR. Supratman No.10 Kota Malang 65111</p>
                                    <p><i class="fas fa-envelope"></i> 	rslavalette.nsm@gmail.com </p>
                                    <p><i class="fa fa-phone"></i> +62341 - 470805 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left">
                                    <h4 class="card-title">RSUD Dr. Saiful Anwar Malang</h4>
                                    <p>Jl. Jaksa Agung Suprapto No.2, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111
                                    </p>
                                    {{--<p><i class="fas fa-envelope"></i> 	rslavalette.nsm@gmail.com </p>--}}
                                    <p><i class="fa fa-phone"></i> (0341) 362101 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left ">
                                    <h4 class="card-title">Rumah Sakit Panti Waluya Sawahan
                                    </h4>
                                    <p>Jl. Nusakambangan No.56, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117</p>
                                    <p><i class="fas fa-envelope"></i> rkz.sawahan@pantiwaluya.org </p>
                                    <p><i class="fa fa-phone"></i> (0341) 366033 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left">
                                    <h4 class="card-title">RSI Aisyiyah Malang</h4>
                                    <p>Jl. Sulawesi No.16, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117</p>
                                    {{--<p><i class="fas fa-envelope"></i> sistemrsddrsoebandi@gmail.com </p>--}}
                                    <p><i class="fa fa-phone"></i> (0341) 326773 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-no-border address-card" style="margin: 0px auto; background: none;">
                                <div class="card-body text-left ">
                                    <h4 class="card-title">RST Dr. Soepraoen
                                    </h4>
                                    <p>JL. S. Supriyadi, No. 22, Sukun, Kec. Sukun, Kota Malang, Jawa Timur 65139</p>
                                    {{--<p><i class="fas fa-envelope"></i> rsud_pare@kedirikab.go.id </p>--}}
                                    <p><i class="fa fa-phone"></i> (0341) 325111 </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container-default container" style="padding-top: 20px;">
                    <div class="search-hosital-box"  style="background: #F5F5F7; border-radius: 30px; padding: 45px;">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Cari Rumah Sakit Rujukan lain Covid-19
                                    Jawa Timur disini !</h4>
                            </div>
                            <div class="col-md-2 offset-md-4">
                                <a target="_blank" href="https://brawijaya-jatim-covid19-ub-gis.hub.arcgis.com/app/6a497f461d2d415f88b0b1fefd76d60f" class="btn btn-lg btn-block btn-secondary" style="border-radius: 30px; color: white;"> Cari </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container-default">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="text-left">Pemantauan CCTV Kota Malang</h2>
                    <p>Anda Dapat Melakukan Pemantauan Situasi Kota
                        Malang Saat ini Dengan Klik Link Berikut
                    </p>
                    <a href="http://cctv.malangkota.go.id/cameras" target="_blank" class="btn btn-secondary btn-lg" style="width: 200px; border-radius: 30px; color: white;">Cari tahu yuk!</a>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="card card-no-border" style="
    margin-top: -90px;
    margin-right: -120px;
">
                        <img class="card-img-top" src="/assets/images/cctv.jpg" alt="Card image cap" style="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
