<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;
class RolController extends Controller
{




    public function index(Request $request)
    {

        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'name' : $request->get('field');

        $roles = Role::where(function ($query) use ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%')
                ->orwhere('descripcion', 'LIKE', '%' . $search . '%');

        })->orderBy($sortField, $sort)
            ->paginate(20);




        if ($request->ajax()) {
            return view('sistema.roles.ajax', compact('sort', 'sortField', 'search', 'roles'));
        } else {
            return view('sistema.roles.index', compact('sort', 'sortField', 'search', 'roles'));
        }

    }


    public function create()
    {
        $menus = Permission::where('isMenu', '=', '1')
            ->orderBy('order', 'ASC')
            ->get();
        $opciones = Permission::where('isMenu', '!=', '1')
            ->get();



        return view('sistema.roles.create', compact('menus', 'opciones'));
    }

    public function store(RolRequest $request)
    {




        $role = Role::create([
            'name' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion')
        ]);


        $role->syncPermissions($request->get('permission'));

        return redirect()->route('sistema.roles.index')
            ->with('success', 'Rol creado exitosamente');

    }

    public function edit($id)
    {


        $role = Role::findOrFail($Uid);



        $menus = Permission::where('isMenu', '=', '1')
            ->orderBy('order', 'ASC')
            ->get();
        $opciones = Permission::where('isMenu', '!=', '1')
            ->get();


        $rolePermissions = DB::table("role_has_permissions")
            ->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('sistema.roles.edit',
            compact('role', 'menus', 'opciones', 'rolePermissions'));
    }

    public function update(Request $request ,$id){



        $role = Role::findOrFail(intval($id));
        $role->name = $request->input('nombre');
        $role->descripcion= $request->input('descripcion');
        $role->save();


        $role->syncPermissions($request->input('permission'));


        return redirect()->route('sistema.roles.index')
            ->with('success','Rol actualizado correctamente');

    }
}
