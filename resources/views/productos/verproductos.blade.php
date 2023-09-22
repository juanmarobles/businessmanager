<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> <!-- Utiliza asset para la ruta -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> <!-- Utiliza asset para la ruta -->
    <link href="{{ asset('css/templatemo-xtra-blog.css') }}" rel="stylesheet"> <!-- Utiliza asset para la ruta -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet"> <!-- Utiliza asset para la ruta -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Productos-Ver</title>
</head>

<body>
<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
            <div class="tm-site-header">
    <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-thin fa-shopping-cart fa-2x"></i>
    </div>
    <h1 class="text-center">Ver productos</h1>
</div>


<nav class="tm-nav" id="tm-nav">
  <ul>
    <li class="tm-nav-item">
      <a href="{{ route('clientes') }}" class="tm-nav-link">
      <i class="fas fa-user"></i>
        Clientes
      </a>
    </li>
    <li class="tm-nav-item active">
      <a href="{{ route('productos') }}" class="tm-nav-link">
        <i class="fas fa-shopping-cart"></i>
        Productos
      </a>
    </li>
    <li class="tm-nav-item">
      <a href="" class="tm-nav-link">
        <i class="fas fa-users"></i>
        Ventas
      </a>
    </li>
  </ul>
</nav>


          
            <p class="tm-mb-30 pr-5 text-white">
                Este menu esta basado en una gestion respecto mostrar los productos cargados.
                
            </p>
            <p class="tm-mb-30 pr-5 text-white">
            Ferreyra Robles, Juan Manuel.
            </p>


            
            <div class="tm-mb-35">
                        <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                            <i class="fab fa-facebook tm-social-icon"></i>
                        </a>
                        <a href="https://twitter.com" class="tm-social-link">
                            <i class="fab fa-twitter tm-social-icon"></i>
                        </a>
                        <a href="https://instagram.com" class="tm-social-link">
                            <i class="fab fa-instagram tm-social-icon"></i>
                        </a>
                        <a href="https://linkedin.com" class="tm-social-link">
                            <i class="fab fa-linkedin tm-social-icon"></i>
                        </a>
                    </div>
            </div>    
    </header>

    <div class="container-fluid">
        <main class="tm-main">
        <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Buscar producto..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>

            <!-- Tabla para mostrar los clientes -->
            <div class="col-12">
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Marca</th>
                <th>Costo</th>
                <th>Cant. Disponible</th> 
                <th>Acciones</th> <!-- Nueva columna para botones -->
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $pr)
                <tr>
                    <td>{{ $pr->nombreproducto }}</td>
                    <td>{{ $pr->marcaproducto }}</td>
                    <td>{{ $pr->costo }}</td>
                    <td>{{ $pr->cantidad_disponible }}</td>
                    <td>
                        <button class="btn btn-primary">Editar</button>
                        <form action="{{ route('productos.destroy', $pr) }}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <input 
                            type="submit" 
                            value="Eliminar" 
                            class="bg-green-200 text-white rounded px-2 py-1" 
                            onclick="return confirm('¿Desea Eliminar?')"
                        >
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

        <div class="row tm-row">
                
                </div>
                  <!-- Footer en el pie de página -->
    <footer>
        <hr class="">

        <div class="col-md-12 col-12 tm-color-gray tm-copyright">
            Copyright 2023 - Juan Manuel Ferreyra Robles
        </div>
    </footer>
            </main>
            
            </div>
        </div>
  <!-- Footer en el pie de página -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/templatemo-script.js') }}"></script>

<script src="{{ asset('js/script.js') }}"></script>


</body>
</html>