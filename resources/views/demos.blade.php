@extends('layouts.index')

@section('content')
    @include('components.loader')
    @include('components.header')

    <div class="main">
        @include('components.demos')
    </div>

    @include('components.footer')
@endsection
