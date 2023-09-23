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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Productos</title>
</head>

<body>
<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
            <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-shopping-cart fa-2x"></i></div>
    <h1 class="text-center">Productos</h1>
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
      <a href="" class="tm-nav-link">
        <i class="fas fa-shopping-cart"></i>
        Productos
      </a>
    </li>
    <li class="tm-nav-item">
      <a href="{{ route('vistaventas') }}" class="tm-nav-link">
      <i class="fas fa-hand-holding-dollar"></i>
        Ventas
      </a>
    </li>
  </ul>
</nav>

          
            <p class="tm-mb-30 pr-5 text-white">
                Este menu esta basado en una gestion respecto a productos.
                
            </p>
            <p class="tm-mb-20 pr-5 text-white">
            Ferreyra Robles, Juan Manuel.
            </p>


            
            <div class="tm-mb-30">
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
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{ route('cargarproducto') }}" class="effect-lily tm-post-link tm-pt-30">
                        <div class="tm-post-link-inner">
                        <img src="img/nuevoproducto.png" alt="Image" class="img-fluid" style="width: 220px; height: 220px;">
                        </div>
                        

                        <span class="position-center tm-new-badge">Nuevo producto</span>
                    </a>       
                    <hr class="tm-hr-primary">         
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{ route('productos.index') }}" class="effect-lily tm-post-link tm-pt-30">
                        <div class="tm-post-link-inner">
                        <img src="img/verproductos.png" alt="Image" class="img-fluid" style="width: 220px; height: 220px;">

                        </div>
                        

                        <span class="position-center tm-new-badge">Ver productos</span>
                    </a>                    
                    <hr class="tm-hr-primary">

                </article>
               
                </div>
                <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent" href="" class="tm-external-link">Juan Manuel Ferreyra Robles</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2023 - Juan Manuel Ferreyra Robles
                </div>
            </footer>
            </main>
            </div>
        </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/templatemo-script.js') }}"></script>

<script src="{{ asset('js/script.js') }}"></script>


</body>
</html>