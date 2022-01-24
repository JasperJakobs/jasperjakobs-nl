@extends('layouts.index')

@section('content')
    @include('components.loader')
    @include('components.header')

    <div class="main">
        @include('components.home')
        @include('components.about')
        @include('components.skills')
        @include('components.contact')
    </div>

    @include('components.footer')
@endsection
