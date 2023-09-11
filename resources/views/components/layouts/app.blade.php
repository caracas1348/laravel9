<head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')"
</head>

<body>
    <p>Hola Mundo app Blade</p>
    @include('partials.navigation')
    @yield('content')

</body>