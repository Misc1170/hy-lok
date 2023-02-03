@extends('layouts.main.layout')
@section('content')

    <header
        style="display: flex; flex-direction: row; justify-content: space-evenly; height: 60px; align-items: center;">
        <div class="header-logo">
            <a style="">
                <img style="width: inherit; height: inherit;" src="" alt="">
            </a>
        </div>
        <div class="header-items" style="display: inherit; flex-direction: row;">
            <a style="padding: 0 1em; text-decoration: none; color: black;"
               href="mailto:EMAIL@email.ru">EMAIL@email.ru</a>
            <a style="padding: 0 1em; text-decoration: none; color: black;" href="tel:+78888899999">8 (888)
                889-99-99</a>
        </div>
    </header>

    <div class="flex-wrapper">
        <div class="banner-with-text">
            <div class="text-on-banner">
                <h1>Чтобы Вы остались <br>довольны, мы создаем <br>ценность благодаря <br>
                    производительности, <br>ноу-хау и быстрому <br>обслуживанию
                </h1>
            </div>
        </div>
        <div class="text-under-banner" style="padding: 0 22em 0">
            <span class="text-under-banner-1">
                <h1>
                    HY-LOK
                </h1>
            </span>
            <span class="text-under-banner-2">
                <p>
                    Южно-корейская компания Hy-Lok – ведущий производитель приборов и устройств <br>для нефтегазовой отрасли в
                    мире. С момента своего основания в 1977 году компания <br>Hy-Lok упорно сохраняет лидирующие позиции в
                    производстве трубной <br>соединительной и запорной арматуры в мире.
                    <br>
                    Достигла высокого уровня удовлетворенности клиентов своим качеством, получив <br>международно
                    аккредитованные сертификаты, такие как ISO 9001, ISO / TS 16949: 2009, <br>ISO 14001, OHSAS 18001, ASME,
                    API, CE MARK, KEPIC и многие другие.
                </p>
            </span>
        </div>
        <div style="padding: 0 22em 0">
            <div class="about-comp">
                <div class="about-comp-text">
                    <span class="about-comp-head">О КОМПАНИИ</span>
                    <p>
                        С момента своего основания в 1977 году компания Hy-Lok неуклонно <br>прокладывает свой личный
                        путь,
                        сохраняя
                        при этом первые позиции по всему <br>миру в сфере систем управления и гидравлики. За счет своего
                        огромного
                        опыта, <br>корпорация Hy-Lok поставила на мировой рынок КИП системы трубопроводов, в <br>том
                        числе
                        различные
                        материалы для трубопроводов. Обладая практическим <br>опытом, компания Hy-Lok отлично
                        зарекомендовала
                        себя
                        как предприятие «под <br>ключ», начиная с основных технологий и систем управления жидкостями и
                        <br>заканчивая
                        сборками для установки во всех промышленных зонах мира. <br>Клиентам будет предоставлен большой
                        запас
                        знаний
                        о накопленных <br>технических знаниях. Принято считать, что современное общество - это <br>общество
                        информационных технологий. Как профессионал в сфере систем <br>управления, корпорация Hy-Lok
                        прикладывает
                        все свои усилия, для того, чтобы <br>давать своим клиентам передовые технологии и
                        высококачественные
                        услуги.
                        <br>Основываясь на стремлении к высочайшему качеству и обслуживанию, уделяя <br>первоочередное
                        внимание
                        удовлетворению потребностей клиентов и расширяя <br>свою деятельность по всему миру, Hy-Lok
                        воплощает
                        это в
                        жизнь.
                    </p>
                </div>
                <div class="about-comp-picture"></div>
            </div>
            <div style="display: grid">
                <span class="catalog-name">КАТАЛОГ ПРОДУКЦИИ HY-LOK</span>
                <div class="catalog">
                    <div class="catalog-item">
                        <a href="#">
                            <img src="images/ball.png" alt="">
                        </a>
                        <p class="head-name-catalog-item">КРАНЫ ШАРОВЫЕ </p>
                        <p class="describe-catalog-item">Назначение шаровых кранов Hy-Lok: - <br>Интрументальные - На
                            большое ДУ -
                            <br>Креогенные</p>
                        <a class="more-catalog-item" href="#">ПОДРОБНЕЕ</a>
                    </div>
                    <div class="catalog-item">
                        <a href="#">
                            <img src="images/fittingo.png" alt="">
                        </a>
                        <p class="head-name-catalog-item">ФИТИНГИ ДЛЯ ТРУБ</p>
                        <p class="describe-catalog-item">Назначение шаровых кранов Hy-Lok: - <br>Интрументальные - На
                            большое ДУ -
                            <br>Креогенные</p>
                        <a class="more-catalog-item" href="#">ПОДРОБНЕЕ</a>
                    </div>
                    <div class="catalog-item">
                        <a href="#">
                            <img src="images/membrano.png" alt="">
                        </a>
                        <p class="head-name-catalog-item">МЕМБРАННЫЕ</p>
                        <p class="describe-catalog-item">Назначение шаровых кранов Hy-Lok: - <br>Интрументальные - На
                            большое ДУ -
                            <br>Креогенные</p>
                        <a class="more-catalog-item" href="#">ПОДРОБНЕЕ</a>
                    </div>
                    <div class="catalog-item">
                        <a href="#">
                            <img src="images/valves_2.png" alt="">
                        </a>
                        <p class="head-name-catalog-item">КРАНЫ ШАРОВЫЕ <br>ИНТРУМЕНТАЛЬНЫЕ</p>
                        <p class="describe-catalog-item">Назначение шаровых кранов Hy-Lok: - <br>Интрументальные - На
                            большое ДУ -
                            <br>Креогенные</p>
                        <a class="more-catalog-item" href="#">ПОДРОБНЕЕ</a>
                    </div>
                    <div class="catalog-item">
                        <a href="#">
                            <img src="images/relefo.png" alt="">
                        </a>
                        <p class="head-name-catalog-item">ПРЕДОХРАНИТЕЛЬНЫЕ <br>КЛАПАНЫ</p>
                        <p class="describe-catalog-item">Назначение шаровых кранов Hy-Lok: - <br>Интрументальные - На
                            большое ДУ -
                            <br>Креогенные</p>
                        <a class="more-catalog-item" href="#">ПОДРОБНЕЕ</a>
                    </div>
                    <div class="catalog-item">
                        <a href="#">
                            <img src="images/checko.png" alt="">
                        </a>
                        <p class="head-name-catalog-item">ФИЛЬТРЫ МИКРОННЫЕ <br>ИНТРУМЕНТАЛЬНЫЕ</p>
                        <p class="describe-catalog-item">Назначение шаровых кранов Hy-Lok: - <br>Интрументальные - На
                            большое ДУ -
                            <br>Креогенные</p>
                        <a class="more-catalog-item" href="#">ПОДРОБНЕЕ</a>
                    </div>
                    <div class="catalog-item">
                        <a href="#">
                            <img src="images/dozirovka.png" alt="">
                        </a>
                        <p class="head-name-catalog-item">ДОЗИРОВОЧНЫЕ ВЕНТИЛИ</p>
                        <p class="describe-catalog-item">Назначение шаровых кранов Hy-Lok: - <br>Интрументальные - На
                            большое ДУ -
                            <br>Креогенные</p>
                        <a class="more-catalog-item" href="#">ПОДРОБНЕЕ</a>
                    </div>
                    <div class="catalog-item">
                        <a href="#">
                            <img src="images/manifoldo.png" alt="">
                        </a>
                        <p class="head-name-catalog-item">БОЛЬШЕ ПРОДУКЦИИ HY-LOK</p>
                        <a class="more-catalog-item" href="#">ПОДРОБНЕЕ</a>
                    </div>
                </div>
                <div style="display: grid">
                    <span class="catalog-name-pdf">КАТАЛОГИ HY-LOK</span>
                    <div class="catalog-pdf">
                        @foreach($catalog as $item)
                            <div class="pdf-catalog-item">
                                <a href="#">
                                    <img src="images/pdfo.png" alt="">
                                    <p>{{strip_tags($item)}}</p>
                                </a>
                            </div>
                        @endforeach
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
        <footer>
            <div class="footer-items">
                <a style="padding: 0 1em; text-decoration: none; color: white;"
                   href="mailto:EMAIL@email.ru">EMAIL@email.ru</a>
                <a style="padding: 0 1em; text-decoration: none; color: white;" href="tel:+78888899999">8 (888)
                    889-99-99</a>
            </div>
        </footer>
@endsection
