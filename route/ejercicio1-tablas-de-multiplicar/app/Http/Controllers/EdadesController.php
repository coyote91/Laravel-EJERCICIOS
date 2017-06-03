<?php

namespace ejercicio1\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EdadesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



   public function edades($age = 20)
   {

     return "Mi edad es  " . $age;

   }

   public function edadesdos($age, $coment)
   {

     return "Mi edad es  " . $age . " y ". $coment;

   }

}
