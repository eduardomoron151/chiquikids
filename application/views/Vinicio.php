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
            <a class="nav-link text" href="#quienesSomos">Quienes somos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text" href="#ProyectoEducativo">Proyecto educativo</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text" href="#nivelesGrupos">Niveles y grupos</a>
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

  <!-- Carousel -->
  <section id="slider">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url();?>public\img\slider1_1200_400.jpg" class="d-block w-100" alt="slider1">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="carousel-title">Lo que se aprende jugando nunca se olvida</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url();?>public\img\slider2_1200_400.jpg" class="d-block w-100" alt="slider2">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="carousel-title">Después de tí, en las mejores manos</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url();?>public\img\slider3_1200_400.jpg" class="d-block w-100" alt="slider3">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="carousel-title">Ven a Chiqui-Kids, nuestra casita de colores</h2>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact">
    <div class="text-center p-2 mb-3" style="background-color: rgba(55, 96, 146);">
      <div class="container">
        <h2 class="contact-title d-inline-block px-3">¿Quieres conocernos?</h2>
        <a href="<?php echo site_url("/Cinicio/contacto");?>" class="btn btn-info btn-lg">Contactar</a>
      </div>
    </div>
  </section>

  <!-- About Us (Quienes somos) -->
  <section id="aboutUs">
    <div class="container">
      <div class="aboutUs-title">
        <div class="row justify-content-center">
          <div class="col-mt-auto">
            <h2 class="aboutUs-title" id="quienesSomos">Quiénes somos</h2>
          </div>
        </div>
      </div>
      <!-- Objetivo y Responsabilidad -->
      <div class="row" id="aboutUs-obj-resp">
        <div class="col-md-4">
          <div class="row justify-content-center">
            <h3 class="aboutUs-subTitle">Objetivo</h3>
          </div>
          <p class="text-justify border-top border-primary">
            El Preescolar <span class="span-title">CHIQUI KIDS</span> es mucho más que un centro donde los padres dejan a sus hijos mientras ellos trabajan. Es un auténtico centro de <span class="span-title">Educación Inicial</span> dónde los niños desarrollan todas sus capacidades intelectuales y sociales. El objetivo primordial de nuestro preescolar es ser un referente en el sector a través de sus servicios y a través de un proyecto educativo diferenciador, donde prevalezcan los <span class="span-importan">valores</span>,  la <span class="span-importan">sensibilidad</span> y la <span class="span-importan">calidad humana</span>. Nuestro equipo de trabajo ha desarrollado un completo plan formativo adaptado a cada grupo de edad en función de sus necesidades peculiaridades y características. 
          </p>
        </div>
        <div class="col-md-4 my-auto d-none d-sm-block">
          <div class="row justify-content-center">
            <img src="<?php echo base_url();?>public\img\image_aboutUs.JPG" class="img-fluid" alt="logo">
          </div>
        </div>
        <div class="col-md-4">
          <div class="row justify-content-center">
            <h3 class="aboutUs-subTitle">Responsabilidad social</h3>
          </div>
          <p class="text-justify border-top border-primary">
            Nuestra mayor preocupación como educadores es que los niños estén sensibilizados con lo que ocurre en su entorno, educar con valores sólo puede llevarse a cabo con acciones concretas realizando actividades que <span class="span-importan">fomenten la conciencia</span> del medio donde vivimos observando las necesidades  y  situaciones del momento y lo que se debe hacer para resolverlas o mejorarlas.
          </p>
        </div>
      </div>
      <!-- Mision y vision -->
      <div class="row" id="aboutUs-mis-vis">
        <div class="col-md-6">
          <div class="row justify-content-center">
            <h3 class="aboutUs-subTitle">Misión</h3>
          </div>
          <p class="text-justify border-top border-primary">
            Ofrecer <span class="span-title">Educación Integral</span> de calidad a niños y niñas de edad temprana, para fortalecer sus potencialidades y alcanzar un desarrollo pleno y armónico involucrando la participación comprometida de padres de familia en el proceso educativo para fomentar y desarrollar valores, habilidades, hábitos, destrezas y aptitudes en el niño y niña de preescolar, dentro de un marco de normas y procedimientos que coadyuven a la formación de seres humanos competentes y comprometidos con su entorno institucional, familiar y social. 
          </p>
        </div>
        <div class="col-md-6">
          <div class="row justify-content-center">
            <h3 class="aboutUs-subTitle">Visión</h3>
          </div>
          <p class="text-justify border-top border-primary">
            Destacar la importancia que tiene la <span class="span-title">Educación Inicial</span> en la formación integral y armónica de niños y niñas, fomentando los valores, respeto a la sociedad y al medio ambiente, permitiendo formar las bases de futuras generaciones a fin de ser competentes y comprometidos con las personas que les rodean, con el país y su planeta en pro del desarrollo individual,  nacional  y mundial.
          </p>
        </div>
      </div>
      <!-- Nuestras Instalaciones -->
      <div class="row pb-5" id="aboutUs-instalaciones">
        <div class="col">
          <div class="row justify-content-center">
            <h3 class="aboutUs-subTitle">Nuestras instalaciónes</h3>
          </div>
          <div class="row">
            <div class="col-md-7">
              <p class="text-justify">
                Nuestras instalaciones están pensadas para el disfrute, comodidad y uso de los niños.
              </p>
              <ul class="text-justify">
                <li>
                  Mobiliario sin cantos o esquinas.
                </li>
                <li>
                Suelo de grama natural en jardines para el disfrute de lo natural y amortiguar cualquier caída.
                </li>
              </ul>
              <h5 class="aboutUs-subTitle">Aulas</h5>
              <div class="row">
                <div class="col-md-6">
                  <ul>
                    <li>
                      Las aulas están ambientadas de acuerdo a las normativas M.E.
                    </li>
                    <li>
                      Aire acondicionado.
                    </li>
                    <li>
                      Camaras en todos los salones.
                    </li>
                    <li>
                      Baños visibles adecuados al tamaño de los niños.
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul>
                    <li>
                      Aulas visibles desde el espacio externo.
                    </li>
                    <li>
                      iluminacion y ventilacion natural.
                    </li>
                    <li>
                      Area de higiene (maternal) lavamanos y w.c. adaptados a los más pequeños.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-5 d-none d-md-block">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="<?php echo base_url();?>public\img\amar_construir.JPG" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo base_url();?>public\img\experimentar_descubrir.JPG" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo base_url();?>public\img\Expresar_crear.JPG" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo base_url();?>public\img\Representar_imitar.JPG" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
            </div> 
          </div>
      </div>
      </div>
    </div>
      <!-- Jumbotron -->
      <div class="row" id="aboutUs-jumbotron">
        <div class="col my-auto">
          <div class="jumbotron jumbotron-fluid py-0">
            <div class="container">
              <img src="<?php echo base_url();?>public\img\logoChiquiKids.png" class="img-fluid w-100" alt="LogoJumbotron" style="height: 160px;">
              <h1 class="display-6 text-center jumbotron-title">PREESCOLAR CHIQUI-KIDS</h1>
              <p class="h2 text-center jumbotron-parrafo">Excelencia Educativa</p>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- Project education (Proyecto Educativo) -->
  <section id="educationProject">
    <div class="container">
      <div class="row justify-content-center" id="ProyectoEducativo">
        <div class="col-mt-auto">
          <h2 class="projecEducation-title">Nuestro proyecto educativo</h2>
        </div>
      </div>
      <div class="row" id="ProyectoEducativoPropio">
        <div class="card shadow mb-3 w-100 bg-danger text-white">
          <div class="row no-gutters">
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title text-justify projecEducation-subTitle">Proyecto educativo propio</h5>
                <p class="card-text text-justify">Hemos elaborado un hermoso proyecto educativo basado en las normativas del Ministerio de Educación y en nuestra amplia experiencia profesional trabajando con Educación Inicial, haciendo énfasis tanto en los contenidos, como en los materiales que se utilizan en el mismo.</p>
              </div>
            </div>
            <div class="col-md-4">
              <img src="<?php echo base_url();?>public\img\ProyectoEducativo2.jpg" class="img-fluid card-img" style="height: auto;" alt="ProyectoEducativo">
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="MetodologiaActiva">
        <div class="card shadow mb-3 w-100 bg-success text-white">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?php echo base_url();?>public\img\MetodologiaActiva2.jpg" class="img-fluid card-img" style="height: auto;" alt="MetodologiaActiva">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title display-4 projecEducation-subTitle">Metodologia activa</h5>
                <p class="card-text text-justify">Fundamentada en la teoría de las inteligencias múltiples (Howard  Gardner) por lo que en este proyecto facilitamos a los niños diferentes propuestas educativas que desarrollan las 8 inteligencias (Kinestésica, lingüistica, visual- espacial, lógico-matemática, musical, naturalista, inter-personal e intra-personal).</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="OrientacionBilingue">
        <div class="card shadow mb-3 w-100 bg-info text-white">
          <div class="row no-gutters">
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title display-4 projecEducation-subTitle">Orientacion bilingue</h5>
                <p class="card-text text-justify">Su estructura permite impartir el idioma inglés como segunda lengua, proporcionando a los niños ser más receptivos frente a otras culturas y a comprender mejor la pluralidad del mundo globalizado y en un futuro les será más sencillo aprender otros idiomas.</p>
              </div>
            </div>
            <div class="col-md-4">
              <img src="<?php echo base_url();?>public\img\DisenoBilingue2.jpg" class="img-fluid card-img" style="height: auto;" alt="MetodologiaActiva">
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="FamiliasParticipativas">
        <div class="card shadow mb-3 w-100 bg-warning text-white">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?php echo base_url();?>public\img\FamiliasParticipativas2.jpg" class="img-fluid card-img" style="height: auto;" alt="MetodologiaActiva">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title display-4 projecEducation-subTitle">Familias participativas</h5>
                <p class="card-text text-justify">En el Preescolar CHIQUI-KIDS, se incorpora a las familias como parte activa de la comunidad educativa, a través de actividades formativas y de colaboración directa en la propuesta pedagógica.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="ProyectoVivo">
        <div class="card shadow mb-3 w-100 bg-secondary text-white">
          <div class="row no-gutters">
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title display-4 projecEducation-subTitle">Proyecto vivo</h5>
                <p class="card-text text-justify">Nutriéndose con las experiencias propias de cada niño.</p>
                <a href="<?php echo site_url("/Cinicio/contacto");?>" class="btn btn-primary btn-sm">Conocer más</a>
              </div>
            </div>
            <div class="col-md-4">
              <img src="<?php echo base_url();?>public\img\ExperienciasPropias.jpeg" class="img-fluid card-img" style="height: auto;" alt="MetodologiaActiva">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Niveles o Grupos -->
  <section id="nivelOrGroups">
    <div class="row justify-content-center">
      <div class="col-mt-auto">
        <h2 class="nivelOrGroups-title" id="nivelesGrupos">Niveles y grupos</h2>
      </div>
    </div>
    <div class="row py-3">
      <div class="col-sm-3 px-0">
        <div class="contenedor-img">
          <a href="<?php echo site_url("/Cinicio/galeria");?>">
            <div class="inner">
              <img src="<?php echo base_url();?>public\img\2anos_logo_1_final.png" class="img-fluid img-nivel w-100" style="max-width: 100%; height:auto;" alt="2anos_logo">
            </div>
            <div class="middle">
              <h3 class="img-title">Maternal</h3>
              <p class="img-subTitle">2 años</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-3 px-0">
        <div class="contenedor-img">
          <a href="<?php echo site_url("/Cinicio/galeria");?>">
            <div class="inner">
              <img src="<?php echo base_url();?>public\img\3anos_2_final.png" class="img-fluid img-nivel w-100" style="max-width: 100%; height:auto;" alt="3anos_logo">
            </div>
            <div class="middle">
              <h3 class="img-title">I Grupo</h3>
              <p class="img-subTitle">3 años</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-3 px-0">
        <div class="contenedor-img">
          <a href="<?php echo site_url("/Cinicio/galeria");?>">
            <div class="inner">
              <img src="<?php echo base_url();?>public\img\4anos_logo_final.png" class="img-fluid img-nivel w-100" style="max-width: 100%; height:auto;" alt="4anos_logo">
            </div>
            <div class="middle">
              <h3 class="img-title">II Grupo</h3>
              <p class="img-subTitle">4 años</p>
            </div>
          </a>
        </div>        
      </div>
      <div class="col-sm-3 px-0">
        <div class="contenedor-img">
          <a href="<?php echo site_url("/Cinicio/galeria");?>">
            <div class="inner">
              <img src="<?php echo base_url();?>public\img\5anos_logo_final.png" class="img-fluid img-nivel w-100" style="max-width: 100%; height:auto;" alt="5anos_logo">
            </div>
            <div class="middle">
              <h3 class="img-title">III Grupo</h3>
              <p class="img-subTitle">5 años</p>
            </div>
          </a>
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