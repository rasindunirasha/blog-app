    <!DOCTYPE html>
    <html>
    <head>
        <title>Laravel Blog</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/viewStyle.css') }}">

    </head>
    <body>
        
        <div class="container mt-4">
            @yield('content')
        </div>
    </body>
    </html>
