<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProveedorController extends Controller
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

        $Proveedores = DB::table('proveedores')
            ->get();


        if($request->ajax()){
            return view('registers.proveedores.index',compact('search','sort','sortField','Proveedores'));
        }else{
            return view('registers.proveedores.index',compact('search','sort','sortField','Proveedores'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.proveedores.create');
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
        $proveedor = new Proveedor();
        $proveedor->razon_social                =   $request->get('razon_social');
        $proveedor->nit                         =   $request->get('nit');
        $proveedor->direccion_planta            =   $request->get('direccion_planta');



        $proveedor->save();
        return redirect()
            ->route('Proveedor.Index')
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

            $proveedores= Proveedor::findOrFail($id);

            return view('registers.proveedores.edit',compact('proveedores'));

        }catch (\Exception $ex){


            return redirect()
                ->route('Proveedor.Index')

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
            $proveedor= Proveedor::findOrFail($id);
            $proveedor->razon_social                =   $request->get('razon_social');
            $proveedor->nit                         =   $request->get('nit');
            $proveedor->direccion_planta            =   $request->get('direccion_planta');
            $proveedor->save();

            return redirect()
                ->route('Proveedor.Index')
                ->with('success','  modificado exitosamente');

        } catch(\Exception $ex){

            return redirect()
                ->route('Proveedor.Index')
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
