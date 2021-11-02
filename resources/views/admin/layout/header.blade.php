<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/chblue.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/theme-responsive.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/dtb/jquery.dataTables.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/select2.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/toastr.min.css')}}" rel="stylesheet" media="screen">
    <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-ui.1.10.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/toastr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/modernizr.js')}}"></script>
</head>
<body>

@yield('container.product')
@yield('container.product.modifie')
@yield('container.produit.create')
@yield('container.categorie')
@yield('container.categorie.create')
@yield('container.tables')
@yield('container.admin.index')
@yield('container.categorie.edit')

</body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</html>
