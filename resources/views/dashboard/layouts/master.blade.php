<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('dashboard.layouts.header')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('dashboard.layouts.nav')

        @include('dashboard.layouts.sidebar')

        <div class="content-wrapper">

            <section class="content-header">
                @yield('content_header')
            </section>
            <section class="content">
                @yield('content')
            </section>

        </div>

        @include('dashboard.layouts.footer')

    </div>

    @include('dashboard.layouts.footer-scripts')

    @yield('footer-extras')
</body>

</html>
