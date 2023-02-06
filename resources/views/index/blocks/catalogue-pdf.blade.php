<div class="catalogue-pdf-container">
    <div class="catalogue-pdf-title">
        <p>КАТАЛОГИ HY-LOK</p>
    </div>
    <div class="catalog-pdf">
        @foreach($catalogs as $title=>$link)
            <div class="catalog-pdf-item">
                <a style="" href="{{$link}}">
                    <img src="/images/pdfo.png" alt="">
                    <p>{{$title}}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>