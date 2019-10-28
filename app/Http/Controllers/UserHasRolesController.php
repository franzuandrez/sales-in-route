<?php

namespace App\Http\Controllers;

use App\Unidades;
use App\UserHasRoles;
use Illuminate\Http\Request;

class UserHasRolesController extends Controller
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

        $unidades = DB::table('unidades')
            ->get();


        if($request->ajax()){
            return view('registers.unidades.ajax',compact('search','sort','sortField','unidades'));
        }else{
            return view('registers.unidades.index',compact('search','sort','sortField','unidades'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.unidades.create');
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
        $unidades = new Unidades();
        $unidades->descrpcion       = $request->get('descripcion');
        $unidades->created_by       = $request->get('created_by');

        $unidades->save();
        return redirect()
            ->route('Unidad.Index')
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

            $unidades = Unidades::OrFail($id);

            return view('registers.unidades.edit',compact('unidades'));

        }catch (\Exception $ex){


            return redirect()
                ->route('Unidades.index')
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
            $unidades               = Unidades::findOrFail($id);
            $unidades->descrpcion       = $request->get('descripcion');
            $unidades->created_by       = $request->get('created_by');
            $unidades->update();

            return redirect()
                ->route('Unidades.Index')
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
