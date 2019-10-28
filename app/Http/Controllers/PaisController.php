<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
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

        $cliente = DB::table('pais')
            ->get();


        if($request->ajax()){
            return view('registers.pais.ajax',compact('search','sort','sortField','cliente'));
        }else{
            return view('registers.pais.index',compact('search','sort','sortField','cliente'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.pais.create');
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
        $pais = new Pais();
        $pais->descripcion      = $request->get('descripcion');
        $pais->codigo_postal    = $request->get('codigo_postal');
        $pais->isActive         = $request->get('isActive');

        $pais->save();
        return redirect()
            ->route('register.pais.index')
            ->with('success','Pais creado exitosamente');
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

            $pais   =   Pais::findOrFail($id);

            return view('registro.pais.edit',compact('pais'));

        }catch (\Exception $ex){


            return redirect()
                ->route('pais.index')
                ->withErrors(['Pais no encontrado']);

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
            $pais = Pais::findOrFail($id);
            $pais->descripcion      = $request->get('descripcion');
            $pais->codigo_postal    = $request->get('codigo_postal');
            $pais->isActive         = $request->get('isActive');
            $pais->update();

            return redirect()
                ->route('pais.index')
                ->with('success','Pais modificado exitosamente');

        } catch(\Exception $ex){

            return redirect()
                ->route('pais.index')
                ->withErrors(['Algo salio mal, por favor vuelva a intentarlo más tarde']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
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


}
