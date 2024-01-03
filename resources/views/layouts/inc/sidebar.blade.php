<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('Dashboard.index') }}" class="waves-effect">
                        <img src="{{ asset('icon/panel-control.png') }}" alt="" width="25px" height="25px">
                        <span class="icon-nav" key="t-chat">Panel de Control</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Aplicación</li>

    

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{ asset('icon/tours.png') }}" alt="" width="25px" height="25px">
                        <span class="icon-nav" key="t-dashboards">Tours</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('Tour.index') }}" key="t-tui-calendar">Lista de Tours</a></li>
                        <li><a href="{{ route('Tour.create') }}" key="t-full-calendar">Agregar Tour</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{ asset('icon/destinos.png') }}" alt="" width="25px" height="25px">
                        <span class="icon-nav" key="t-ecommerce">Destinos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('Place.index') }}" key="t-products">Lista Completa</a></li>
                        <li><a href="{{ route('Place.create') }}" key="t-product-detail">Agregar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{ asset('icon/galeria.png') }}" alt="" width="25px" height="25px">
                        <span class="icon-nav" key="t-crypto">Galería</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('Galery.index') }}" key="t-wallet">Lista Completa</a></li>
                        <li><a href="{{ route('Galery.create') }}" key="t-buy">Agregar</a></li>
                    </ul>
                </li>

                <li>
                    <li>
                        <a href="{{ route('Sale.index') }}" class="waves-effect">
                            <img src="{{ asset('icon/venta.png') }}" alt="" width="25px" height="25px">
                            <span class="icon-nav" key="t-chat">Ventas</span>
                        </a>
                    </li>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{ asset('icon/contacto.png') }}" alt="" width="25px" height="25px">
                        <span class="icon-nav" key="t-contacts">Contactos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('Contact.create') }}" key="t-user-grid">Agregar contacto</a></li>
                        <li><a href="{{ route('Contact.index') }}" key="t-user-list">Lista de contactos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->