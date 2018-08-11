<?php
/**
 * @Author: name
 * @Date:   2018-08-11 00:55:52
 * @Last Modified by:   name
 * @Last Modified time: 2018-08-11 01:02:39
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}