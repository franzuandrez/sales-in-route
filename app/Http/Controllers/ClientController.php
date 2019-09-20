<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClientController extends Controller
{
    public function index(Request $request){


        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'username' : $request->get('field');

        $Clientes = DB::table('clientes')
        ->get();

        
       

        if($request->ajax()){
            return view('registers.Clientes.ajax',compact('search','sort','sortField','Clientes'));
        }else{
            return view('registers.Clientes.index',compact('search','sort','sortField','Clientes'));

        }

    }


    public function create(){



        return view('registers.Clientes.create');
    }
}
