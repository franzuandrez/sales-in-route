<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index(Request $request){


        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'username' : $request->get('field');

        $Productos= DB::table('productos')
        ->get();

        
       

        if($request->ajax()){
            return view('registers.Productos.ajax',compact('search','sort','sortField','Productos'));
        }else{
            return view('registers.Productos.index',compact('search','sort','sortField','Productos'));

        }

    }


    public function create(){



        return view('registers.Productos.create');
    }
}
    
    

