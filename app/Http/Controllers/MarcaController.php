<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarcaController extends Controller
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

        $marcas = DB::table('marca')
            ->get();


        if($request->ajax()){
            return view('registers.marcas.ajax',compact('search','sort','sortField','marcas'));
        }else{
            return view('registers.marcas.index',compact('search','sort','sortField','marcas'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.marcas.create');
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
        $marca = new Marca();
        $marca->id_marca        = $request->get('id_marca');
        $marca->descripcion     = $request->get('descripcion');
        $marca->created_by      = $request->get('created_by');
        $marca->save();
        return redirect()
            ->route('Marca.Index')
            ->with('success','Marca creada exitosamente');
        #  }
        #catch (\Exception  $e){
        ## return redirect()
        ##->route('register.marca.index')
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

            $marcas = Marca::findOrFail($id);

            return view('registers.marcas.edit',compact('marcas'));

        }catch (\Exception $ex){


            return redirect()
                ->route('Marca.Index')
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
            $marca  = Marca::findOrFail($id);
            $marca->descripcion = $request->get('descripcion');
            $marca->created_by= $request->get('created_by');
            $marca->update();

            return redirect()
                ->route('Marca.Index')
                ->with('success','Empresa modificada exitosamente');

        } catch(\Exception $ex){

            return redirect()
                ->route('Marca.Index')
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
