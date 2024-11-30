<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");
?>



<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Moonlab</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">IA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">RV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Programas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Otros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Productos</a></li>
            <li><a class="dropdown-item" href="#">Contactos</a></li>
            
          </ul>
        </li>        
      </ul>
      <form class="d-flex ms-auto" role="Usuario">
            <input class="form-control me-2" type="Usuario" placeholder="Usuario" aria-label="Usuario">
            <input class="form-control me-2" type="Password" placeholder="Password" aria-label="Password">
            <button class="btn btn-outline-success" type="submit">Ingresar</button>
            <button class="btn btn-outline-success" type="submit">Registrarse</button>

      </form>
    </div>
  </div>
</nav>
<div class="fondo">