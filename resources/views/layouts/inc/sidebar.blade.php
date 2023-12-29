<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                        <span key="t-chat">Dashboard</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Aplicación</li>

    

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span key="t-dashboards">Tours</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('Tour.index') }}" key="t-tui-calendar">Lista de Tours</a></li>
                        <li><a href="{{ route('Tour.create') }}" key="t-full-calendar">Agregar Tour</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-plane" aria-hidden="true"></i>
                        <span key="t-ecommerce">Destinos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products.html" key="t-products">Products</a></li>
                        <li><a href="ecommerce-product-detail.html" key="t-product-detail">Product Detail</a></li>
                        <li><a href="ecommerce-orders.html" key="t-orders">Orders</a></li>
                        <li><a href="ecommerce-customers.html" key="t-customers">Customers</a></li>
                        <li><a href="ecommerce-cart.html" key="t-cart">Cart</a></li>
                        <li><a href="ecommerce-checkout.html" key="t-checkout">Checkout</a></li>
                        <li><a href="ecommerce-shops.html" key="t-shops">Shops</a></li>
                        <li><a href="ecommerce-add-product.html" key="t-add-product">Add Product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-image"></i>
                        <span key="t-crypto">Galería</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-wallet.html" key="t-wallet">Wallet</a></li>
                        <li><a href="crypto-buy-sell.html" key="t-buy">Buy/Sell</a></li>
                        <li><a href="crypto-exchange.html" key="t-exchange">Exchange</a></li>
                        <li><a href="crypto-lending.html" key="t-lending">Lending</a></li>
                        <li><a href="crypto-orders.html" key="t-orders">Orders</a></li>
                        <li><a href="crypto-kyc-application.html" key="t-kyc">KYC Application</a></li>
                        <li><a href="crypto-ico-landing.html" key="t-ico">ICO Landing</a></li>
                    </ul>
                </li>

                <li>
                    <li>
                        <a href="chat.html" class="waves-effect">
                          <img id="img-ventas" src="../img/shopping.svg" alt="">
                            <span key="t-chat">Ventas</span>
                        </a>
                    </li>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Contactos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid.html" key="t-user-grid">Agregar contacto</a></li>
                        <li><a href="contacts-list.html" key="t-user-list">Lista de contactos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->