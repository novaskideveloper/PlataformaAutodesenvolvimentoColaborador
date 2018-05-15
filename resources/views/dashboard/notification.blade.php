<!DOCTYPE html>
<html lang="en">

@include('layouts.header');
<body class="">
{{--{{dd($teams)}}--}}
{{--@include('dashboard.dashboard');--}}
{{--{{dd(Session::get('usuario.empresa.0'))}}--}}
<div class="">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('assets/img/sidebar-1.jpg') }}">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                Du
            </a>
            <a href="http://www.duomo.com.br" class="simple-text logo-normal">
                Duomo
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{ asset('assets/img/faces/pooh.jpg') }}" />
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
               {{Session::get('usuario.nome.0')->Nome}}
                  <b class="caret"></b>
              </span>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> My Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> EP </span>
                                    <span class="sidebar-normal"> Edit Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> S </span>
                                    <span class="sidebar-normal"> Settings </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('createtask')}}">
                        <i class="material-icons">dashboard</i>
                        <p> Criar Tarefa </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('createteam')}}">
                        <i class="material-icons">dashboard</i>
                        <p> Criar Equipe </p>
                    </a>
                </li>
                {{--@if($empresausuario['0']->IdEmpresa == 1)--}}
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('creatework')}}">
                        <i class="material-icons">dashboard</i>
                        <p> Cadastrar Empresa </p>
                    </a>
                </li>
                {{--@endif--}}
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('createnotification')}}">
                        <i class="material-icons">dashboard</i>
                        <p> Criar Notification </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">apps</i>
                        <p> Components
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="./components/buttons.html">
                                    <span class="sidebar-mini"> B </span>
                                    <span class="sidebar-normal"> Buttons </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./components/grid.html">
                                    <span class="sidebar-mini"> GS </span>
                                    <span class="sidebar-normal"> Grid System </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./components/panels.html">
                                    <span class="sidebar-mini"> P </span>
                                    <span class="sidebar-normal"> Panels </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./components/sweet-alert.html">
                                    <span class="sidebar-mini"> SA </span>
                                    <span class="sidebar-normal"> Sweet Alert </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./components/notifications.html">
                                    <span class="sidebar-mini"> N </span>
                                    <span class="sidebar-normal"> Notifications </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./components/icons.html">
                                    <span class="sidebar-mini"> I </span>
                                    <span class="sidebar-normal"> Icons </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./components/typography.html">
                                    <span class="sidebar-mini"> T </span>
                                    <span class="sidebar-normal"> Typography </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                        <i class="material-icons">content_paste</i>
                        <p> Forms
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="formsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="./forms/regular.html">
                                    <span class="sidebar-mini"> RF </span>
                                    <span class="sidebar-normal"> Regular Forms </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./forms/extended.html">
                                    <span class="sidebar-mini"> EF </span>
                                    <span class="sidebar-normal"> Extended Forms </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./forms/validation.html">
                                    <span class="sidebar-mini"> VF </span>
                                    <span class="sidebar-normal"> Validation Forms </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./forms/wizard.html">
                                    <span class="sidebar-mini"> W </span>
                                    <span class="sidebar-normal"> Wizard </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                        <i class="material-icons">grid_on</i>
                        <p> Tables
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="tablesExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="./tables/regular.html">
                                    <span class="sidebar-mini"> RT </span>
                                    <span class="sidebar-normal"> Regular Tables </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./tables/extended.html">
                                    <span class="sidebar-mini"> ET </span>
                                    <span class="sidebar-normal"> Extended Tables </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./tables/datatables.net.html">
                                    <span class="sidebar-mini"> DT </span>
                                    <span class="sidebar-normal"> DataTables.net </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                        <i class="material-icons">place</i>
                        <p> Maps
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="mapsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="./maps/google.html">
                                    <span class="sidebar-mini"> GM </span>
                                    <span class="sidebar-normal"> Google Maps </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./maps/fullscreen.html">
                                    <span class="sidebar-mini"> FSM </span>
                                    <span class="sidebar-normal"> Full Screen Map </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./maps/vector.html">
                                    <span class="sidebar-mini"> VM </span>
                                    <span class="sidebar-normal"> Vector Map </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./widgets.html">
                        <i class="material-icons">widgets</i>
                        <p> Widgets </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./charts.html">
                        <i class="material-icons">timeline</i>
                        <p> Charts </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./calendar.html">
                        <i class="material-icons">date_range</i>
                        <p> Calendar </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Regular Forms</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="material-icons">dashboard</i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="#">Another Notification</a>
                                <a class="dropdown-item" href="#">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="material-icons">person</i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-12">
                        <div class="card ">'
                            <div class="card-header card-header-rose card-header-text">
                                <div class="card-text">
                                    <h4 class="card-title">Criação de Notificações</h4>
                                </div>
                            </div>
                            <div class="card-body ">
                                <form method="post" action="{{route("notification")}}" class="form-horizontal">
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Nome da Notificação</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Notificação" name="NomeNotificacao" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Data de Inicio</label>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <input type="date" class="form-control" value="{{date('Y-m-d H:i:s')}}" name="dtinicio" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Data Limite</label>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <input type="date" class="form-control" value="{{date('Y-m-d H:i:s')}}" name="dtfim" placeholder="Esse Campo não é obrigatorio">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Selecione uma Equipe</label>
                                        <div class="col-sm-10">
                                            <select id="usuario2"  name="team" class="selectpicker" data-style="btn select-with-transition" required>
                                                <option value=null  selected disabled >Selecione uma Equipe</option>
                                                @foreach($teams as $tms)
                                                    <tr>

                                                        <option value="{{ $tms['0'] }}">{{ $tms['1']}}</option>

                                                    </tr>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Redirecionamento</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Esse Campo não é obrigatorio" name="redirecionamento">
                                            </div>
                                        </div>
                                    </div>
                                    {{ csrf_field() }}
                                    <div class="card-footer ">
                                        <button type="submit" class="btn btn-fill btn-rose" value="criar">Criar Tarefa</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer ">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
<!--   Core JS Files   -->
@include('layouts.js');

</html>