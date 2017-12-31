<?php
/**
 * Created by PhpStorm.
 * User: kevingates
 * Date: 12/31/17
 * Time: 1:23 PM
 */

namespace App\Helpers;

use App;

class Menu
{
    public static function getLanguage()
    {
        if(App::getLocale() == 'en') {
            $response = '<a href="'.url('/lang/zh-cn').'" class="language" >中 / <span class=\'english\' style="float: right; color: #20FF00;">En</span></a>';
        } else if (App::getLocale() == 'zh-cn') {
            $response = '<a href="'.url('/lang/en').'" class="language" >En / <span class=\'english\' style="color: #20FF00;">中</span></a>';
        }
        return $response;
    }
}