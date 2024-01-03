<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Boleta({{$sale->id}}) - Passarinho </title>
    <link rel="shortcut icon" href="{{asset('icon/pdf.png')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets-boleta/css/main.css')}}">

</head>

<body>
    <div class="control-bar">
        <div class="container">
            <div class="row">
                <div class="col-2-4">
                    <div class="slogan">Boleta </div>
                </div>
                <div class="col-4 text-right">
                    <a href="javascript:window.print()">Imprimir</a>
                </div>
                <!--.col-->
            </div>
            <!--.row-->
        </div>
        <!--.container-->
    </div>
    <!--.control-bar-->

    <header class="row">
        <div class="logoholder text-center">
            <img src="{{ asset('img/logo-passarinho.png') }}" width="50px" height="50px">
        </div>
        <!--.logoholder-->

        <div class="me">
            <p contenteditable>
                <h1>Passarinho</h1><br>

                        <!--
                          234/90, New York Street<br>
                United States.<b
                        -->

        

            </p>
        </div>
        <!--.me-->

                <!--   <div class="info">
            <p>
                Web: <a href="http://volkerotto.net">www.sistemasweb.la</a><br>
                E-mail: <a href="mailto:info@obedalvarado.pw">info@obedalvarado.pw</a><br>
                Tel: +<br>
                Instagram:<a href="https://www.instagram.com/xperience.chile/"> @xperience.chile</a>
            </p>
        </div>-->


     <!-- .info -->

        <div class="bank">
            <p>
                Fecha: {{$sale->created_at}}<br>
                Boleta: {{$sale->id}}<br>
            </p>
        </div>
        <!--.bank-->

    </header>


    <div class="row section">

        <div class="col-2">
            <h1>Detalle de la venta</h1>
        </div>
        <!--.col-->

        <div class="col-3 text-right details">
            <p>

            </p>
        </div>
        <!--.col-->

        <div class="col-2">


            <p class="client">
                <strong>Enviar a</strong><br>
                {{$sale->users->name}}<br>
                {{$sale->users->email}}<br>
            </p>
        </div>
        <!--.col-->



    </div>
    <!--.row-->

    <div class="row section" style="margin-top:-1rem">
        <div class="col-1">
            <table style='width:100%'>
                <thead>
                    <tr class="invoice_detail">
                        <th width="25%" style="text-align">Vendedor</th>
                        <th width="25%">Orden de compra </th>
                        <th width="20%">Correo del vendedor</th>
                        <th width="30%">Términos y condiciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="invoice_detail">
                        <td width="25%" style="text-align">{{ Auth::user()->name }}</td>
                        <td width="25%" contenteditable>#PO-2020 </td>
                        <td width="20%">{{ Auth::user()->email }}</td>
            
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <!--.row-->

    <div class="invoicelist-body">
        <div class="col-3">
            <h1>Tour</h1>
        </div>
        <table>
            <thead>
                <th width="5%">Código</th>
                <th width="60%">Nombre</th>
                <th width="10%">Cant. pasajeros</th>
                <th width="15%">Precio del tour</th>
                <th width="10%">Total</th>
            </thead>
            <tbody>
                <tr>
                    <td width='5%'><span>{{$sale->tours->code}}</span></td>
                    <td width='60%'><span>{{$sale->tours->name}}</span></td>
                    <td class="amount">{{$sale->cant_cliente}}</td>
                    <td class="rate">{{$sale->tours->price}}</td>
                    <td class="sum">{{$sale->price_total}}</td>
                </tr>
            </tbody>
        </table>

    </div>
    <!--.invoice-body-->

    <div class="invoicelist-footer">
        <table>
            <tr>
                <td><strong>Total:</strong></td>
                <td id="total_price">{{$sale->price_total}}</td>
            </tr>
        </table>
    </div>

    <div class="note" contenteditable>
        <h2>Nota:</h2>
    </div>
    <!--.note-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="{{asset('
        assets / bower_components / jquery / dist / jquery.min.js ')}}"><\/script>')
    </script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>