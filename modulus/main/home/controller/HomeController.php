<?php 

namespace modulus\main\home\controller;
use modulus\main\home\model\HomeModel;
use core\controller;
use pagination;

class HomeController extends controller
{
    public $home;
    
    public function __construct()
    {
        $this->home = new HomeModel();
        $this->page = new pagination();
    }

    public function index() {}

    public function mode($mode)
    {
        $this->home->mode($mode);
    }

    public function lang($lang)
    {
        $this->home->lang($lang);
    }
}
