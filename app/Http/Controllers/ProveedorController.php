<?php

namespace App\Http\Controllers;

use App\Proveedor;
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

        $empres_has_user = DB::table('proveedor_has_productos')
            ->get();


        if($request->ajax()){
            return view('registers.preveedorhasproductos.ajax',compact('search','sort','sortField','cat_cliente'));
        }else{
            return view('registers.proveedorhasproductos.index',compact('search','sort','sortField','cat_cliente'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedorhasproductos.create');
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
        $proveedor_has_productos = new ProveedorHasProducto();
        $proveedor_has_productos->id_proveedor      =   $request->get('id_proveedor');
        $proveedor_has_productos->id_producto       =   $request->get('id_producto');
        $proveedor_has_productos->costo_compras     =   $request->get('costo_compras');


        $proveedor_has_productos->save();
        return redirect()
            ->route('porveedorhascompras.index')
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

            $proveedorhasproducto= ProveedorHasProducto::findOrFail($id);

            return view('proveedorhasproducto.edit',compact('proveedorhasproducto'));

        }catch (\Exception $ex){


            return redirect()
                ->route('proveedorhasproducto.index')
                ->route('proveedorhasproducto.index')
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
            $proveedor_has_productos= ProveedorHasProducto::findOrFail($id);
            $proveedor_has_productos->id_proveedor      =   $request->get('id_proveedor');
            $proveedor_has_productos->id_producto       =   $request->get('id_producto');
            $proveedor_has_productos->costo_compras     =   $request->get('costo_compras');
            $proveedor_has_productos->save();
            $proveedor_has_productos->update();

            return redirect()
                ->route('proveedorhasproducto.index')
                ->with('success','  modificado exitosamente');

        } catch(\Exception $ex){

            return redirect()
                ->route('proveedorhasproducto.index')
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
