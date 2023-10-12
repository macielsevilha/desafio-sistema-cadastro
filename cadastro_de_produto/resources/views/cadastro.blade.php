<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de Produto</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>


    <!-- Styles -->

    <style>
       img {
        width: 200px
       }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient mb-5">
          <div class="container-fluid">
           <img src="https://i.postimg.cc/Kj18MYNS/logo-1.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="navbar-item">
                  <a class="nav-link"  href="/">Home</a>
                </li>
                <li class="navbar-item">
                  <a class="nav-link"  href="/cadastro">Cadastro</a>
                </li>
                <li class="navbar-item">
                  <a class="nav-link" href="/catagolo-de-produto">Ver Produto</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <main class="container">
        <div class="p-4">
          <h1 class="text-center"><small class="text-muted">Cadastro de</small> produto</h1>
        </div>
        <form class="row g-3" action="" method="post">
          @csrf
          <div class="col-12 col-md-4">
            <input type="text" class="form-control" placeholder="nome" name="nome">
          </div>
          <div class="col-12 col-md-6">
            <input type="text" class="form-control" placeholder="Descrição" name="desc">
          </div>
          <div class="col-12 col-md-6">
            <input type="text" class="form-control" placeholder="Quantidade" name="qtd">
          </div>
          <div class="col-12 col-md-4">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="valor" name="preco"
                aria-label="Dollar amount (with dot and two decimal places)" id="preço">
              <span class="input-group-text">$</span>
            </div>
          </div>

          <div class="col-12 col-md-3 d-flex justify-content-end">
            <button type="reset" class="btn btn-danger bg-gradient mb-3 mx-2">limpar</button>
            <button type="submit" class="btn btn-primary bg-gradient mb-3">Cadastrar</button>
          </div>
        </form>
      </main>
</body>

</html>