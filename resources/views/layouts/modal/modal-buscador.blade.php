
  <!-- Modal Buscador-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Buscador</h1>
          <form class="d-flex" role="search">
                 
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="buscador">  
        </form>
        </div>
        <div class="modal-body">
            <ul id="listaArticulos">
                <li class="articulo"><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                <li class="articulo"><a href="{{ route('register') }}">Registrarse</a></li>
                <li class="articulo"><a href="{{ route('Destacado') }}">Destacados</a></li>
                <li class="articulo"><a href="{{ route('QuienesSomos.index') }}">Quienes Somos</a></li>
                <li class="articulo"><a href="{{ route('NuestrosTours.index') }}">Nuestros Tours</a></li>
            </ul>
            <p id="mensajeNoEncontrado" style="display: none; color: red;">No se encontraron resultados.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
        </div>
      </div>
    </div>
  </div>
  <!-- fin de modal buscador-->