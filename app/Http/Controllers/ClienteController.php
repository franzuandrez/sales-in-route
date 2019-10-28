<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class ClienteController extends Controller
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

        $cliente = DB::table('clientes')
            ->get();


        if($request->ajax()){
            return view('registers.companies.ajax',compact('search','sort','sortField','cliente'));
        }else{
            return view('registers.companies.index',compact('search','sort','sortField','cliente'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.clientes.create');
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
            $cliente = new Cliente();
            $cliente->nit               =$request->get('nit');
            $cliente->razon_social      =$request->get('razon_social');
            $cliente->id_tipo_cliente   =$request->get('id_tipo_cliente');
            $cliente->direccion         =$request->get('direccion');
            $cliente->longitud          =$request->get('longitud');
            $cliente->latitud           =$request->get('latitud');
            $cliente->id_departamento   =$request->get('id_departamento');
            $cliente->id_municipio      =$request->get('id_municipio');
            $cliente->id_pais           =$request->get('id_pais');
            $cliente->save();
            return redirect()
                ->route('register.clientes.index')
                ->with('success','Proveedor creado exitosamente');
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

            $clientes = Cliente::findOrFail($id);

            return view('registro.clientes.edit',compact('clientes'));

        }catch (\Exception $ex){


            return redirect()
                ->route('clientes.index')
                ->withErrors(['Cliente no encontrado']);

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
            $cliente = Cliente::findOrFail($id);
            $cliente->nit               =$request->get('nit');
            $cliente->razon_social      =$request->get('razon_social');
            $cliente->id_tipo_cliente   =$request->get('id_tipo_cliente');
            $cliente->direccion         =$request->get('direccion');
            $cliente->longitud          =$request->get('longitud');
            $cliente->latitud           =$request->get('latitud');
            $cliente->id_departamento   =$request->get('id_departamento');
            $cliente->id_municipio      =$request->get('id_municipio');
            $cliente->id_pais           =$request->get('id_pais');
            $cliente->update();

            return redirect()
                ->route('proveedores.index')
                ->with('success','Proveedor modificado exitosamente');

        } catch(\Exception $ex){

            return redirect()
                ->route('proveedores.index')
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
