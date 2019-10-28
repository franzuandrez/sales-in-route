<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
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

        $productos = DB::table('productos')
            ->get();


        if($request->ajax()){
            return view('registers.productos.ajax',compact('search','sort','sortField','productos'));
        }else{
            return view('registers.productos.index',compact('search','sort','sortField','productos'));

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.productos.create');
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
        $producto = new Producto();
        $producto->descripcion  =   $request->get('descripcion');
        $producto->color        =   $request->get('color');
        $producto->id_presentacion  = $request->get('id_presentacion');
        $producto->id_marca         = $request->get('id_marca');
        $producto->created_by       = $request->get('created_by');
        $producto->id_empresa       =   $request->get('id_empresa');

        $producto->save();
        return redirect()
            ->route('register.productos.index')
            ->with('success','Producto  creado exitosamente');
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

            return view('registro.productos.edit',compact('pais'));

        }catch (\Exception $ex){


            return redirect()
                ->route('producto.index')
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
            $producto               = Producto::findOrFail($id);
            $producto->descripcion  =   $request->get('descripcion');
            $producto->color        =   $request->get('color');
            $producto->id_presentacion  = $request->get('id_presentacion');
            $producto->id_marca         = $request->get('id_marca');
            $producto->created_by       = $request->get('created_by');
            $producto->id_empresa       =   $request->get('id_empresa');
            $producto->update();

            return redirect()
                ->route('producto.index')
                ->with('success','Producto modificado exitosamente');

        } catch(\Exception $ex){

            return redirect()
                ->route('producto.index')
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
