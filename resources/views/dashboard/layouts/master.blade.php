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
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Clientes</a></li>
                                <li class="breadcrumb-item active">Painel de Controle</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                @yield('content')
            </section>

        </div>

        @include('dashboard.layouts.footer')

    </div>

    @include('dashboard.layouts.footer-scripts')
</body>

</html>
