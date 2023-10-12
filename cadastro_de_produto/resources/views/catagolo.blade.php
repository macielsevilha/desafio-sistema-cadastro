<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Catágolo de produto</title>

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


    <div class="container">
        <h1 class="display-4">Página de catálogo de produto</h1>
        <table class="table">
            <caption>Lista de registro</caption>
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">preço</th>
                <th scope="col">Estoque</th>
                <th scope="col">Editar</th>
                <th scope="col">Apagar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $item)
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->desc }}</td>
                <td>{{ $item->preco }}</td>
                <td>{{ $item->qtd }}</td>
                <td><a href="/catagolo-de-produto/edit/{{ $item->id }}" class="btn btn-primary">Editar</a></td>
                <form action="/catagolo-de-produto/{{ $item->id }}" method="post">
                  @csrf
                  @method('DELETE')
                  <td><button class="btn btn-danger">apagar</button></td>
                </form>
              </tr>
              @endforeach

            </tbody>
          </table>

   
    


    </div>


  
</body>

</html>