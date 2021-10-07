<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index(){
        echo '<h1> Fluent Strings </h1>';

        $slice =Str::of('welcome to my YouTube Channel')->after('welcome to');
        echo $slice .'<br>';

        $slice2 =Str::of('App\Http\Controllers\Mohammed')->afterLast('\\');
        echo $slice2 .'<br>';

        $string =Str::of('Hello')->append('World !');
        echo $string .'<br>';

        $result =Str::of('Laravel 8')->lower();
        echo $result .'<br>';

        $replaced =Str::of('Laravel 7.0')->replace('7.0','9 .0');
        echo $replaced .'<br>';

        $converted =Str::of('this is title')->title();
        echo $converted .'<br>';

        $slug =Str::of('Laravel 8 Framework')->slug('_');
        echo $slug .'<br>';

        $str =Str::of('Laravel Framework')->substr(0,18);
        echo $str .'<br>';

        $str2 =Str::of('/Laravel8/')->trim('*');
        echo $str2 .'<br>';

        $str3 =Str::of('ahmed')->upper();
        echo $str3 .'<br>';
    }
}
