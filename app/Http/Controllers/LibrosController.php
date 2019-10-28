<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class LibrosController extends Controller
{
    public function index(Request $request){


        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'username' : $request->get('field');

        $Libro= DB::table('libros')
        ->get();

        
       

        if($request->ajax()){
            return view('registers.Libros.ajax',compact('search','sort','sortField','Libro'));
        }else{
            return view('registers.Libros.index',compact('search','sort','sortField','Libro'));

        }

        

    }
    

    public function create(){



        return view('registers.Libros.create');
    }
}



