<?php

namespace App\Http\Controllers;

use App\Permissions;
use Illuminate\Http\Request;

class PermissionController extends Controller
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

        $empres_has_user = DB::table('permission')
            ->get();


        if($request->ajax()){
            return view('registers.permissions.ajax',compact('search','sort','sortField','cat_cliente'));
        }else{
            return view('registers.permissions.index',compact('search','sort','sortField','cat_cliente'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create');
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
        $permission= new Permissions();
        $permission->name           = $request->get('name');
        $permission->isMenu         = $request->get('isMenu');
        $permission->id_Menu        = $request->get('id_Menu');
        $permission->order          = $request->get('order');
        $permission->display_name   = $request->get('display_name');
        $permission->icon           = $request->get('varchar');
        $permission->save();
        return redirect()
            ->route('register.permission.index')
            ->with('success','creado exitosamente');
        #  }
        #catch (\Exception  $e){
        ## return redirect()
        ##->route('register.cliente.index')
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

            $permission= Permissions::findOrFail($id);

            return view('registro.permission.edit',compact('empresa_has_user'));

        }catch (\Exception $ex){


            return redirect()
                ->route('permission.index')
                ->route('permission.index')
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
            $permission= Permissions::findOrFail($id);
            $permission->name           = $request->get('name');
            $permission->isMenu         = $request->get('isMenu');
            $permission->id_Menu        = $request->get('id_Menu');
            $permission->order          = $request->get('order');
            $permission->display_name   = $request->get('display_name');
            $permission->icon           = $request->get('varchar');
            $permission->update();

            return redirect()
                ->route('permission.index')
                ->with('success','  modificado exitosamente');

        } catch(\Exception $ex){

            return redirect()
                ->route('permission.index')
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
