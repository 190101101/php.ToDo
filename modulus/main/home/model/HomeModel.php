<?php 

namespace modulus\main\Home\model;
use core\model;
use library\cookie;

class HomeModel extends model
{
    public function mode($mode)
    {
        $mode == 1
            ? cookie::create('css_mode', 2)
            : cookie::create('css_mode', 1);
        $this->return->referer();
    }

    public function lang($lang)
    {
        $langs = [1, 2, 3, 4];

        in_array($lang, $langs) == TRUE ?: $this->return->referer();

        cookie::create('lang', (int) $lang);
        $this->return->referer();
    }
}

