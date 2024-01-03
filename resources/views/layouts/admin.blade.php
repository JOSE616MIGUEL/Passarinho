<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel - Administrador</title>

    <!-- Desing Admin-->
    @vite(['resources/admin/css/bootstrap.min.css', 'resources/admin/libs/bootstrap/js/bootstrap.bundle.min.js'])
    @vite(['resources/admin/css/app.min.css'])
    @vite(['resources/admin/css/icons.min.css', 'resources/admin/libs/metismenu/metisMenu.min.js'])
    @vite(['resources/admin/libs/simplebar/simplebar.min.js'])
    @vite(['resources/admin/libs/node-waves/waves.min.js'])
    @vite(['resources/admin/libs/apexcharts/apexcharts.min.js'])
    @vite(['resources/admin/js/pages/dashboard.init.js'])
    @vite(['resources/admin/js/app.js'])
    @vite(['resources/admin/js/plugin.js'])
    <!--End Desing Admin-->

    <!-- Desing Datatables Jquery-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css" />
    <!-- End Desing Datatables Jquery-->


</head>

<body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.inc.navbar')
        @include('layouts.inc.sidebar')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <!--End content -->

    </div>
    <!-- END layout-wrapper -->

    <!--Theme dark or light-->
    @include('layouts.inc.configuration')
    <!--End Theme dark or light-->

        <!--.Boleta de compra-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            window.jQuery || document.write(
                '<script src="{{ asset('
                          assets / bower_components / jquery / dist / jquery.min.js ') }}"><\/script>'
                )
        </script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <!--EndBoleta de compra-->
    
        <!--Calculo de cantidad de pasajeros-->
        <script>
            var inicio = 1;
            var price_tour = document.getElementById('price_tour').value; //se inicializa una variable en 0
        
            function aumentar() { // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
        
                var cantidad = document.getElementById('cantidad').value = ++inicio;
        
                //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
            }
        
            function disminuir() { // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
        
        
                if (inicio <= 1) {
                    var cantidad = document.getElementById('cantidad').value = 1;
                } else {
                    var cantidad = document.getElementById('cantidad').value = --inicio;
                } //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
            }
        
            function total() {
                var cantidad = document.getElementById('cantidad')
                    .value; // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
                var total_price = document.getElementById('total_price').value = price_tour * cantidad;
                //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
            }
            </script>
            <!--EndCalculo de cantidad de pasajeros-->

    <!-- Dependency datatables.jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontró registro",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "",
                    "infoFiltered": "(Total de Registro _MAX_)",
                    "search": "Buscar",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                responsive: "true",
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excelHtml5',
                        text: '<img src="{{ asset('icon/excel.png') }}" alt="Excel" height="30px" />',
                        titleAttr: '',
                        className: 'btn btn-info'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<img src="{{ asset('icon/pdf.png') }}" alt="PDF" height="30px" />',
                        titleAttr: '',
                        className: 'btn btn-info'
                    },
                    {
                        extend: 'print',
                        text: '<img src="{{ asset('icon/imprimir.png') }}" alt="Imprimir" height="30px" />',
                        titleAttr: '',
                        className: 'btn btn-info'
                    },
                ]
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
        $("#btnExport").click(function(e) {
            window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#dvData').html()));
            e.preventDefault();
        });
    </script>
    <!--End Dependency datatables.jquery -->


</body>

</html>
