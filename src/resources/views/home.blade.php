@extends('layouts.app')
@section('title', 'Homepage')

@section('header')
    @parent
    @yield('defaultheader', View::make('layouts.defaultheader'))
@endsection


@section('content')
    @yield('datacovid', View::make('partials.data'))

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
        <div class="container container-default d-none d-sm-block">
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

        <div class="container container-default d-block d-sm-none">
            <h3 class="text-center"> Situs resmi Pemerintah terkait Covid-19 </h3>
            <div class="row">
                <div class="col-4">
                    <div class="image-icon-wrapper" style="
    width: 105px;
    margin: 0px auto;
">
                        <a href=""><img src="/assets/images/ri.png"></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="image-icon-wrapper" style="
    width: 87px;
    margin: 0px auto;
">
                        <a href=""><img src="/assets/images/jatim.png"></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="image-icon-wrapper" style="
    width: 107px;
    margin: 0px auto;
">
                        <a href=""><img src="/assets/images/malang.png"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <div class="col-6">
                            <div class="image-icon-wrapper" style="
    width: 120px;
">
                                <a href=""><img src="/assets/images/kemenkes.png"></a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="image-icon-wrapper" style="
    width: 63px;
">
                                <a href=""><img src="/assets/images/bnpb.png"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
