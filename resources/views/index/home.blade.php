@extends('base')

@section('content')

    <div class="flex-wrapper">
        @include('index.blocks.banner')

        @include('index.blocks.about-hy-lok')

        @include('index.blocks.about-company')

        @include('index.blocks.catalogue')
        <div style="padding: 0 22em 0">

            <div style="display: grid">

                <div style="display: grid">
                    <span class="catalog-name-pdf">КАТАЛОГИ HY-LOK</span>
                    <div class="catalog-pdf">
                        {{--                        @foreach($catalog as $item)--}}
                        {{--                            <div class="pdf-catalog-item">--}}
                        {{--                                <a href="#">--}}
                        {{--                                    <img src="images/pdfo.png" alt="">--}}
                        {{--                                    <p>{{strip_tags($item)}}</p>--}}
                        {{--                                </a>--}}
                        {{--                            </div>--}}
                        {{--                        @endforeach--}}
                    </div>
                </div>
                <div class="sertificat">
                    <div class="sertificat-name">СЕРТИФИКАТЫ</div>
                    <div class="sertificat-pic sertificat-pic1"></div>
                    <div class="sertificat-pic sertificat-pic2"></div>
                    <div class="sertificat-pic sertificat-pic3"></div>
                    <div class="sertificat-pic sertificat-pic4"></div>
                </div>
            </div>
        </div>

@endsection
