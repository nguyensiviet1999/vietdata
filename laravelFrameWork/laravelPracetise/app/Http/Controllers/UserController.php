<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // $name = $request->input('name');
        $name = $request->path();
        if ($request->is('testcontroller')) {
            echo 'đúng rồi';
        }
        echo $name;
        echo $request->url();

        $url_referer = $request->server('url_referer');
        echo '<br>'.$url_referer;
        echo '<br>'.$request->server('SERVER_ADDR');
        echo '<br>'.$request->header('User-Agent');;
    }
}
