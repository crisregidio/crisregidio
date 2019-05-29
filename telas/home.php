<!DOCTYPE html>
<html lang="pt-br">

<head>

  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $("#divConteudo").hide();

        $("#btnMostrarEsconder").click(function (e) {
            $("#divConteudo").toggle();
        });
    });
</script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/css.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">

  <title>Gypsy/Home</title>
</head>
<body id="home">


  <div class="container-fluid">
    <div class="row">
      <div id="top" class="col-12">
        <img src="imagens/topo.jpg" alt="">
      </div>
    </div>


    <div class="row">
      <div id="menu" class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark menu" >
          <a id="icone" class="navbar-brand" href="home.php"><img src="imagens/icone.png" alt="" width="85px" height="160px">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="bebidas.php">Bebidas <span class="sr-only">(current)</span><img src="https://img.icons8.com/color/52/000000/beer-glass.png"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lanches.php">Lanches <img src="https://img.icons8.com/color/52/000000/hamburger.png"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="porcoes.php">Porções <img src="https://img.icons8.com/color/52/000000/french-fries.png"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="destaque.php">Destaques <img src="https://img.icons8.com/color/52/000000/filled-star.png"></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <div id="tit1" class="row titulo">
      <div class="col-12">
        <h1 class="titulo1">Quem somos</h1>
      </div>
    </div>

    <div class="row parallax1">
      <div class="col-12">
        <div class="container">
          <h1 class="para-titulo">Lorem ipsum dolor sit amet.</h1>
          <p class="para-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

      </div>
    </div>

    <div id="tit2" class="row titulo">
      <div class="col-12">
        <h1 class="titulo1">Conheça a Gypsy</h1>
      </div>
    </div>

    <div class="row parallax2">
      <div class="col-12">
        <div align="center">

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-90 luz" src="imagens/slide1.jpg" alt="Primeiro Slide">
                <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>Local</h5>
                  <p>...</p> -->
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-90 luz" src="imagens/slide2.jpg" alt="Segundo Slide">
                <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>Ambiente</h5>
                  <p>...</p> -->
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-90 luz" src="imagens/slide3.jpg" alt="Terceiro Slide">
                <div class="carousel-caption d-none d-md-block">
                  <a id="mais" href="destaque.php"><h3><b>SAIBA MAIS</b></h3></a>

                  <p>...</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
        </div>

      </div>
    </div>

    <div id="tit2" class="row titulo">
      <div class="col-12">
        <h1 class="titulo1">Local</h1>
      </div>
    </div>

     <div id="divConteudo">
    <div class="row local" align="center">
      <div class="col-sm-12" style="margin-top:20px">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1559087844363!6m8!1m7!1sCAoSLEFGMVFpcE9iRUhQVkZWRWR5SFloSTNQT0FBN1JGb0ZBa1ZFZXlnY1kzMnVS!2m2!1d-22.4102205!2d-47.5651677!3f168.94554144646415!4f-6.09856935652104!5f0.7820865974627469" width="85%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-sm-12" style="margin-top:20px">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1559088040071!6m8!1m7!1sCAoSLEFGMVFpcE1ZQmJnNHk4cnpON3pRbVBSelFGZ1FKQjJUdkNzQ04wb3pvdHp3!2m2!1d-22.4102205!2d-47.5651677!3f312.79426926502754!4f-8.997278932402722!5f0.7820865974627469" width="85%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-sm-12" style="margin-top:20px">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1559092727770!6m8!1m7!1sCAoSLEFGMVFpcE1iYTRrSm5ZUWo1TFBtZ3RkYmRBRnZkM2RwbnNXTE9IZVRLb3Ro!2m2!1d-22.4102205!2d-47.5651677!3f347.6330331481499!4f-8.43844591418879!5f0.7820865974627469" width="85%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-sm-12" style="margin-top:20px">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1559092825750!6m8!1m7!1sCAoSLEFGMVFpcE9Od0FSWE5ZRjJBZWU3QldJTmJYa1dFYTNUbkpXMm41dk9XMWpO!2m2!1d-22.4102205!2d-47.5651677!3f36.51134716254025!4f0.9808972949747812!5f0.4000000000000002" width="85%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

    </div>


    <div class="row">
      <button id="btnMostrarEsconder"type="button" style="width:100%"><span id="seta" style='font-size:25px;'>&#9660;</span></button>

    </div>


    <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.49943328715!2d-47.567356384585935!3d-22.410220485266585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c7db68bf0a244d%3A0x625975b643b07684!2sGypsy+Pub!5e0!3m2!1sen!2sus!4v1559087156616!5m2!1sen!2sus" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="row rodape">
      <div class="col-md-2 col-sm-12 logo_rodape">
        <a href="home.php"><img id="logo" src="imagens/logo.png" alt=""></a>

      </div>

      <div class="col-md-10 col-sm-12">

        <div class="row titulo_rodape ">

          <div class="col-lg-9 col-md-12 col-sm-12">
            <h3>Mapa do site</h3>
          </div>

          <div class="col-lg-3 col-md-12 col-sm-12">
          </div>

        </div>

        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12">
            <p>
              <a href="#tit1">Quem somos</a>
            </p>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
            <p>
              <a href="bebidas.php">Bebidas</a>
            </p>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
            <h3>Contato</h3>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12">
            <p>
              <a href="#tit2">Conheça a Gypsy</a>
            </p>
          </div>

          <div class="col-lg-3 col-md-12 col-sm-12">
            <p>
              <a href="lanches.php">Lanches</a>
            </p>
          </div>

          <div class="col-lg-3 col-md-12 col-sm-12">
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
              width="26" height="26"
              viewBox="0 0 192 192"
              style=" fill:#bc2d01;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#bc2d01"><g id="surface1"><path d="M96,1.38462c-31.84615,0 -57.69231,25.84615 -57.69231,57.69231c0,31.84615 50.30769,88.70192 50.30769,131.53846h14.76923c0,-42.72115 50.30769,-102.25961 50.30769,-131.53846c0,-31.84615 -25.84615,-57.69231 -57.69231,-57.69231zM96,82.73077c-13.06731,0 -23.65385,-10.61538 -23.65385,-23.65385c0,-13.03846 10.58654,-23.65385 23.65385,-23.65385c13.06731,0 23.65385,10.58654 23.65385,23.65385c0,13.06731 -10.58654,23.65385 -23.65385,23.65385z"></path></g></g></g></svg>
              Rio Claro,Rua 8 1205, entre Av 2 e 4
            </p>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12">

          </div>

          <div class="col-lg-3 col-md-12 col-sm-12">
            <p>
              <a href="porcoes.php">Porções</a>
            </p>
          </div>

          <div class="col-lg-3 col-md-12 col-sm-12">
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
              width="26" height="26"
              viewBox="0 0 192 192"
              style=" fill:#bc2d01;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#bc2d01"><g id="surface1"><path d="M17.76923,22.15385c-9.60577,0 -17.76923,8.13462 -17.76923,18.46154v73.84615c0,10.32693 8.16346,18.46154 17.76923,18.46154h11.76923v-28.15385l-17.07692,12.69231l17.07692,-17.76923v-22.15385c0,-5.16346 1.44231,-10.32692 4.38462,-14.76923l-29.53846,-22.84615l33.23077,18.46154c5.16346,-4.4423 11.16346,-6.69231 17.07692,-6.69231h73.84615l21.46154,-11.76923l-14.76923,11.76923h19.84615v-11.07692c0,-10.32692 -8.16346,-18.46154 -17.76923,-18.46154zM54.69231,59.07692c-9.60577,0 -17.76923,8.13462 -17.76923,18.46154v73.84615c0,10.32693 8.16346,18.46154 17.76923,18.46154h119.53846c9.60577,0 17.76923,-8.13461 17.76923,-18.46154v-73.84615c0,-10.32692 -8.16346,-18.46154 -17.76923,-18.46154zM41.30769,76.84615l73.15385,40.61538l73.15385,-40.61538l-46.61538,36.92308l38.53846,40.61538l-46.61538,-34.84615l-18.46154,12.69231l-18.46154,-12.69231l-46.61538,34.84615l38.53846,-40.61538z"></path></g></g></g></svg>
              gypsypubrc@gmail.com
            </p>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12">

          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
            <p>
              <a href="destaque.php">Destaques</a>
            </p>
          </div>

          <div class="col-lg-3 col-md-12 col-sm-12">
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
              width="26" height="26"
              viewBox="0 0 192 192"
              style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#bc2d01"><g id="surface1"><path d="M165.31731,133.125c-11.42308,-9.77885 -23.04808,-15.72115 -34.32693,-5.94231l-6.75,5.88462c-4.93269,4.29808 -14.10577,24.31731 -49.5577,-16.5c-35.45192,-40.73077 -14.36538,-47.07692 -9.40384,-51.3173l6.77885,-5.91347c11.22115,-9.77884 6.98077,-22.09615 -1.125,-34.78846l-4.875,-7.67308c-8.13462,-12.63461 -17.01923,-20.9423 -28.26923,-11.19231l-6.08654,5.33654c-4.99038,3.60577 -18.89423,15.40384 -22.26923,37.78846c-4.06731,26.85577 8.76923,57.63462 38.10577,91.38462c29.30769,33.77885 58.03846,50.74039 85.21154,50.45192c22.58653,-0.25961 36.25961,-12.375 40.52884,-16.78846l6.08654,-5.33654c11.25,-9.75 4.26923,-19.70192 -7.1827,-29.48077z"></path></g></g></g></svg>
              (19) 99613-1600
            </p>
          </div>
        </div>

      </div>

    </div>


    <div class="footer">
      <p id="gypsy" >
        <b>Siga-nos:</b>
        <a class="icons" href="https://www.instagram.com/explore/tags/gypsypub/" target="_blank"><img src="imagens/insta.png" alt=""></a>

        @gypsypub
        <a class="icons" href="https://pt-br.facebook.com/gypsypubrc/" target="_blank"><img src="imagens/face.png" alt=""></a>

        /gypsybeer

      </p>

    </div>



  </div>


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
