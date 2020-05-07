@extends('layouts.app')
@section('title', 'Homepage')

@section('header')
    @parent
    @yield('defaultheader', View::make('layouts.miniheader'))
@endsection


@section('content')
    <section>
        <div class="container container-default container-mini" style="margin-bottom: 0px; padding-top: 0px;">
            <h1 style="margin-bottom: 15px;" class="text-center"> Pencegahan Covid-19 </h1>
            <h5 style="margin-bottom: 30px;" class="text-center">Ambil Langkah Untuk Melindungi Diri Anda dan Orang Lain </h5>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-6">
                    <div class="card card-no-border" style="width: 300px; margin: 0px auto; background: none;">
                        <img class="card-img-top" style="height: 300px;" src="/assets/images/handwash.png" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title">Cuci Tangan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-no-border" style="width:300px; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/distancing.png"  alt="Card image cap" style="height: 300px;">
                        <div class="card-body text-center">
                            <h4 class="card-title">Hindari Kontak Fisik </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-6">
                    <div class="card card-no-border" style="width: 300px; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/wfh.png" alt="Card image cap" style="height: 300px;">
                        <div class="card-body text-center">
                            <h4 class="card-title">Diam di Rumah
                                Jika Sakit</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-no-border" style="width:300px; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/coughetic.png" alt="Card image cap" style="height: 300px;">
                        <div class="card-body text-center">
                            <h4 class="card-title">Terapkan Etika
                                Batuk dan Bersin </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-6">
                    <div class="card card-no-border" style="width: 300px; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/masker.png" alt="Card image cap" style="height: 300px;">
                        <div class="card-body text-center">
                            <h4 class="card-title">Kenakan Masker
                                Jika Sakit</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-no-border" style="width:300px; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/cleaning.png" alt="Card image cap" style="height: 300px;">
                        <div class="card-body text-center">
                            <h4 class="card-title">Bersihkan dan
                                Disinfeksi</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
