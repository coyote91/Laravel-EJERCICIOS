<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdadController extends Controller
{
    //



       public function edades($age = 20)
       {

         return "Mi edad es  " . $age;

       }

       public function edadesdos($age, $coment)
       {

         return "Mi edad es  " . $age . " y ". $coment;

       }

}
