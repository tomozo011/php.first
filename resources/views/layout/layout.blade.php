<html>
    <head>
        <title>@section('title', 'MyBBS')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @component('layout.header')
        @endcomponent
        <div class="container">
            @yield('content')
        </div>

        @component('layout.footer')
        @endcomponent

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/BBS.js"></script>
    </body>
</html>