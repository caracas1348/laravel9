<head>
     <title>Aprendible -- {{ $title ?? 'no hay titulo' }}</title>
    <meta name="description" content= " {{ $metaDescription ??  'Default meta description'}} " /> 

    {{-- <link rel="stylesheet" href="../css/app.css">
    <script src="../js/app.js"></script> --}}
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- <p>Hola Mundo in layout</p> --}}
    {{-- @include('partials.navigation')
    @yield('content') --}}
    <x-layouts.navigation/>   
{{ $slot }}
iuuuuuuuuuuuuuuuxxxxxxxxxxxxxx
</body> 