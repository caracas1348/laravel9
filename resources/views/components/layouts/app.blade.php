<head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')">

    
</head>

<body>
    <p>Hola Mundo app Bladesss</p>
    @include('partials.navigation')

    @if(session('status'))
            <div>
                {{ session('status')}}
            </div>
    @endif

    @yield('content')

</body>