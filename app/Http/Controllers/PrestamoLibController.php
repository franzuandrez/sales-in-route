<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PrestamoLibController extends Controller
{
    public function index(Request $request){


        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'username' : $request->get('field');

        $PrestamosLibros= DB::table('libros')
        ->get();

        
       

        if($request->ajax()){
            return view('registers.PrestramosLibros.ajax',compact('search','sort','sortField','Prestamos'));
        }else{
            return view('registers.PrestamosLibros.index',compact('search','sort','sortField','PrestamosLibros'));

        }

        

    }
    

    public function create(){



        return view('registers.Libros.create');
    }
}



