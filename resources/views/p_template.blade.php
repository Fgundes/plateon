<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Plate On</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{url('css/landing-page-2.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <link rel="shortcut icon" href="{{url('img/on.ico')}}" type="image/x-icon" />
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">--------------</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/p"><img src="{{url('img/pes.png')}}" height="50px" width="130px"></i></a> 
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/p">Pagina Inicial</a>
                        </li>
                        <li>
                            <a href="/p_disciplinas">Disiciplinas</a>
                        </li>
                        <li>
                            <a href="/p_exer">Exercicios</a>
                        </li>
                        <li>
                            <a href="/p_agenda">Agenda</a>
                        </li>
                        <li>
                            <a href="/p_edit">{{ auth()->user()->name }}</a>
                        </li>
                        <li>
                            <a href="/p_contato">Contatos</a>
                        </li>
                        <li>
                            <ul class="nav navbar-nav navbar-right">
                                <a href="/exit" class="btn btn-primary btn-lg"><img src="{{url('img/off.png')}}" height="20px" width="20px">  Sair</a></button>
                            </ul>
                        </li>             
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        @yield('p_content')

        @yield('contato')
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-inline">
                            <li>
                                <a href="/p">PLATE ON</a>
                            </li>
                            <li class="footer-menu-divider">|</li>
                            <li>
                                <a href="/p">Pagina Inicial</a>
                            </li>
                            <li class="footer-menu-divider">|</li>
                            <li>
                                <a href="/p_disciplinas">Disciplinas</a>
                            </li>
                            <li class="footer-menu-divider">|</li>
                            <li>
                                <a href="/p_exer">Exercicios</a>
                            </li>
                            <li class="footer-menu-divider">|</li>
                            <li>
                                <a href="/p_agenda">Agenda</a>
                            </li>
                            <li class="footer-menu-divider">|</li>
                            <li>
                                <a href="/p_contato">Contatos</a>
                            </li>
                        </ul>
                        <p class="copyright text-muted small">PLATE ON - Corpiring 2016 </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="{{url('js/jquery.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{url('js/bootstrap.min.js')}}"></script>

    </body>

</html>
