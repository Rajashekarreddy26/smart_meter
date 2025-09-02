<html>
    <head>
        <title>Smart Meter :: @yield('title')</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        {{-- CDN Styles --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        {{-- CDN Scripts --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        {{-- Custom Script Files --}}
        <script src="{{ asset('js/main.js') }}"></script>
        @stack('scripts')
        {{-- Custom CSS Files --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        @stack('styles')

    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </nav>
            <!-- Page content -->
            <div class="content">
                @yield('content', "<h5>Empty Content Page</h5>")
            </div>
        </div>
    </body>
    <footer>
    </footer>
</html>
