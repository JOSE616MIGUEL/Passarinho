       <!-- ============= COMPONENT ============== -->
       <nav id="navbar_top" class="navbar navbar-expand-xl bg-body-dark">
           <div class="container-xxl">
               <a id="navbar-brand" class="navbar-brand" href="{{ route('Destacado') }}"><img class="img-logo"
                       src="{{ asset('img/logo-passarinho.png') }}" alt="" width="38px"
                       height="40px">Passarinho</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                   aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"><img src="img/menu.png" alt="" width="30px"
                           height="30px"></span>
               </button>
               <div class="collapse navbar-collapse" id="main_nav">
                   <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                       <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                           data-bs-target="#exampleModal">
                           <img src="{{ asset('icon/busqueda.png') }}" alt="" width="20px" height="20px">
                       </button>
                   </div>
                   <ul class="navbar-nav ms-auto">
                       <li class="nav-item"><a class="nav-link" href="{{ route('Destacado') }}"> Destacado </a></li>
                       <li class="nav-item"><a class="nav-link" href="{{ route('QuienesSomos.index') }}"> Quienes somos
                           </a></li>
                       <li class="nav-item dropdown">

                           <a class="nav-link  dropdown-toggle" href="" data-bs-toggle="dropdown"> Nuestros Tours
                           </a>
                           <ul class="dropdown-menu dropdown-menu-right">

                               <li><a class="dropdown-item" href="{{ route('NuestrosTours.index') }}"> mostrar Todos</a>
                               </li>
                               <li>___________________________</li>
                               @forelse ($tour as $item)
                                   <li><a class="dropdown-item"
                                           href="{{ route('NuestrosTours.detailstour', $item->id) }}">
                                           {{ $item->name }}</a></li>
                               @empty

                                   <div>
                                       <h6>No hay tours</h6>
                                   </div>
                               @endforelse
                           </ul>
                       </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> City 5 Places
                           </a>
                           <ul class="dropdown-menu dropdown-menu-right">
                               <li><a class="dropdown-item" href="#"> Chile</a></li>
                               <li><a class="dropdown-item" href="#"> Miami </a></li>
                           </ul>
                       </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">Hospedaje </a>
                           <ul class="dropdown-menu dropdown-menu-right">
                               <li><a class="dropdown-item" href="#"> Chile</a></li>
                               <li><a class="dropdown-item" href="#"> Miami </a></li>
                           </ul>
                       </li>
                   </ul>

                   <div class="dropdown d-inline-block">

                       @guest
                           @if (Route::has('login'))
                               <a class="btn btn-dark" href="{{ route('login') }}"><img src="icon/login.png" alt=""
                                       width="20px" height="20px">
                               </a>
                           @endif

                           @if (Route::has('register'))
                               <a class="btn btn-dark" href="{{ route('register') }}"><img src="icon/registro.png"
                                       alt="" width="20px" height="20px"></a>
                           @endif
                       @else
                           <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               @if (Auth::user()->image)
                                   <img class="rounded-circle header-profile-user" src="{{ asset(Auth::user()->image) }}"
                                       alt="Header Avatar" width="40px" height="40px">
                               @else
                                   <span class="d-none d-xl-inline-block ms-1" key="t-henry">Sin Imagen</span>
                               @endif
                               <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                           </button>
                           <div class="dropdown-menu dropdown-menu-end">

                            <span class="dropdown-item" key="t-henry">{{ Auth::user()->name }}</span>
                               <!--Validación de rol administrador -->
                               @if (Auth::user()->role_as == 1)
                                   <a href="{{ route('Dashboard.index') }}" class="dropdown-item">Panel Administrador</a>
                                   <br>

                                   <a class="dropdown-item" href="#"><i
                                           class="bx bx-wallet font-size-16 align-middle me-1"></i> <span
                                           key="t-my-wallet">My
                                           Wallet</span></a>
                                   <a class="dropdown-item d-block" href="#"><span
                                           class="badge bg-success float-end">11</span><i
                                           class="bx bx-wrench font-size-16 align-middle me-1"></i> <span
                                           key="t-settings">Settings</span></a>
                                   <a class="dropdown-item" href="#"><i
                                           class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span
                                           key="t-lock-screen">Lock screen</span></a>
                               @else
                                   <!-- item-->
                                   <a class="dropdown-item" href="{{ route('ClienteConfiguracion.index', Auth::user()->id) }}"><i
                                           class="bx bx-user font-size-16 align-middle me-1"></i> <span
                                           key="t-profile">Configuración
                                           del perfil</span></a>
                               @endif
                               <!--Fin Validación de rol administrador -->


                               <div class="dropdown-divider"></div>

                               <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i
                                       class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                   {{ __('Cerrar Sesión') }}
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                               </form>

                           </div>

                       @endguest
                   </div>

               </div>
               <!-- navbar-collapse.// -->
           </div>
           <!-- container-fluid.// -->
       </nav>
