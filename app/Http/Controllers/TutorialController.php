<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;

class TutorialController extends Controller
{
    /**
     * index para todos
     * store para guardar
     * update para actualizar
     * destroy para eliminar
     * show para mostrar uno
     * edit para mostrar formulario de edicion
     * **/

     public function store(Request $request){
         //saving data

         $request -> validate([
             'title' => 'required|min:3'
         ]);

         $tutorial = new Tutorial;
         $tutorial->title = $request->title;
         $tutorial->save();

         return redirect()->route('app');
         
     }
}
