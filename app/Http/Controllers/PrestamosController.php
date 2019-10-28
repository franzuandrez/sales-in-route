<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PrestamosController extends Controller
{
    public function index(Request $request){


        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'username' : $request->get('field');

        $Prestamos= DB::table('prestamos')
        ->get();

        
       

        if($request->ajax()){
            return view('registers.Prestramos.ajax',compact('search','sort','sortField','Prestamos'));
        }else{
            return view('registers.Prestamos.index',compact('search','sort','sortField','Prestamos'));

        }

        

    }
    

    public function create(){



        return view('registers.Prestamos.create');
    }
}

