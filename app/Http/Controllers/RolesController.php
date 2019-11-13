<?php

namespace App\Http\Controllers;


use App\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
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

        $roles = Roles::get();

        if($request->ajax()){
            return view('registers.roles.ajax',compact('search','sort','sortField','roles'));
        }else{
            return view('registers.roles.index',compact('search','sort','sortField','roles'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        try{
        $roles = new Roles();
        $roles->name                = $request->get('name');
        $roles->descripcion         = $request->get('descripcion');
        $roles->created_by           = $request->get('created_by');
        $roles->save();
        return redirect()
            ->route('Rol.Index')
            ->with('success','creado exitosamente');
         }
        catch (\Exception  $e){
         return redirect()
        ->route('Rol.Index')
          ->withErrors(['Algo salio mal, por favor vuelva a intentarlo más tarde']);
        }
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

            $roles= Roles::findOrFail($id);


            return view('registers.roles.edit',compact('roles'));

        }catch (\Exception $ex){


            return redirect()
                ->route('roles.index')
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
            $roles                  = Roles::findOrFail($id);
            $roles->name            = $request->get('name');
            $roles->descripcion     = $request->get('descripcion');
            $roles->created_by       = $request->get('created_by');
            $roles->update();

            return redirect()
                ->route('Rol.Index')
                ->with('success','  modificado exitosamente');

        } catch(\Exception $ex){

            return redirect()
                ->route('Rol.Index')
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
