@extends('layouts.app')
@section('title', 'Homepage')

@section('header')
    @parent
    @yield('defaultheader', View::make('layouts.miniheader'))
@endsection


@section('content')
    <section>
        <div class="container container-default container-mini" style="margin-bottom: 0px; padding-top: 0px;">
            <h1 style="margin-bottom: 30px;" class="text-center"> Deteksi Diri Covid 19 </h1>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-6">
                    <div class="card card-no-border" style="width: 300px; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/selfassessment.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                        <div class="card-body text-center">
                            <h4 class="card-title"><a target="_blank" href="https://checkupcovid19.jatimprov.go.id/covid19/"> Self Assesment Jawa Timur </a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-no-border" style="width:300px; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/coronadetector.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                        <div class="card-body text-center">
                            <h4 class="card-title"><a target="_blank" href="https://coronadetektor.malangkota.go.id/"> Corona Detector
                                    Kota Malang </a> </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-6">
                    <div class="card card-no-border" style="width: 300px; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/penapisanub.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                        <div class="card-body text-center">
                            <h4 class="card-title"><a href=""> Penapisan Dosen
                                    dan Tendik UB </a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-no-border" style="width:300px; margin: 0px auto; background: none;">
                        <img class="card-img-top" src="/assets/images/penapisanmhs.png" alt="Card image cap" style="width: 200px;
    margin: 0px auto;">
                        <div class="card-body text-center">
                            <h4 class="card-title"><a href=""> Penapisan
                                    Mahasiswa UB </a> </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
