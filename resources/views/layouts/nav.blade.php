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
                   <ul class="navbar-nav ms-auto">
                       <li class="nav-item"><a class="nav-link" href="{{ route('Destacado') }}"> Destacado </a></li>
                       <li class="nav-item"><a class="nav-link" href="{{ route('QuienesSomos.index') }}"> Quienes somos </a></li>
                       <li class="nav-item dropdown">
                      
                        <a class="nav-link  dropdown-toggle" href="" data-bs-toggle="dropdown"> Nuestros Tours
                        </a>
                           <ul class="dropdown-menu dropdown-menu-right">
                         
                            <li><a class="dropdown-item" href="{{ route('NuestrosTours.index') }}"> mostrar Todos</a></li>
                            <li>___________________________</li>
                               @forelse ($tour as $item)
                                   <li><a class="dropdown-item" href="{{ route('NuestrosTours.detailstour', $item->id ) }}"> {{ $item->name }}</a></li>
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
                   <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Buscar
                    </button>
                    @guest
                        @if (Route::has('login'))
                            <a class="btn btn-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif
 
                        @if (Route::has('register'))
                            <a class="btn btn-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
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
