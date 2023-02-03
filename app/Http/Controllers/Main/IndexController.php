<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        /**
         * @var string[]|array $catalogs Ссылки на файлы каталогов
         */
        $catalogs = [
            'Каталог фитингов для труб Hy-Lok' => "https://fluid-line.ru/pdf/new/fitting_new.pdf",
            'Каталог фитингов на высокое давление Hy-Lok' => "https://fluid-line.ru/products/hiflux/high_pressure_fitting.pdf",
            'Каталог фитингов для чистых сред ZCR Hy-Lok' => "https://fluid-line.ru/assets/files/pdf/new/clean_new.pdf",
            'Каталог шаровых кранов Hy-Lok' => "https://fluid-line.ru/assets/files/pdf/new/ball_all.pdf",
            'Каталог игольчатых вентилей Hy-Lok' => "https://fluid-line.ru/assets/files/pdf/new/needle_valve-all.pdf",
            'Каталог обратных клапанов Hy-Lok' => "https://fluid-line.ru/assets/files/pdf/new/check_valve_all.pdf",
            'Каталог фильтров Hy-Lok' => "https://fluid-line.ru/assets/files/pdf/new/filter_all.pdf",
            'Каталог предохранительных клапанов Hy-Lok' => "https://fluid-line.ru/assets/files/pdf/new/rv_new.pdf",
            'Каталог мембранных клапанов Hy-Lok' => "https://fluid-line.ru/assets/files/pdf/new/membran_all.pdf",
            'Каталог сильфонных клапанов' => "https://fluid-line.ru/assets/files/pdf/new/silfon_all.pdf",
            'Каталог инструментальных манифольдов Hy-Lok' => "https://fluid-line.ru/pdf/manifolds-new.pdf",
            'Каталог технологических манифольдов Hy-Lok' => "https://fluid-line.ru/assets/docs/manifold_technolog_ru.pdf",
        ];

        return view('index.home', compact('catalogs'));
    }
}
