@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="ui grid">
            <div class="eight wide column">
                <div class="ui category search">
                    <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="Buscar...">
                        <i class="search icon"></i>
                    </div>
                    <div class="results"></div>
                </div>
            </div>
        </div>
    </div>
    <table class="ui selectable    celled table">
        <thead>
        <th colspan="4">
            <div class="ui small float-right primary labeled icon button ">
                <i class="plus icon"></i> Nuevo
            </div>

        </th>
        <tr>

            <th>
                <i class="icon sort"></i>
                Nombre
            </th>
            <th>    <i class="icon sort"></i>Direccion</th>
            <th>    <i class="icon sort"></i>Encargado</th>
            <th></th>

        </tr>
        </thead>
        <tbody>

        <tr>

            <td>Sucursal 1</td>
            <td>Salama Baja Verapaz</td>
            <td>Isaac Tecu</td>
            <td>
                <button class="circular ui icon blue button">
                    <i class="icon eye"></i>
                </button>
                <button class="circular ui icon purple button">
                    <i class="icon pencil"></i>
                </button>
                <button class="circular ui icon grey button">
                    <i class="icon trash"></i>
                </button>
            </td>

        </tr>

        </tbody>

        </tfoot>
    </table>
@endsection
