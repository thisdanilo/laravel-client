<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ url('/') }}" class="brand-link text-center">
        <span class="brand-text font-weight-light">Clientes</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 mb-3 d-flex text-center">
            <div class="info">
                <p class="d-block text-white">{{ auth()->user()->name }}</p>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('client.index') }}" class=" {{ Ekko::areActiveRoutes(['client*'], 'nav-link active') }}">
                        <i class="fas fa-users"></i>
                        <p class="ml-3">Clientes</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p class="ml-3">Sair</p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>

</aside>
