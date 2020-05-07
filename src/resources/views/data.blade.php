@extends('layouts.app')
@section('title', 'Homepage')

@section('header')
    @parent
    @yield('defaultheader', View::make('layouts.miniheader'))
@endsection


@section('content')
    @yield('datacovid', View::make('partials.data'))
@endsection



