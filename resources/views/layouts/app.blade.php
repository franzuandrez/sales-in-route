@if( \Auth::user())

    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RUTEO</title>

    <!-- Fonts -->
    <link href="{{asset('css/semantic.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/dropdown.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/search.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/icon.min.css')}}" rel="stylesheet">


    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.css'>


</head>
<body>
<div class="ui  inverted menu">
    <div class="ui  container ">
        <a class="item" href="{{url('/')}}">
            <img src="https://img.icons8.com/bubbles/50/000000/business-man-product-box.png">
        </a>
        @can('registro')
            <div class="ui dropdown item">
                <i class="file  icon"> </i>
                Registro
                <i class="dropdown icon"></i>
                <div class="menu">
                    @can('sucursales')
                        <a class="item" href="{{route('Company.Index')}}"> <i class="warehouse icon"></i>
                            Sucursales</a>
                    @endcan
                    @can('productos')
                        <a class="item" href="{{route('Producto.Index')}}"> <i class="boxes icon"></i>Productos</a>
                    @endcan
                    @can('proveedores')
                        <a class="item" href="{{route('Proveedor.Index')}}"><i class="users icon"></i>Proveedores</a>
                    @endcan
                    @can('clientes')
                        <a class="item" href="{{route('Cliente.Index')}}"><i class="child icon"></i> Clientes</a>
                    @endcan
                    @can('marcas')
                        <a class="item" href="{{route('Marca.Index')}}"><i class="copyright icon"></i> Marcas</a>
                    @endcan
                    @can('cat_proveedores')
                        <a class="item"><i class="list icon"></i>Categoria Proveedores</a>
                    @endcan

                </div>
            </div>
        @endcan
        @can('reportes')
            <div class="ui dropdown item">
                <i class="industry  icon"> </i>
                Reportes
                <i class="dropdown icon"></i>
                <div class="menu">
                    @can('kardex')
                        <a class="item"><i class=" th icon"></i>Kardex</a>
                    @endcan
                </div>
            </div>
        @endcan
        @can('sistema')
            <div class="ui dropdown item">
                <i class="cogs  icon"> </i>
                Sistema
                <i class="dropdown icon"></i>
                <div class="menu">
                    @can('usuarios')
                        <a class="item" href="{{url('sistema/users')}}"><i class=" users icon"></i>
                            Usuarios</a>
                    @endcan
                    @can('roles')
                        <a class="item" href="{{url('sistema/roles')}}"><i class=" wrench icon"></i>
                            Roles</a>
                    @endcan
                </div>
            </div>
        @endcan
        <div class="right menu">
            <div class="ui dropdown item">
                <img src="https://semantic-ui.com/images/avatar/large/steve.jpg">
                <i class="dropdown icon"></i>{{\Auth::user()->username}}
                <div class="menu">

                    <a class="item" href="{{route('logout')}}"><i class=" sign-out icon"></i>Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui main  container">

    @include('components.success-alert')
    @include('components.error-alert')
    @yield('content')
</div>


<script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
<script src="{{asset('js/semantic.min.js')}}"></script>
<script src="{{asset('components/dropdown.min.js')}}"></script>
<script src="{{asset('components/search.min.js')}}"></script>

<script src="{{asset('js/fontawesome.min.js')}}"></script>
<script>
    $('.ui.dropdown')
        .dropdown()
    ;


    $(document)
        .ready(function () {

            // fix main menu to page on passing
            $('.main.menu').visibility({
                type: 'fixed'
            });
            $('.overlay').visibility({
                type: 'fixed',
                offset: 80
            });

            // lazy load images
            $('.image').visibility({
                type: 'image',
                transition: 'vertical flip in',
                duration: 500
            });

            // show dropdown on hover
            $('.main.menu  .ui.dropdown').dropdown({
                on: 'hover'
            });
        })
    ;

</script>
@yield('scripts')
</body>

</html>

@else
    @include('welcome')
@endif
