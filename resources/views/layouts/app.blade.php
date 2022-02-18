<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/dashboard.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ mix('js/dashboard.js') }}" defer></script>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed font-sans antialiased">
        <div class="wrapper">

            <!-- Navbar -->
            @livewire('navigation-menu')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col">
                                <h1>{{ $header }}</h1>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                {{ $slot }}
                            </div>

                            @if (isset($aside))
                                <div class="col-lg-3">
                                    {{ $aside }}
                                </div>
                            @endif
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b><a href="https://jetstream.laravel.com">Jetstream</a></b>
                </div>
                <strong>Powered by</strong> <a href="https://adminlte.io">AdminLTE</a>
            </footer>
        </div>

        @stack('modals')
        @livewireScripts
        @stack('scripts')
    </body>
</html>
