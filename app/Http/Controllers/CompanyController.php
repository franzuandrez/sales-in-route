<?php

namespace App\Http\Controllers;


use App\Empresa;
use App\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CompanyController extends Controller
{
    //

    public function index(Request $request){


        $search = $request->get('search') == null ? '' : $request->get('search');
        $sort = $request->get('sort') == null ? 'desc' : ($request->get('sort'));
        $sortField = $request->get('field') == null ? 'username' : $request->get('field');

        $companies = Empresa::get();


        if($request->ajax()){
            return view('registers.companies.ajax',compact('search','sort','sortField','companies'));
        }else{
            return view('registers.companies.index',compact('search','sort','sortField','companies'));

        }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises =   Pais::get();
        return view('registers.companies.create',compact('paises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        $companies= new Empresa();
        $companies->id_empresa      =   $request->get('id_empresa');
        $companies->id_pais         =   $request->get('id_pais');
        $companies->descripcion         =   $request->get('id_pais');
        $companies->direccion_planta    =   $request->get('direccion_planta');

        $companies->save();
        return redirect()
            ->route('Company.Index')
            ->with('success','creado exitosamente');
        }
        catch (\Exception  $e){
            if ($e instanceof \PDOException) {
                return redirect()
                    ->route('Company.Index')
                    ->withErrors(['Codigo de empresa ya existente, vuelva a intentar' ]);
            }
            else{
                return redirect()
                    ->route('Company.Index')
                    ->withErrors(['Algo salio mal, por favor vuelva a intentarlo más tarde'.$e]);

            }

        }
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

            $paises =   Pais::get();
            $companies = Empresa::findOrFail($id);

            return view('registers.companies.edit',compact('companies','paises'));

        }catch (\Exception $ex){


            if ( $ex instanceof \PDOException) {
                return redirect()
                    ->route('Company.Index')
                    ->withErrors(['Codigo de empresa ya existente, vuelva a intentar' ]);
            }
            else{
                return redirect()
                    ->route('Company.Index')
                    ->withErrors(['Algo salio mal, por favor vuelva a intentarlo más tarde'.$e]);

            }

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
            $companies = Empresa::findOrFail($id);
            $companies->id_empresa      =   $request->get('id_empresa');
            $companies->id_pais         =   $request->get('id_pais');
            $companies->descripcion         =   $request->get('id_pais');
            $companies->direccion_planta         =   $request->get('direccion_planta');

            $companies->save();



            return redirect()
                ->route('Company.Index')
                ->with('success','Empresa modificada exitosamente');

        } catch(\Exception $ex){

            if ( $ex instanceof \PDOException) {
                return redirect()
                    ->route('Company.Index')
                    ->withErrors(['Codigo de empresa ya existente, vuelva a intentar' ]);
            }
            else{
                return redirect()
                    ->route('Company.Index')
                    ->withErrors(['Algo salio mal, por favor vuelva a intentarlo más tarde'.$e]);

            }
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

