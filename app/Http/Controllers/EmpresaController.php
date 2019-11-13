<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
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

        $empresa = Empresa::get();

        if($request->ajax()){
            return view('registers.empresa.ajax',compact('search','sort','sortField','empresa'));
        }else{
            return view('registers.empresa.index',compact('search','sort','sortField','empresa'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.empresa.create');
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
        $empresa = new Empresa();
        $empresa->id_empresa         = $request->get('id_empresa');
        $empresa->id_pais           = $request->get('id_pais');
        $empresa->descripcion       = $request->get('descripcion');
        $empresa->direccion_planta  = $request->get('direccion_planta');
        $empresa->save();
        return redirect()
            ->route('register.empresa.index')
            ->with('success','Empresa creada exitosamente');
        #  }
        #catch (\Exception  $e){
        ## return redirect()
        ##->route('register.empres.index')
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

            $empresas = Empresa::findOrFail($id);

            return view('registro.empresas.edit',compact('empresas'));

        }catch (\Exception $ex){


            return redirect()
                ->route('empresa.index')
                ->withErrors(['Empresa no encontrada']);

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
            $empresa  = Empresa::findOrFail($id);
            $empresa->id_empresa        = $request->get('id_empresa');
            $empresa->id_pais           = $request->get('id_pais');
            $empresa->descripcion       = $request->get('descripcion');
            $empresa->direccion_planta  = $request->get('direccion_planta');
            $empresa->update();

            return redirect()
                ->route('empresa.index')
                ->with('success','Empresa modificada exitosamente');

        } catch(\Exception $ex){

            return redirect()
                ->route('empresa.index')
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
             $empresa  = Empresa::findOrFail($id);
             $empresa->estado = 0;
             $empresa->update();
             return redirect()
                 ->route('empresa.index')
                 ->with('success','Empresa dada de baja exitosamente');
         } catch (\Exception $e) {
             return redirect()
                 ->route('empresa.index')
                 ->withErrors(['Algo salio mal, por favor vuelva a intentarlo más tarde']);
         }



     }

    */
}
