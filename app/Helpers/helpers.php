<?php

function set_active($route)
{
    return Request::is($route) ? 'active' : '';
}

function set_title($title)
{
    return $title ? config('app.name'). ' | '.$title : config('app.name');
}