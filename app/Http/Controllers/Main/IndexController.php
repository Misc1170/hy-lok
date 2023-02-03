<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke()
    {
        $catalog = [
            'Каталог фитингов для  труб Hy-Lok',
            'Каталог фитингов на высокое давление Hy-Lok',
            'Каталог фитингов для чистых сред ZCR Hy-Lok',
            'Каталог шаровых кранов Hy-Lok',
            'Каталог инструментальных манифольдов Hy-Lok',
            'Каталог технологических манифольдов Hy-Lok',
            'Каталог сильфонных клапанов',
            'Каталог мембранных клапанов Hy-Lok',
            'Каталог фитингов для чистых сред ZCR Hy-Lok',
            'Каталог клапанов Hy-Lok',

        ];
        return view('main.index',compact('catalog'));
    }
}
