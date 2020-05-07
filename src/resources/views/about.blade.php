@extends('layouts.app')
@section('title', 'Homepage')

@section('header')
    @parent
    @yield('defaultheader', View::make('layouts.miniheader'))
@endsection


@section('content')
    <section style="margin-bottom: 60px;">
        <div class="container container-default container-mini">
            <div class="row">
                <div class="col-md-8">
                    <div class="banner-caption">
                        <h1>Apa itu COVID-19 ?</h1>
                        <p style="font-size: 18px;">COVID-19 adalah nama penyakit yang disebabkan oleh virus corona, merupakan jenis penyakit baru yang ditemukan pada akhir tahun 2019.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="default-image-wrapper">
                        <img src="/assets/images/covid19.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background: #f5f5f7;">
        <div class="container container-default">
            <h2 class="text-center"> Kenali Gejala Covid-19 </h2>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-4">
                    <div class="card card-no-border" style="width: 18rem; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/cough.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Batuk Kering</h5>
                        </div>
                    </div>
                </div><div class="col-md-4">
                    <div class="card card-no-border" style="width: 18rem; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/fever.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Demam ≥ 38°C</h5>
                        </div>
                    </div>
                </div><div class="col-md-4">
                    <div class="card card-no-border" style="width: 18rem; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/sesak.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sesak Napas</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <p class="text-center" style="margin-bottom: 30px;">
                        Sebagian besar kasus yang terjadi melaporkan bahwa tanda dan gejala klinis yang muncul adalah demam, dengan beberapa kasus mengalami kesulitan bernapas serta hasil rontgen menunjukkan infiltrat pneumonia luas di kedua paru
                    </p>
                    <p class="text-center">Sumber - Kementerian Kesehatan Republik Indonesia</p>
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container container-default">
            <div class="row">
                <div class="col-md-4">
                    <div class="banner-caption text-left d-none d-sm-none d-md-block" style="padding-top: 60px; padding-bottom: 60px; border-right: 1px solid #000000;margin-top: 90px;">
                        <h2 class="text-left">Apakah Kita Terpapar?</h2>
                    </div>

                    <div class="banner-caption text-center d-block d-sm-block d-md-none" style="padding-top: 30px; padding-bottom: 30px;">
                        <h2 class="text-center">Apakah Kita Terpapar?</h2>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="caption-text text-center">
                        <p>Saat ini vaksin untuk mencegah infeksi COVID-19 sedang dalam tahap pengembangan/uji coba. Cara terbaik untuk mencegah penyakit adalah menghindari terkena virus ini</p>
                        <h3>Bentuk Penyebaran Covid-19</h3>
                        <div class="row">
                            <div class="col-md-4 offset-md-2">
                                <div class="card card-no-border" style="margin: 0px auto; background: none;">
                                    <img class="card-img-top" src="/assets/images/droplet.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                                    <div class="card-body text-center">
                                        {{--<h5 class="card-title">Melalui Droplets</h5>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-no-border" style="margin: 0px auto; background: none;">
                                    <img class="card-img-top" src="/assets/images/nodroplet.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                                    <div class="card-body text-center">
                                        {{--<h5 class="card-title">Tanpa melalui--}}
                                            {{--droplets</h5>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container-default container-mini" style="background: #f5f5f7;
    border-radius: 38px; margin-bottom: 100px;">
            <h2 style="margin-bottom: 30px;"> Apa Yang Harus Dilakukan
                Jika Kita Terpapar? </h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-todo">
                        <div class="row">
                            <div class="col-md-2"><h1>1</h1></div>
                            <div class="col-md-10">
                                <div class="card card-no-border" style="margin: 0px auto; background: none;">
                                    <img class="card-img-top" src="/assets/images/stayhome2.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Tetap di Rumah</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel-todo">
                        <div class="row">
                            <div class="col-md-2"><h1>2</h1></div>
                            <div class="col-md-10">
                                <div class="card card-no-border" style="margin: 0px auto; background: none;">
                                    <img class="card-img-top" src="/assets/images/calldoctor2.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Buat janji sebelum
                                            ke dokter</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-todo">
                        <div class="row">
                            <div class="col-md-2">
                                <h1>3</h1>
                            </div>
                            <div class="col-md-10">
                                <div class="card card-no-border" style="margin: 0px auto; background: none;">
                                    <img class="card-img-top" src="/assets/images/hospital2.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Pergi ke rumah sakit
                                            rujukan</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel-todo">
                        <div class="row">
                            <div class="col-md-2">
                                <h1>4</h1>
                            </div>
                            <div class="col-md-10">
                                <div class="card card-no-border" style="margin: 0px auto; background: none;">
                                    <img class="card-img-top" src="/assets/images/callcenter.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Jika mengalami kesulitan
                                            hubungi Hotline COVID-19
                                            031 843-0313</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
