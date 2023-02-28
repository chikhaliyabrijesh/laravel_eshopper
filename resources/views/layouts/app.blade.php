<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="{{ asset('assets/user/style.css') }}">

        

        <link href="{{asset('admin/assets/img/favicon.png')}}" rel="icon">
        <link href="{{asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">

        <!-- Vendor JS Files -->
        <script src="{{asset('admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/chart.js/chart.umd.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/echarts/echarts.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/quill/quill.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('admin/assets/js/main.js')}}"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
