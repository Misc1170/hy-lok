<div class="catalogue-pdf-container">
    <div class="catalogue-pdf-title">
        <p>КАТАЛОГИ HY-LOK</p>
    </div>
    <div class="catalog-pdf">
        @foreach($catalogs as $catalog)
            <div class="catalog-pdf-item">
                <a style="" href="{{$catalog['link']}}">
                    <img src="/images/pdfo.png" alt="">
                    <p>{{$catalog['name']}}</p>
                </a>
                <p class="weight-file">{{$catalog['weight']}} мб</p>
            </div>
        @endforeach
    </div>
</div>