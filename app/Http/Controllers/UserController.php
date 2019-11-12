<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //


    public function index(Request $request)
    {


        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'username' : $request->get('field');


        $users = User::where('username', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%')
            ->orderBy($sortField, $sort)
            ->get();


        if ($request->ajax()) {

            return view('sistema.users.ajax', compact('users', 'search', 'sort', 'sortField'));
        } else {
            return view('sistema.users.index', compact('users', 'search', 'sort', 'sortField'));

        }


    }

    public function create(){


        return view('view');
    }


}
