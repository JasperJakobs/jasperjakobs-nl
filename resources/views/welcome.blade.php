@extends('layouts.index')

@section('content')
    @include('components.loader')
    @include('components.alert')
    <header class="header" id="header">
        @include('components.navbar')
    </header>


    <div class="main">
        @include('components.home')
        @include('components.about')
        @include('components.skills')
        @include('components.work')
{{--        @include('components.test')--}}
        @include('components.contact')
    </div>

    @include('components.footer')
@endsection
