<meta charset="UTF-8">
<title>{{ set_title($title ?? '') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!---font-awesome
=============================================================-->
<link rel="stylesheet" href="{{ asset('font_awesome/css/font-awesome.min.css') }}">

<!---materialize css
=============================================================-->
<link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">

<!--- cacedebu css styles
=============================================================-->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@stack('css-styles')


