<!DOCTYPE html>
<html lang="pt-br">
<head>

<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/css.css">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">


<title>Gypsy/Bebidas</title>
</head>

<style>
body {
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

 .column {
  float: left;
  width: 50%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<body id="home">

<div class="container-fluid">

  <div class="row">
    <div id="top2" class="col-12">
       <img id="img_prod" src="imagens/topo2.jpg" alt="">
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


  <div class="row carousel-porcoes">
  <div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">

    <div class="carousel-inner">

      <div class="carousel-item active">
        <img class="d-block w-100" src="imagens/porcoes1.jpg" alt="Primeiro Slide">
        <div id="leg1" align="center" class="carousel-caption d-none d-md-block">
          <h1 class="legenda-slide">Porções</h1>
          <h3 class="legenda-slide">(Todas as porções acompanham molhos especiais)</h3>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="imagens/porcoes2.jpg" alt="Segundo Slide">
        <div id="leg2" class="carousel-caption d-none d-md-block">
          <h1 class="legenda-slide">Quentes & Frios</h1>
          <!-- <h3 class="legenda-slide">(Todas as porções contém molhos especiais)</h3> -->
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</div>


<div id="corfria" class="row">
  <div class="col-12">

  <!-- <div class="row titulo_porcoes">
    <div class="col-12">
      <h1 class="titulo3">Porções: Frias & Quentes</h1>
    </div>
  </div> -->

  <div id="tit1" class="row titulo_frios">
    <div class="col-12">
      <h1 id="frios" class="titulof">Frios</h1>
    </div>
  </div>

<div class="row fotos2">

  <div class="column">
      <div class="hovereffect">
    <img src="imagens/porcoes/frias/Azeitona.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Azeitonas verdes & Azeitonas pretas</h1>
    </div>
    </div>
  </div>

  <div class="column">
      <div class="hovereffect">
    <img src="imagens/porcoes/frias/Amendoins.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Mix de amendoins</h1>
    </div>
    </div>
  </div>

  <div class="column">
      <div class="hovereffect">
    <img src="imagens/porcoes/frias/Salame.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Salame</h1>
    </div>
    </div>
  </div>

  <div class="column">
      <div class="hovereffect">
    <img src="imagens/porcoes/frias/frios.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Tábua de frios</h1>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="hovereffect">
    <img src="imagens/porcoes/frias/Queijos.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Tábua de queijos</h1>
    </div>
    </div>
  </div>

</div>



  <div id="tit1" class="row titulo_quentes">
    <div class="col-12">
      <h1 id="quentes" class="tituloq">Quentes</h1>
    </div>
  </div>

  </div>
</div>

<div id="corquente" class="row">
<div class="col-12">

  <div class="row fotos2">

  <div class="column">
    <div class="hovereffect">
    <img src="imagens/porcoes/quentes/cebola.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Anéis de cebola</h1>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="hovereffect">
    <img src="imagens/porcoes/quentes/calabresa.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Calabresa acebolada</h1>
    </div>
    </div>
  </div>

  <div class="column">
      <div class="hovereffect">
    <img src="imagens/porcoes/quentes/fritas.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Batata Frita</h1>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="hovereffect">
    <img src="imagens/porcoes/quentes/fritached.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Batata Frita com Cheddar e bacon</h1>
    </div>
    </div>
  </div>

  <div class="column">
      <div class="hovereffect">
    <img src="imagens/porcoes/quentes/rustica.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Batata rústica</h1>
    </div>
    </div>
  </div>

  <div class="column">
      <div class="hovereffect">
    <img src="imagens/porcoes/quentes/Paprica.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Batata rústica com páprica</h1>
    </div>
    </div>
  </div>

  <div class="column">
      <div class="hovereffect">
    <img src="imagens/porcoes/quentes/Mandioca.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Mandioca frita</h1>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="hovereffect">
    <img src="imagens/porcoes/quentes/nuggets.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Nuggets</h1>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="hovereffect">
    <img src="imagens/porcoes/quentes/Polenta.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Polenta frita</h1>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="hovereffect">
    <img src="imagens/porcoes/quentes/peixe.jpg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
    <div class="overlay">
      <h1>Iscas de tilápia</h1>
    </div>
    </div>
  </div>

  </div>


<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 15</div>
      <img src="imagens/porcoes/frias/Azeitona.jpg" style="width:100%">
      <div align="center">
      <h1>Azeitonas verdes & Azeitonas pretas</h1>
      </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 15</div>
      <img src="imagens/porcoes/frias/Amendoins.jpg" style="width:100%">
      <div align="center">
      <h1>Mix de amendoins</h1>
      </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 15</div>
      <img src="imagens/porcoes/frias/Salame.jpg" style="width:100%">
      <div align="center">
      <h1>Salame</h1>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 15</div>
      <img src="imagens/porcoes/frias/frios.jpg" style="width:100%">
      <div align="center">
      <h1>Tábua de frios</h1>
      <h5>(azeitona, muçarela, salame, palmito e tomate seco)</h5>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 15</div>
      <img src="imagens/porcoes/frias/Queijos.jpg" style="width:100%">
      <div align="center">
      <h1>Tábua de queijos</h1>
      <h5>(meia cura, provolone, gorgonzola e lascas de parmesão)</h5>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 15</div>
      <img src="imagens/porcoes/quentes/cebola.jpg" style="width:100%">
      <div align="center">
      <h1>Anéis de cebola</h1>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 15</div>
      <img src="imagens/porcoes/quentes/calabresa.jpg" style="width:100%">
      <div align="center">
      <h1>Calabresa acebolada</h1>
      <h5>(acompanha fatias de pão com azeite)</h5>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 15</div>
      <img src="imagens/porcoes/quentes/fritas.jpg" style="width:100%">
      <div align="center">
      <h1>Batata frita</h1>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 15</div>
      <img src="imagens/porcoes/quentes/fritached.jpg" style="width:100%">
      <div align="center">
      <h1>Batata frita com cheddar e bacon</h1>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 15</div>
      <img src="imagens/porcoes/quentes/rustica.jpg" style="width:100%">
      <div align="center">
      <h1>Batata rústica</h1>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">11 / 15</div>
      <img src="imagens/porcoes/quentes/Paprica.jpg" style="width:100%">
      <div align="center">
      <h1>Batata rústica com páprica</h1>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">12 / 15</div>
      <img src="imagens/porcoes/quentes/Mandioca.jpg" style="width:100%">
      <div align="center">
      <h1>Mandioca frita</h1>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">13 / 15</div>
      <img src="imagens/porcoes/quentes/nuggets.jpg" style="width:100%">
      <div align="center">
      <h1>Nuggets</h1>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">14 / 15</div>
      <img src="imagens/porcoes/quentes/Polenta.jpg" style="width:100%">
      <div align="center">
      <h1>Polenta frita</h1>
    </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">15 / 15</div>
      <img src="imagens/porcoes/quentes/peixe.jpg" style="width:100%">
      <div align="center">
      <h1>Iscas de Tilápia</h1>
    </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <!-- <div class="column">
      <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(1)" alt="Cerveja">
    </div>
    <div class="column">
      <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(2)" alt="Caipirinha">
    </div>
    <div class="column">
      <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(3)" alt="Chopp">
    </div> -->
  </div>
</div>

</div>

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
          <a href="#frios">Frios</a>
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
          <a href="#quentes">Quentes</a>
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

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
