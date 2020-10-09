<?php 
 require 'vendor/autoload.php';
  session_start();
echo <<<_INIT
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width,initial-scale=1'>
        <link rel='stylesheet' href='jquery.mobile-1.4.5.min.css'>        
        <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
        
        <script src='javascript.js'></script>
        <script src='jquery-2.2.4.min.js'></script>
        <script src='jquery.mobile-1.4.5.min.js'></script>       
        

_INIT;
    require_once 'functions.php';
    // Se inicializa la variable userstr con un texto de bienvenida
    //$userstr = '¡Bienvenido Artesano!';
    // Verifica si hay una sesión de usuario abierta
    if (isset($_SESSION['user'])) {
        // Asigna la sesión de usuario abierta a la variable user 
        $user    = $_SESSION['user'];
        // Asigna a la variable loggedin el valor de verdadero ya que encontro una sesión abierta
        $loggedin = TRUE;
        // Modifica la variable userstr con un comentario seguido del nombre del usuario de la sesión abierta
        $userstr  = "Has accesado como: $user";
    }
    // En caso de estar abierto una sesión se asigna el valor falso a la variable loggedin
    else $loggedin = FALSE;

echo <<<_MAIN

<title> Social Red: $userstr</title>
    </head> 
    <body>
        <div data-role='page'>
            <div data-role='header'>
                <div id='logo' class='center'>
                
<div class= 'username'>$userstr</div>
            </div>
            <div data-role='content'>
            <section class="hero is-success is-fullheight">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <header class="navbar">
      <div class="container">
        <div class="navbar-brand">
         
          <span class="navbar-burger burger" data-target="navbarMenuHeroC">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroC" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item is-active">
              ¡BIENVENIDO!
            </a>
            
            
          </div>
        </div>
      </div>
    </header>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
      ARTESONLINE
      </h1>
      <h1 class="subtitle">
        Por: Perla Paola Tut Matos
      </h1>
    </div>
  </div>

  
</section>
<div class="container is-fullhd">
  <div class="notification is-primary">
    <h1><strong>¡BIENVENIDO ARTESANO!</strong></h1>
  </div>
</div>
<div class="tile is-ancestor">
  <div class="tile is-vertical is-8">
    <div class="tile">
      <div class="tile is-parent is-vertical">
        <article class="tile is-child notification is-primary">
          <p class="title">¿Qué es ARTESONLINE?</p>
          <p class="subtitle">ARTESONLINE, es un sitio web donde <br> podrás aprender  </br> dos diferentes tipos de arte.</p>
        </article>
        <article class="tile is-child notification is-warning">
          <p class="title">CURSOS QUE OFRECEMOS</p>
          <p class="subtitle">-Curso porcela Fría<br>-Curso tejidos</br></p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-info">
          <p class="title">¡Nuestro logo,que también al inscribirte te representa!</p>
          <p class="subtitle"></p>
          <figure class="image is-4by3">
            <img src="portada2.png">
          </figure>
        </article>
      </div>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child notification is-danger">
        <p class="title">Curso porcelana fría</p>
        <p class="subtitle">Podrás aprender a crear las figuras que tu quieras,<br>apoyandote del curso que te ofrecemos para las técnicas de este arte.</br></p>
        <div class="content">
          <!-- Content -->
        </div>
      </article>
    </div>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child notification is-success">
      <div class="content">
        <p class="title">Cruso tejidos</p>
        <p class="subtitle">Podrás aprender las técnicas de tejido como el crochet y otras más....</p>
        <div class="content">
          <!-- Content -->
        </div>
      </div>
    </article>
  </div>
</div>
<nav class="level">
<div class="level-item has-text-centered">
  <div>
    <p class="heading">Curso porcelana fría</p>
    <p class="title">100 Personas inscritas</p>
  </div>
</div>
<div class="level-item has-text-centered">
  <div>
    <p class="heading">Curso de tejidos</p>
    <p class="title">50 Personas inscritas</p>
  </div>
</div>
<div class="level-item has-text-centered">
  <div>
    <p class="heading">Visitas al sitio web</p>
    <p class="title">10K</p>
  </div>
</div>
<div class="level-item has-text-centered">
  <div>
    <p class="heading">Likes </p>
    <p class="title">789</p>
  </div>
</div>
</nav>     

_MAIN;
    if ($loggedin) {
        // En caso de estar en una sesión abierta te muestra las opciones de navegación de la aplicación
echo <<<_LOGGEDIN
        <div class='center'>
            <a data-role='button' data-inline='true' data icon='Home'
            data-transition="slide"
            href='members.php?view=$user'>Inicio</a>
            <a data-role='button' data-inline='true' data icon='user'
            data-transition="slide" href='members.php'>Miembros</a>
            <a data-role='button' data-inline='true' data icon='heart'
            data-transition="slide" href='friends.php'>Amigos</a><br>
            <a data-role='button' data-inline='true' data icon='mail'
            data-transition="slide" href='messages.php'>Mensajes</a>
            <a data-role='button' data-inline='true' data-icon='edit'
            data-transition="slide" href='profile.php'>Editar Perfiles</a>
            <a data-role='button' data-inline='true' data-icon='action'
            data-transition="slide" href='logout.php'>Salir</a>
        </div>
_LOGGEDIN;
    }
    else {
        // En caso de que no este en una sesión de usuario abierta te muestra las opciones principales para registrarte 
echo <<<_GUEST
        <div class='center'>
            <a data-role='button' data-inline='true' data-icon='home'
            data-transition='slide' href='index.php'>Principal</a>
            <a data-role='button' data-inline='true' data-icon='plus'
            data-transition="slide" href='signup.php'>Registrarte</a>
            <a data-role='button' data-inline='true' data-icon='check'
            data-transition="slide" href='login.php'>Accesar</a>
        </div>
        <p class='info'>(Debe estar registrado para accesar a un curso)</p>
_GUEST;
    }
?>
<script src="bootstrap/jquery-3.2.1.slim.min.js "></script>
<script src="bootstrap/popper.min.js" ></script>
<script src="bootstrap/bootstrap.min.js" ></script>
</body>