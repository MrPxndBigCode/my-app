<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function blogs()
    {
        $blogs=[
            ['title' => 'บทความที่1','content'=> 'เนื้อหาบทความที่1','status' => true],
            ['title' => 'บทความที่2','content'=> 'เนื้อหาบทความที่2','status' => false],
            ['title' => 'บทความที่3','content'=> 'เนื้อหาบทความที่3','status' => true],
            ['title' => 'บทความที่4','content'=> 'เนื้อหาบทความที่4','status' => true]
        ];
        return view('blogs',compact('blogs'));
    }
    
    function abouts()
    {
            $name = "Tanakorn";
            $date = "6 ก.ค. 2569";
            return view("abouts" ,compact('name','date'));
    }

    function form(){

        return view("form");

    }

}
