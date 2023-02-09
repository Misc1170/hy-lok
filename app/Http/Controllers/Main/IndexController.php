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
            [
                'name' => 'Каталог фитингов для труб Hy-Lok',
                'link' => "https://fluid-line.ru/pdf/new/fitting_new.pdf",
                'weight' => '',
            ],
            [
                'name' => 'Каталог фитингов на высокое давление Hy-Lok',
                'link' => "https://fluid-line.ru/products/hiflux/high_pressure_fitting.pdf",
                'weight' => '',
            ],
            [
                'name' => 'Каталог фитингов для чистых сред ZCR Hy-Lok',
                'link' => "https://fluid-line.ru/assets/files/pdf/new/clean_new.pdf",
                'weight' => '',
            ],
            [
                'name' => 'Каталог шаровых кранов Hy-Lok',
                'link' => "https://fluid-line.ru/assets/files/pdf/new/ball_all.pdf",
                'weight' => '',
            ],
            [
                'name' => 'Каталог игольчатых вентилей Hy-Lok',
                'link' => "https://fluid-line.ru/assets/files/pdf/new/needle_valve-all.pdf",
                'weight' => '',
            ],
            [
                'name' => 'Каталог обратных клапанов Hy-Lok',
                'link' => "https://fluid-line.ru/assets/files/pdf/new/check_valve_all.pdf",
                'weight' => '',
            ],
            [
                'name' => 'Каталог фильтров Hy-Lok',
                'link' => "https://fluid-line.ru/assets/files/pdf/new/filter_all.pdf",
                'weight' => '',
            ],
            [
                'name' => "Каталог предохра\u{00AD}нительных клапанов Hy-Lok",
                'link' => "https://fluid-line.ru/assets/files/pdf/new/rv_new.pdf",
                'weight' => '',
            ],
            [
                'name' => 'Каталог мембранных клапанов Hy-Lok',
                'link' => "https://fluid-line.ru/assets/files/pdf/new/membran_all.pdf",
                'weight' => '',
            ],
            [
                'name' => 'Каталог сильфонных клапанов',
                'link' => "https://fluid-line.ru/assets/files/pdf/new/silfon_all.pdf",
                'weight' => '',
            ],
            [
                'name' => "Каталог инструмен\u{00AD}тальных манифольдов Hy-Lok",
                'link' => "https://fluid-line.ru/pdf/manifolds-new.pdf",
                'weight' => '',
            ],
            [
                'name' => 'Каталог технологических манифольдов Hy-Lok',
                'link' => "https://fluid-line.ru/assets/docs/manifold_technolog_ru.pdf",
                'weight' => '',
            ],
        ];
        $i = 0;
        foreach ($catalogs as $catalog) {
            $url_headers = @get_headers($catalog['link']);
            if (!$url_headers || $url_headers[0] == 'HTTP/1.1 404 Not Found') {
                $exists = false;
            } else {
                $exists = true;
            }
            if ($exists) {
                $f = fopen($catalog['link'], 'r');
                $a = (strlen(stream_get_contents($f, -1))) / 1024;
                $catalogs[$i]['weight'] = number_format($a/1024,1,'.');
            } else {
                $catalogs[$i]['weight'] = '4.2';
            }
            $i++;
        }

        return view('index.home', compact('catalogs'));
    }
}
