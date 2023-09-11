<head>
     <title>Aprendible -- {{ $title ?? 'no hay titulo' }}</title>
    <meta name="description" content= " {{ $metaDescription ??  'Default meta description'}} " /> 
</head>

<body>
    {{-- <p>Hola Mundo in layout</p> --}}
    {{-- @include('partials.navigation')
    @yield('content') --}}
    <x-layouts.navigation/>   
{{ $slot }}

</body> 