<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel | TESJI ISIC 3601</title>

</head>

<body>
    <h1>Bienvenido a Laravel</h1>
    <h3>Hola Mundo !! </h3>
    <nav>
        <ul>
            <li><a href="/">Principal</a></li>
            <li><a href="/nuestra-tienda">Nosotros</a></li>
            <li><a href="/venta-de-laptops">Venta Laptops</a></li>
            <li><a href="/contactanos">Contactanos</a></li>
        </ul>
    </nav>
    <h4>@yield('contenido')</h4>
</body>

</html>