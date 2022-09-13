<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- DATATABLE CDN  -->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.1.0/css/select.dataTables.min.css" type="text/css" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" sizes="192x192" href="{{asset('/img/school-logo.png')}}">
    <style>
        td {
            text-align: center;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div id="app">

        @include('layouts.navbar')

        <div class="main flex flex-wrap justify-end mt-16">

            @include('layouts.sidebar')

            <div class="content w-full sm:w-5/6">
                <div class="container mx-auto p-4 sm:p-6">

                    @yield('content')

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Datatables JS CDN -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(function() {
            $("#opennavdropdown").on("click", function() {
                $("#navdropdown").toggleClass("hidden");
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    @stack('scripts')

</body>

</html>