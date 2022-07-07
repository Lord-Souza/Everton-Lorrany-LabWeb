<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Labweb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
      <!--menu-->
    <nav class="navbar col-12 me-auto position-fixed navbar-expand-lg  bg-light" style="z-index: 999;">
      <div class="container-fluid col-11 m-auto">
    <a class="navbar-brand" href="index.html">LabWeb</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="info.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="exames.html">Exames</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Paciente
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cadastro.html">Cadastro</a></li>
            <li><a class="dropdown-item" href="login.html">Login</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link" href="">Bem-Estar</a>
        </li>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>
<br>
<br>
 <div class="container">
    <div class="row">
      <?php
      include "conexao.php";


        $nome = $_POST{'nome'};
        $dataNascimento = $_POST{'Nascimento'};
        $email = $_POST{'email'};
        $telefone = $_POST{'telefone'};
        $sexo = $_POST{'sexo'};
        $diabetico = $_POST{'diabetico'};
        $hipertenso = $_POST{'hipertenso'};
        $gestante = $_POST{'gestante'};


        $sql = "INSERT INTO 'cadastro' ('nome', 'nascimento', 'email', 'telefone', 'sexo', 'diabetico', 'hipertenso', 'gestante');

        VALUES ('$nome', '$nascimento', '$email', '$telefone', '$sexo', '$diabetico', '$hipertenso', 'gestante')";

        if (mysqli_querry($conn, $sql)) {
            echo "$nome cadastrado com sucesso!";

        } else {
          echo "$nome NÃO foi cadastrado";
        }


      ?>
    </div>
  </div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>