@extends('base')

@section('content')

    <div class="flex-wrapper">
        @include('index.blocks.banner')

        @include('index.blocks.about-hy-lok')

        @include('index.blocks.about-company')

        @include('index.blocks.catalogue')
        @include('index.blocks.catalogue-pdf')
        @include('index.blocks.certificate')
    </div>

@endsection
