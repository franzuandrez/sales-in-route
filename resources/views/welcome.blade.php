<html>
<head>
    <!-- Fonts -->
    <link href="{{asset('css/semantic.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/dropdown.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/search.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/site.css')}}" rel="stylesheet">
    <link href="{{asset('components/reset.css')}}" rel="stylesheet">
    <link href="{{asset('components/container.css')}}" rel="stylesheet">
    <link href="{{asset('components/grid.css')}}" rel="stylesheet">
    <link href="{{asset('components/header.css')}}" rel="stylesheet">
    <link href="{{asset('components/image.css')}}" rel="stylesheet">
    <link href="{{asset('components/menu.css')}}" rel="stylesheet">
    <link href="{{asset('components/divider.css')}}" rel="stylesheet">
    <link href="{{asset('components/segment.css')}}" rel="stylesheet">
    <link href="{{asset('components/button.css')}}" rel="stylesheet">
    <link href="{{asset('components/list.css')}}" rel="stylesheet">
    <link href="{{asset('components/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('components/transition.css')}}" rel="stylesheet">
    <style>


        .hidden.menu {
            display: none;
        }

        .masthead.segment {
            min-height: 700px;
            padding: 1em 0em;
        }
        .masthead .logo.item img {
            margin-right: 1em;
        }
        .masthead .ui.menu .ui.button {
            margin-left: 0.5em;
        }
        .masthead h1.ui.header {
            margin-top: 3em;
            margin-bottom: 0em;
            font-size: 4em;
            font-weight: normal;
        }
        .masthead h2 {
            font-size: 1.7em;
            font-weight: normal;
        }

        .ui.vertical.stripe {
            padding: 8em 0em;
        }
        .ui.vertical.stripe h3 {
            font-size: 2em;
        }
        .ui.vertical.stripe .button + h3,
        .ui.vertical.stripe p + h3 {
            margin-top: 3em;
        }
        .ui.vertical.stripe .floated.image {
            clear: both;
        }
        .ui.vertical.stripe p {
            font-size: 1.33em;
        }
        .ui.vertical.stripe .horizontal.divider {
            margin: 3em 0em;
        }

        .quote.stripe.segment {
            padding: 0em;
        }
        .quote.stripe.segment .grid .column {
            padding-top: 5em;
            padding-bottom: 5em;
        }

        .footer.segment {
            padding: 5em 0em;
        }

        .secondary.pointing.menu .toc.item {
            display: none;
        }

        @media only screen and (max-width: 700px) {
            .ui.fixed.menu {
                display: none !important;
            }
            .secondary.pointing.menu .item,
            .secondary.pointing.menu .menu {
                display: none;
            }
            .secondary.pointing.menu .toc.item {
                display: block;
            }
            .masthead.segment {
                min-height: 350px;
            }
            .masthead h1.ui.header {
                font-size: 2em;
                margin-top: 1.5em;
            }
            .masthead h2 {
                margin-top: 0.5em;
                font-size: 1.5em;
            }
        }



    </style>

</head>
<body class="pushable">

<!-- Following Menu -->
<div class="ui large top fixed menu transition hidden">
    <div class="ui container">
        <a class="active item">Inicio</a>
        <div class="right menu">

            <div class="item">
                <a href="{{route('login')}}" class="ui primary button">Iniciar Sesión</a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu left">
    <a class="active item">Inicio</a>
    <a class="item" href="{{route('login')}}">Iniciar Sesión</a>
</div>


<!-- Page Contents -->
<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a href="{{route('login')}}" class="active item">Inicio</a>
                <div class="right item">

                    <a class="ui inverted button" href="{{route('login')}}">Iniciar Sesión</a>
                </div>
            </div>
        </div>

        <div class="ui text container">
            <h1 class="ui inverted header">
                RUTEO
            </h1>
            <h2>Control y administracion de ventas en ruta</h2>
            <div class="ui huge primary button">Iniciar</div>
        </div>

    </div>

    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">Compañias y grandes Organizaciones </h3>
                    <p>  Le podemos dar a tu compañia super poderes en el control de sus ventas  </p>
                    <h3 class="ui header">Cliente finales</h3>
                    <p> También somos proveedores directos ;) </p>
                </div>
                <div class="six wide right floated column">
                    <img src="https://www.balena.io/blog/content/images/2018/12/2018-01_GPS_tracking.jpg" class="ui large bordered rounded image">
                </div>
            </div>
            <div class="row">
                <div class="center aligned column">
                    <a class="ui huge button">Saber más</a>
                </div>
            </div>
        </div>
    </div>


    <div class="ui vertical stripe quote segment">
        <div class="ui equal width stackable internally celled grid">
            <div class="center aligned row">
                <div class="column">
                    <h3>"Excelente Servicio"</h3>
                    <p>Anónimo</p>
                </div>
                <div class="column">
                    <h3>"Muy buena atención"</h3>
                    <p>
                        Isaac Tecú
                    </p>
                </div>
            </div>
        </div>
    </div>




</div>


<script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
<script src="{{asset('js/semantic.min.js')}}"></script>
<script src="{{asset('components/dropdown.min.js')}}"></script>
<script src="{{asset('components/search.min.js')}}"></script>
<script src="{{asset('components/sidebar.js')}}"></script>
<script src="{{asset('components/transition.js')}}"></script>
<script src="{{asset('components/visibility.js')}}"></script>

<script>
    $('.ui.dropdown')
        .dropdown()
    ;
    $('.ui.search')
        .search({
            type: 'category'
        })
    ;
</script>
<script>

    $(document)
        .ready(function() {

            // fix menu when passed
            $('.masthead')
                .visibility({
                    once: false,
                    onBottomPassed: function() {
                        $('.fixed.menu').transition('fade in');
                    },
                    onBottomPassedReverse: function() {
                        $('.fixed.menu').transition('fade out');
                    }
                })
            ;

            // create sidebar and attach to menu open
            $('.ui.sidebar')
                .sidebar('attach events', '.toc.item')
            ;

        })
    ;

</script>
</body>
</html>
