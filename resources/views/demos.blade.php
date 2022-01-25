@extends('layouts.index')

@section('content')
    @include('components.loader')
    @include('components.alert')
    <header class="header" id="header">
        @include('components.navbar')
    </header>


    <div class="main">
        @include('components.demos')
    </div>

    @include('components.footer')
@endsection
