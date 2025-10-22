<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocoffey</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-primary">
    @include('components.navbarfull')
    <div class="px-20">
        <h2 class="font-poppins font-extrabold">@yield('title-section')</h2>
        <P>@yield('sub-title-section')</P>
    </div>
    @yield('content-section')
    <div class="p-10">
        @include('components.footer')
    </div>
    
</body>
</html>
