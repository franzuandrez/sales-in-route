<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaCliente;
use Illuminate\Support\Facades\DB;

class CategoriaClientesController extends Controller
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

        $cat_cliente = DB::table('categoria_clientes')
            ->get();

        if($request->ajax()){
            return view('registers.categoria_clientes.ajax',compact('search','sort','sortField','cat_cliente'));
        }else{
            return view('registers.categoria_clientes.index',compact('search','sort','sortField','cat_cliente'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.categoria_clientes.create');
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
        $cat_cliente= new CategoriaCliente();
        $cat_cliente->descripcion   = $request->get('descripcion');
        $cat_cliente->created_by    = $request->get('created_by');
        $cat_cliente->save();
        return redirect()
            ->route('Categoria_Cliente.Index')
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

            $cat_clientes = CategoriaCliente::findOrFail($id);
            return view('registers.categoria_clientes.edit',compact('cat_clientes'));


        }catch (\Exception $ex){


            return redirect()
                ->route('Categoria_Cliente.Index')
                ->withErrors(['categoria cliente no encontrada']);

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

            $cat_cliente = CategoriaCliente::findOrFail($id);
            $cat_cliente->descripcion   = $request->get('descripcion');
            $cat_cliente->created_by    = $request->get('created_by');
            $cat_cliente->update();


            return redirect()
            ->route('Categoria_Cliente.Index')
            ->with('success','categoria  modificada exitosamente');

        } catch(\Exception $ex){
            return redirect()
                ->route('Categoria_Clientes.Index')
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
