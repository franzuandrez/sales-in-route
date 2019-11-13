<?php

namespace App\Http\Controllers;

use App\Presentaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresentacionesController extends Controller
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

        $presentaciones = Presentaciones::get();


        if($request->ajax()){
            return view('registers.presentaciones.ajax',compact('search','sort','sortField','presentaciones'));
        }else{
            return view('registers.presentaciones.index',compact('search','sort','sortField','presentaciones'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.presentaciones.create');
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
        $presentaciones = new Presentaciones();
        $presentaciones->descripcion    = $request->get('descripcion');
        $presentaciones->created_by     =   $request->get('created_by');


        $presentaciones->save();
        return redirect()
            ->route('Presentacion.Index')
            ->with('success','Presentacion  creado exitosamente');
        #  }
        #catch (\Exception  $e){
        ## return redirect()
        ##->route('register.pais.index')
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

            $presentaciones=   Presentaciones::findOrFail($id);

            return view('registers.presentaciones.edit',compact('presentaciones'));

        }catch (\Exception $ex){

            return redirect()
                ->route('Presentacion.Index')
                ->withErrors([' Presentaciones no encontrada']);

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
            $presentaciones             = Presentaciones::findOrFail($id);
            $presentaciones->descripcion    = $request->get('descripcion');
            $presentaciones->update();

            return redirect()
                ->route('Presentacion.Index')
                ->with('success','Presentacion modificada exitosamente');

        } catch(\Exception $ex){

            return redirect()
                ->route('Presentacion.index')
                ->withErrors(['Algo salio mal, por favor vuelva a intentarlo más tarde']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        try {
            $pais  = Pais::findOrFail($id);
            $pais->isActive = 0;
            $pais->update();
            return redirect()
                ->route('pais.index')
                ->with('success','Pais dado de baja exitosamente');
        } catch (\Exception $e) {
            return redirect()
                ->route('pais.index')
                ->withErrors(['Algo salio mal, por favor vuelva a intentarlo más tarde']);
        }



    }
*/

}
