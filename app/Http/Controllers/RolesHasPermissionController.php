<?php

namespace App\Http\Controllers;


use App\RolesHasPermission;
use Illuminate\Http\Request;

class RolesHasPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'username' : $request->get('field');

        $roles_permission = DB::table('roles_has_permissions')
            ->get();


        if($request->ajax()){
            return view('registers.roles_has_permissions.ajax',compact('search','sort','sortField','roles_permission'));
        }else{
            return view('registers.roles_has_permissions.index',compact('search','sort','sortField','roles_permission'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.roles_has_permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        #  try{
        $roles_permission= new RolesHasPermission();
        $roles_permission->id_rol          = $request->get('id_rol');
        $roles_permission->id_permission   =   $request->get('id_permission');
        $roles_permission->save();
        return redirect()
            ->route('Roles_Permissions.index')
            ->with('success','creado exitosamente');
        #  }
        #catch (\Exception  $e){
        ## return redirect()
        ##->route('roles.index')
        ##   ->withErrors(['Algo salio mal, por favor vuelva a intentarlo más tarde'.$e]);
        #}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        try{

            $roles_permission = Roles::findOrFail($id);

            return view('registers.roles_has_permissions.edit',compact('roles_permission'));

        }catch (\Exception $ex){


            return redirect()
                ->route('roles_permisions.index')
                ->withErrors(['no encontrada']);

        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $roles_permission                   = RolesHasPermission::findOrFail($id);
            $roles_permission->id_rol           = $request->get('id_rol');
            $roles_permission->id_permission    =   $request->get('id_permission');
            $roles_permission->save();
            $roles_permission->update();

            return redirect()
                ->route('RolesPermission.index')
                ->with('success','  modificado exitosamente');

        } catch(\Exception $ex){

            return redirect()
                ->route('RolesPermision.index')
                ->withErrors(['Algo salio mal, por favor vuelva a intentarlo más tarde']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function destroy($id)
     {
         try {
             $cliente  = Cliente::findOrFail($id);
             $cliente->estado = 0;
             $cliente->update();
             return redirect()
                 ->route('cliente.index')
                 ->with('success','Cliente dado de baja exitosamente');
         } catch (\Exception $e) {
             return redirect()
                 ->route('cliente.index')
                 ->withErrors(['Algo salio mal, por favor vuelva a intentarlo más tarde']);
         }



     }

    */
}
