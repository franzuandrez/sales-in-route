<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
   
    public function index(Request $request){


        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'username' : $request->get('field');

        $Usuarios= DB::table('users')
        ->get();

        
       

        if($request->ajax()){
            return view('registers.Usuarios.ajax',compact('search','sort','sortField','Usuarios'));
        }else{
            return view('registers.Usuarios.index',compact('search','sort','sortField','Usuarios'));

        }

    }


    public function create(){



        return view('registers.Usuarios.create');
    }
}
    
    
