<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   public function checkRole()
   {
        echo "<br>2. MainController@checkRole";
        echo "<br>Main Controller: checkRole function";
        echo '<br>Thực hiện sau khi qua bộ lọc Middleware và trước khi gửi http response';
   }
}
