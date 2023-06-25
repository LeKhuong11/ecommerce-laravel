<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('seo')

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <title>Document</title>
</head>
<body>
    
    @yield('content')
    
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>