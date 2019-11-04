@extends('layouts.app')
@section('content')
    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        MODIFICACION DE PARAMENTROS DE CLIENTES
                    </h4>

                </div>

                <div class="ui primary segment">

                        {!!Form::open(['route'=>['Register.Cliente.Update', $clientes->id_cliente] ,'class'=>'ui form' ,'method'=>'patch' ])!!}

                        <div class="field">
                            <div class="fields">
                                <div class="three wide field">
                                    <label>Nit Cliente</label>
                                    <input type="text" name="nit" placeholder="Numero de Identificacion Tributaria" value="{{$clientes->nit}}">

                                </div>
                                <div class="five wide field">
                                    <label>Razon Social</label>
                                    <input type="text" name="razon_social" placeholder="Razon Social" value="{{$clientes->razon_social}}">

                                </div>
                                <div class="five wide field">
                                    <label>Nombre Comercial</label>
                                    <input type="text" name="nombre_comercial" placeholder="Nombre Comercial" value="{{$clientes->nombre_comercial}}">

                                </div>

                                <div class="field">
                                    <label>Tipo Cliente</label>
                                    <input type="text" name="id_tipo_cliente" placeholder="Tipo de Cliente" value="{{$clientes->id_tipo_cliente}}">


                                </div>
                            </div>

                        </div>

                        <div class="field">

                            <div class="fields">
                                <div class="eight wide  field">
                                    <label>Direccion</label>
                                    <input type="text" name="direccion" placeholder="Direccion del Cliente" value="{{$clientes->direccion}}">
                                </div>

                                <div class="four wide field">
                                    <label>Municipio</label>
                                    <input type="text" name="id_municipio" placeholder="Municipio de Residencia" value="{{$clientes->id_municipio}}">
                                </div>

                                <div class="four wide field">
                                    <label>Departamento</label>
                                    <input type="text" name="id_departamento" placeholder="Departamento de Residencia" value="{{$clientes->id_departamento}}">
                                </div>


                            </div>

                        </div>
                    <div class="field">
                        <div class="fields">
                            <div class="four wide field">
                                     <label>Pais</label>
                                     <input type="text" name="id_pais" placeholder="Pais Residencia" value="{{$clientes->id_pais}}">
                                 </div>

                            <div class="four wide field">
                                <label>logitud</label>
                                <input type="text" name="longitud" placeholder="Coordenadas GPS" value="{{$clientes->longitud}}">
                            </div>

                            <div class="four wide field">
                                <label>latitud</label>
                                <input type="text" name="latitud" placeholder="Coordenadas GPS" value="{{$clientes->latitud}}">
                            </div>

                        </div>


                    </div>







                            <button class="ui button icon primary" type="submit">
                                <i class="icon check"></i>
                                Guardar
                            </button>
                            <a href="{{url()->previous()}}">
                                <button class="ui button icon primary" type="button">
                                    <i class="icon backward"></i>
                                    Regresar
                                </button>
                            </a>
                        {!!Form::close() !!}


                </div>


            </div>

        </div>


    </div>


@endsection
