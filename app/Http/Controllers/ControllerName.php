<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ControllerName extends Controller
{
    public function MyController()
    {
        echo 'Hello Laravel';
    }
    public function control( $name)
    {
        echo "Hello ".$name ;
    }
    public function getURL(Request $request)
    {
        // return $request->path();
       // if($request->is('url'))
        //    echo 'Có url';
        //else 
         //   echo 'Không có url ';
    if ($request->isMethod('get'))
        echo "<h3>Phương thức get</h3>";
    else
        echo "<h3>Phương thức post</h3>";
    }
}
