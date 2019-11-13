@extends('layouts.app')
@section('content')
    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        REGISTRO DE CLIENTES
                    </h4>

                </div>

                <div class="ui primary segment">

                        {!!Form::open(['route'=>'Register.Cliente.Store' ,'class'=>'ui form' ,'method'=>'post' ])!!}

                        <div class="field">
                            <div class="fields">
                                <div class="three wide field">
                                    <label>Nit Cliente</label>
                                    <input type="text" name="nit" placeholder="Numero de Identificacion Tributaria">

                                </div>
                                <div class="five wide field">
                                    <label>Razon Social</label>
                                    <input type="text" name="razon_social" placeholder="Razon Social">

                                </div>
                                <div class="five wide field">
                                    <label>Nombre Comercial</label>
                                    <input type="text" name="nombre_comercial" placeholder="Nombre Comercial">

                                </div>

                                <div class="field">
                                    <label>Tipo Cliente</label>
                                    <select name="id_tipo_cliente" class="ui search dropdown">
                                        @foreach($categoria_clientes as $categoria_cliente)

                                                <option value="{{$categoria_cliente->id_categoria_cliente}}" >{{$categoria_cliente->descripcion}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="field">

                            <div class="fields">
                                <div class="eight wide  field">
                                    <label>Direccion</label>
                                    <input type="text" name="direccion" placeholder="Direccion del Cliente">
                                </div>

                                <div class="four wide field">
                                    <label>Municipio</label>
                                    <input type="text" name="id_municipio" placeholder="Municipio de Residencia">
                                </div>

                                <div class="four wide field">
                                    <label>Departamento</label>
                                    <input type="text" name="id_departamento" placeholder="Departamento de Residencia">
                                </div>


                            </div>

                        </div>
                    <div class="field">
                        <div class="fields">
                            <div class="four wide field">
                                     <label>Pais</label>
                                     <input type="text" name="id_pais" placeholder="Pais Residencia">
                                 </div>

                            <div class="four wide field">
                                <label>logitud</label>
                                <input type="text" name="longitud" placeholder="Coordenadas GPS">
                            </div>

                            <div class="four wide field">
                                <label>latitud</label>
                                <input type="text" name="latitud" placeholder="Coordenadas GPS">
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
