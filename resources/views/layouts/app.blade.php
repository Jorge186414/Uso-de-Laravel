<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>@yield('contenido')</title>

</head>

<body>
    <h1 class="text-3xl font-bold underline">Bienvenido a Laravel</h1>
    <h3>Hola Mundo  </h3>
    <nav>
        <ul>
            <li><a href="/">Principal</a></li>
            <li><a href="/nuestra-tienda">Nosotros</a></li>
            <li><a href="/venta-de-laptops">Venta Laptops</a></li>
            <li><a href="/contactanos">Contactanos</a></li>
        </ul>
    </nav>
    <h4>@yield('contenido')</h4>
    <p>@yield('informacion')</p>
</body>

</html>