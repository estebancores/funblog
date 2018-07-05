<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Weboonaditas.com</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }

        .head__section {
            height: 370px;
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7db9e8+28,ffffff+99 */
            background: #7db9e8; /* Old browsers */
            background: -moz-linear-gradient(top, #7db9e8 28%, #f5f8fa 99%); /* FF3.6-15 */
            background: -webkit-linear-gradient(top, #7db9e8 28%, #f5f8fa 99%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom, #7db9e8 28%, #f5f8fa 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7db9e8', endColorstr='#f5f8fa', GradientType=0); /* IE6-9 */
            margin: -158px 0;
        }

        .foot__section {
            height: 200px;
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f5f8fa+0,7db9e8+33,000000+99 */
            background: #f5f8fa; /* Old browsers */
            background: -moz-linear-gradient(top, #f5f8fa 0%, #7db9e8 33%, #000000 99%); /* FF3.6-15 */
            background: -webkit-linear-gradient(top, #f5f8fa 0%, #7db9e8 33%, #000000 99%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom, #f5f8fa 0%, #7db9e8 33%, #000000 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f8fa', endColorstr='#000000', GradientType=0); /* IE6-9 */
        }


    </style>
</head>
<body>
    <div class="head__section"></div>
    <div id="app"></div>
    <div class="foot__section"></div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>
