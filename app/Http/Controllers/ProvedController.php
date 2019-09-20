<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProvedController extends Controller
{
    
    public function index(Request $request){


        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'username' : $request->get('field');

        $Proveedores= DB::table('proveedores')
        ->get();

        
       

        if($request->ajax()){
            return view('registers.Proveedores.ajax',compact('search','sort','sortField','Proveedores'));
        }else{
            return view('registers.Proveedores.index',compact('search','sort','sortField','Proveedores'));

        }

    }


    public function create(){



        return view('registers.Proveedores.create');
    }
}
    
    

