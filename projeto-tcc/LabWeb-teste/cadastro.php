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
    <form action="cadastro_script.php" method="POST">
      <h1 id="titulo"><strong>Cadastro de Paciente</strong></h1>
        <div class="input-group">
          <span class="input-group-text"><strong>Nome Completo</strong></span>
          <input id="nomeCompleto" type="text" aria-label="Nome Completo" class="form-control">
        </div>
        <div class="input-group">
          <span class="input-group-text"><strong>Data de Nascimento</strong></span>
          <input id="dataNascimento" type="date" aria-label="Data de Nascimento" class="form-control">
        </div>
        <div class="input-group">
          <span class="input-group-text"><strong>Email</strong></span>
          <input id="email" type="email" aria-label="Email" class="form-control">
        </div>
        <div class="input-group">
          <span class="input-group-text"><strong>Telefone</strong></span>
          <input id="telefone" type="telefone" aria-label="Telefone" class="form-control">
        </div>
        <div class="input-group">
          <span class="input-group-text"><strong>Sexo</strong></span>
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Marque uma opção.</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
          </select>
        </div>
        <div class="input-group">
          <span class="input-group-text"><strong>Você é Diabetico?</strong></span>
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Marque uma opção.</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
            <option value="Não sabe">Não sabe</option>
          </select>
        </div>
        <div class="input-group">
          <span class="input-group-text"><strong>Você é Hipertenso?</strong></span>
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Marque uma opção.</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
            <option value="Não sabe">Não sabe</option>
          </select>
        </div>
        <div class="input-group">
          <span class="input-group-text"><strong>Você está Gestante?</strong></span>
        <select class="form-select" aria-label="Disabled select example" disabled>
          <option selected>Marque uma opção.</option>
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
          <option value="Não sabe">Não sabe</option>
        </select>
      </div>
      <button class="btn btn-primary" type="submit" onsubmit="">Concluído</button>
      </form>

    <div class="row">
      <div class="col-2">col</div>
      <div class="col">col</div>
      <div class="col-2">col</div>
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