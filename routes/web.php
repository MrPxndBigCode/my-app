<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("index");
});

Route::get('abouts', function () {
    $name = "Tanakorn";
    $date = "6 ก.ค. 2569";
    return view("abouts" ,compact('name','date'));
})->name("abouts");

Route::get('blogs', function () {
    $blogs=[
    ['title' => 'บทความที่1','content'=> 'เนื้อหาบทความที่1','status' => true],
    ['title' => 'บทความที่2','content'=> 'เนื้อหาบทความที่2','status' => true],
    ['title' => 'บทความที่3','content'=> 'เนื้อหาบทความที่3','status' => true],
];

    return view("blogs" , compact('blogs'));
})->name("blogs");

