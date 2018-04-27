<!DOCTYPE html>
<html lang="en">
{{--{{dd(auth()->user()->name)}}--}}
{{--{{dd(!empty($tarefas))}}--}}

@extends('layouts.header');

<body class="">
@extends('layouts.options');
{{--{{dd(Session::all('usuario')) }}--}}
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
                            <a class="nav-link" href="#pablo" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">4</span>
                                <p>
                    <span class="d-lg-none d-md-block">Some Actions
                      <b class="caret"></b>
                    </span>

                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#pablo">Mike John responded to your email</a>
                                <a class="dropdown-item" href="#pablo">You have 5 new tasks</a>
                                <a class="dropdown-item" href="#pablo">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="#pablo">Another Notification</a>
                                <a class="dropdown-item" href="#pablo">Another One</a>
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
                </div>
                <!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
7 days
</button> -->

                <div class="row">

                    <div class="col-md-4">
                        <h3 style="color: red">Tarefa mais proxima do vencimento</h3>
                        <div class="card card-chart">
                        @if(!empty($tarefas))

                            @if(count($tarefas) >= '1')

                            <div class="card-body">

                                <h4 class="card-title">Nome da Tarefa: {{$tarefas['0']['1']}}</h4>
                                <p class="card-category">Data de Entrega: {{$tarefas['0']['2']}}</p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <p class="card-category">Prioridade: {{$tarefas['0']['3']}}</p>
                                </div>
                            </div>
                                @endif
@endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-rose">
                                <div class="card-icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <h4 class="card-title "> Suas Atividades</h4>
                            </div>
                            <div class="material-datatables">
                                <div class="table-responsive">

                                    <table class="table" id="MyTable">


                                        <thead class="">
                                        <th>
                                            ID Tarefa
                                        </th>
                                        <th>
                                            Nome da tarefa
                                        </th>
                                        <th>
                                            Descrição da Tarefa
                                        </th>
                                        <th>
                                            Data de Entrega
                                        </th>
                                        <th>
                                            Prioridade
                                        </th>
                                        <th>
                                            Equipe
                                        </th>

                                        </thead>
                                        <tbody>
                                        @if(!empty($tarefas))
                                        @if(count($tarefas) >= '1')
                                        <tr class="table-success">
                                            @foreach($tarefas as $key => $array)
                                            @foreach($array as $column_name => $value)
                                                <td>{{ $value }}</td>
                                        @endforeach
                                        </tbody>
                                            @endforeach
                                        @endif
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{ csrf_field() }}

        </div>
        </div>
@extends('layouts.footer');
    </div>
</div>
</body>
@extends('layouts.js');
<script src="../../assets/js/core/jquery.min.js"></script>
<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/bootstrap-material-design.js"></script>
<script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="../../assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="../../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../../assets/js/plugins/nouislider.min.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../../assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="../../assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../../assets/js/plugins/jasny-bootstrap.min.js"></script>
<!-- Plugins for presentation and navigation  -->
<script src="../../assets/assets-for-demo/js/modernizr.js"></script>
<script src="../../assets/assets-for-demo/js/vertical-nav.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="../../assets/js/material-dashboard.js?v=2.0.1"></script>
<!-- Dashboard scripts -->
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../../assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="../../assets/js/plugins/jquery.validate.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="../../assets/js/plugins/chartist.min.js"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="../../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="../../assets/js/plugins/jquery-jvectormap.js"></script>
<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="../../assets/js/plugins/nouislider.min.js"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../../assets/js/plugins/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="../../assets/js/plugins/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="../../assets/js/plugins/sweetalert2.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../../assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="../../assets/js/plugins/fullcalendar.min.js"></script>
<!-- demo init -->
<script src="../../assets/js/plugins/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            // language: {
            //     search: "_INPUT_",
            //     searchPlaceholder: "Search records",
            // }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
    function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("MyTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

</script>
</html>