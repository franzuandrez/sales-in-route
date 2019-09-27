<?php

namespace App\Http\Controllers;

use App\ClientesModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ClientesController extends Controller
{
    public function crear_cliente (Request $request) {

        $proveedor = new ClientesModel();
        $proveedor->nit =      $request->get('nit');
        $proveedor->razon_social = $request->get('razon_social');
        $proveedor->id_tipo_cliente = $request->get('id_tipo_cliente');
        $proveedor->direccion   =   $request->get('direccion');
        $proveedor->longitud  =   $request->get('longitud');
        $proveedor->latitud   =   $request->get('latitud');
        $proveedor->id_departamento   =   $request->get('id_departamento');
        $proveedor->id_municipio   =   $request->get('id_municipio');
        $proveedor->id_pais   =   $request->get('id_pais');
        $proveedor->save();
        return redirect()
            ->route('register.company.index')
            ->with('success','Proveedor creado exitosamente');
    }

    public function mostrar(Request $request){

        try{
            $busqueda = ($request->get('busqueda') == null) ?"":request()->get('busqueda');

            $cliente =    ClientesModel::all();


            /*ClientesModel::where(function ( $query ) use ($busqueda) {

            $query->where('entes.nit','LIKE','%'.$busqueda.'%')
                    ->orWhere('clientes.nombre_comercial','LIKE','%'.$busqueda.'%');
            });*/

            $user = DB::table('clientes')->where('razon_social', 'alvaro sa')->first();

            echo $user->latitud;
           # return response()->json($cliente);

        }catch (\Exception $ex){




        }
    }

    }
