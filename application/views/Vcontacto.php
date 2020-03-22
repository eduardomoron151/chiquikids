<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ChiquiKids</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>public\bootstrap\css\bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>public\fontawesome\css\all.min.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url();?>public\fonts\Bellota\bellota.css">
  <!-- css main -->
  <link rel="stylesheet" href="<?php echo base_url();?>public\css\main.css">
  <!-- Script scrollreveal -->
  <script src="<?php echo base_url();?>public\scrollreveal\scrollreveal.min.js"></script>
</head>
<body>

  <!-- Navbar Redes Sociales  -->
  <nav class="navbar navbar-expand navbar-dark bg-info">
    <div class="navbar-collapse d-flex justify-content-center justify-content-md-start">
    <a class="navbar-brand">Redes Sociales</a>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="http://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        </li>
      </ul>
    </div>
    <div class="d-none d-md-block">
        <a class="navbar-brand"><i class="fas fa-phone-volume"></i>&nbspContactanos: 0424-2996070</a>
    </div>
  </nav>

  <!-- Navbar Principal -->
  <nav class="navbar navbar-expand-lg bg-white py-0 sticky-top">
    <div class="container">
      <a class="navbar-brand" href="/chiquikids">
        <img src="<?php echo base_url();?>public\img\logoChiquiKids.png" class="d-inline-block align-center" style="width: 250px;" alt="logoChiquiKids">
      </a>
      <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-light navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text" href="<?php echo site_url("/Cinicio");?>#quienesSomos">Quienes somos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text" href="<?php echo site_url("/Cinicio");?>#ProyectoEducativo">Proyecto educativo</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text" href="<?php echo site_url("/Cinicio");?>#nivelesGrupos">Niveles y grupos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text" href="<?php echo site_url("/Cinicio/galeria");?>">Galería de fotos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text" href="<?php echo site_url("/Cinicio/contacto");?>">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Formulario de contacto -->
  <section id="FormContact">
    <div class="container py-4">
      <div class="row m-0 py-4">
        <div class="col-md-5">
          <div class="card border-0 m-0 p-0">
            <div class="card-body">
              <h2 class="card-title contactanos-title">Contacto</h2>
              <h6 class="card-subtitle mb-2 text-muted">Lo que se aprende jugando nunca se olvida</h6>
              <p class="card-text"><i class="fas fa-phone-volume"></i>&nbsp0424-2996070</p>
              <p class="card-text"><i class="fas fa-envelope-open-text"></i>&nbspeduardomoron151@gmail.com</p>
              <p class="card-text"><i class="fas fa-map-marker-alt"></i>&nbsp Maturin, Monagas, Venezuela.<p>
              <p class="card-text"><i class="fas fa-link"></i></i><a href="http://www.chiquikids.com.ve" target="_blank">&nbspwww.chiquikids.com.ve</a><p>
              <img src="" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card border-0 m-0 p-0">
            <div class="card-body">
              <h3 class="card-title contactanos-title">Queremos Ayudarte</h3>
              <form action="">
                <div class="form-group">
                <label for="" class="form-title">Déjanos tus datos y nos pondremos en contacto contigo</label>
                  <input type="text" class="form-control" id="" placeholder="Nombre*">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Teléfono*">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="" placeholder="Email*">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="" placeholder="Mensaje (opcional)" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-info">Enviar</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer pt-5">
    <div class="card border border-0">
      <img src="<?php echo base_url();?>public\img\footerimg5.jpg" class="img-fluid footer-img w-100" style="height: 300px;" alt="">
      <div class="card-img-overlay text-center text-justify text-white">
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-none d-md-block">
              <h3 class="card-title footer-title">Se parte de nuestra comunidad</h3>
              <p class="card-text footer-parrafo">¿Quieres saber si hay cupos disponibles?</p>
              <p class="card-text footer-parrafo">¿O informacion adicional?</p>
              <h5 class="card-title footer-title">Escribenos</h5>
              <p class="card-text footer-parrafo">eduardomoron151@gmail.com</p>
              <h5 class="card-title footer-title">Despues de ti, en las mejores manos</h5>
            </div>
            <div class="col-md-6">
              <h3 class="card-title footer-title">Mantente en contacto</h3>
              <p class="card-text footer-parrafo">Puedes ponerte en contacto con nosotros para cualquier consulta a traves de el numero de teléfono <span>0424-2996070</span></p>
              <h5 class="card-title footer-title">Ven a CHIQUI-KIDS, nuestra casita de colores</h5>
              <a href="<?php echo site_url("/Cinicio/contacto");?>" class="btn btn-info btn-lg">Contacto</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts Bootstrap -->
  <script src="<?php echo base_url();?>public\bootstrap\js\jquery-3.4.1.min.js"></script>
  <script src="<?php echo base_url();?>public\bootstrap\js\popper.min.js"></script>
  <script src="<?php echo base_url();?>public\bootstrap\js\bootstrap.min.js"></script>
  <!-- Script main -->
  <script src="<?php echo base_url();?>public\js\main.js"></script>
</body>
</html>