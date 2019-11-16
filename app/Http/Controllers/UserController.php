<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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

    public function create()
    {


        $roles = Role::all();

        return view('sistema.users.create', compact('roles'));
    }


    public function store(Request $request)
    {


        try {

            $user = new User();
            $user->nombre = $request->nombre;
            $user->username = $request->name;
            $user->apellido = $request->apellido;
            $user->email = $request->email;
            $user->isActive = 1;
            $user->password = Hash::make($request->password);
            $user->save();

            $user->assignRole($request->input('id_rol'));


            return redirect()
                ->route('sistema.users.index')
                ->with('success', 'Usuario creado correctamente');

        } catch (\Exception $e) {


            return redirect()
                ->withInput()->withErrors(['error' => 'algo salio mal']);
        }


    }


    public function edit($id)
    {

        $user = User::findOrFail($id);
        $roles = Role::get();
        $userRole = $user->roles->pluck('id');

        return view('sistema.users.edit', compact('user', 'roles', 'userRole'));

    }


    public function update(Request $request , $id){



        $user = User::findOrFail($id);
        $user->nombre = $request->nombre;
        $user->username = $request->name;
        $user->apellido = $request->apellido;
        $user->email = $request->email;
        $user->syncRoles($request->input('id_rol'));
        $user->update();

        return redirect()->route('sistema.users.index')
            ->with('success', 'Usuario actualizado correctamente');

    }


}
