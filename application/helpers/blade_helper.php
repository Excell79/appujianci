<?php
//tes123

use Jenssegers\Blade\Blade;

function view($view, $data = [])
{
    $view = VIEWPATH;
    $cache = APPPATH . 'cache';
    $blade = new Blade ($views, $cache);

    echo $blade->make($view, $data)->render();
}