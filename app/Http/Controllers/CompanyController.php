<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
class CompanyController extends Controller
{
    //

    public function index(Request $request){


        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'username' : $request->get('field');

        $companies = DB::table('empresa')
        ->get();
       

        if($request->ajax()){
            return view('registers.companies.ajax',compact('search','sort','sortField','companies'));
        }else{
            return view('registers.companies.index',compact('search','sort','sortField','companies'));

        }

    }
}
