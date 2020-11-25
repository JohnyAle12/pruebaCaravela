<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/home">Caravela</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      @if(Auth::user()->role == 'Administrador')
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('invoce.create') }}">Crear factura</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('invoce.index') }}">Facturas</a>
      </li>
      @else
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('invoce.create') }}">Crear factura</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('invoce.show', Auth::user()->id) }}">Mis facturas</a>
      </li>
      @endif
    </ul>
  </div>
</nav>