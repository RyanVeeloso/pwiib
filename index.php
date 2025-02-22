<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <style>
      /*
      .row{
        border:2px solid red;
        padding: 5px;
      }
      .row > div {
        border: 2px solid yellow;
        padding :50px 0; 
        text-align:center
      }
        */
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        
        </li>
        <li class="nav-item">
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            php
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Variável</a></li>
            <li><a class="dropdown-item" href="#">If</a></li>
            <li><a class="dropdown-item" href="#">While</a></li>
            <li><a class="dropdown-item" href="#">For</a></li>
            <li><a class="dropdown-item" href="#">Switch</a></li>
            <li><a class="dropdown-item" href="#">Array/vetor</a></li>
          </ul>
        </li>
      
          
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="row">
       
      <div class="col-2">
        
      </div>
      <div class="col-8">
        
      <div class="card">
          <div class="card-header">
              Pesquisar usuaários
          </div>
          <div class="card-body">

              <div class="row">
                  <div class="col-2 offset-2">
                      <button class="btn btn-success">Cadastrar</button>
                  </div>
                  <div class="col-2">
                    Pesquisar
                  </div>
                  <div class="col-3">
                    
                    <input class="form-control" />
                  </div>
                  <div class="col-1">
                  <button class="btn btn-primary">Pesquisar</button>
                  </div>


                  <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
</table>
              </div>
          </div>
        </div>

      </div>

      
</div>
      <div class="col-2">

      </div>

</div>







<?php 
/*
<h1>Sistema de Layout</h1>
<div class="row">
    <div class="col-12">
      Consumindo os 12 espaços
    </div>
</div>

<div class="row">
  <div class="col-md-6 col-sm-12">
    metade esquerda
  </div>
  <div class="col-md-6 col-sm-6 offset-sm-6">
    metade direita
  </div>
</div>

<div class="row">
  <div class="col-4">
      <ul class="list-group">
      <li class="list-group-item">Fernando</li>
      <li class="list-group-item">Vitoria</li>
      <li class="list-group-item">Matheus</li>
      <li class="list-group-item">Marli</li>
      <li class="list-group-item">Daniel</li>
      <li class="list-group-item">João</li>
      <li class="list-group-item">Fabiana</li>
      <li class="list-group-item">Anderson</li>
      <li class="list-group-item">Faberson</li>
      <li class="list-group-item">Emerson</li>
    </ul>
  </div>
  <div class="col-4">
  <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
  </div>
  <div class="col-4">
    direita
  </div>
</div>

<div class="row">
  <div class="col-2">
    Usando col-2
  </div>
  <div class="col-6">
    <div class="alert alert-success">]
      Atenção usuario cadastrado com sucesso
    </div>
  </div>
  <div class="col-3">
    utilizando 3
  </div>
  <div class="col-1">
    1 casa para completar as 12
  </div>
</div>

<div class="row">
  <div class="offset-4 col-4">
        <div class="card">
        <div class="card-header">
          <h2>Cadastro de usuários</h2>
        </div>
        <div class="card-body">
        
        <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

        </div>
        </div>
  </div>
</div>


























    <a href="contato.php">Página de contato</a>

    <button type="button" class="btn btn-primary">Primary</button>

    <?php
        echo "<h1>Titulo do projeto PWII B</h1>";
    ?>
   
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Abrir caixa de confirmação
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tem certeza que deseja sair ?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Você está prestes a sair do sistema , deseja realmente sair do sistema ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não sair</button>
        <button type="button" class="btn btn-success">Sim </button>
      </div>
    </div>
  </div>
</div>


<br />

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Menu de opções
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="http://www.globo.com">Acessar Globo.com</a></li>
    <li><a class="dropdown-item" href="http://www.uol.com.br">Acessar uol.com</a></li>
    <li><a class="dropdown-item" href="usuario.php">Cadastrar Usuários</a></li>
  </ul>
</div>
*/ ?>


    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>