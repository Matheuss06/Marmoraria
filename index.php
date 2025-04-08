<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
    <title>Pedra Bela</title>
</head>
<body>
  <!-- Inclusão do Header -->
  <?php include 'header.php' ?>
  
  <!-- CARROSSEL -->
  <div class="carousel">
      <img src="imgs/Banners/Banner1.png" class="active"/>
        <img src="imgs/Banners/banner2.png" />
          <img src="imgs/Banners/banner3.png"/>
    </div>

    <!-- SOBRE NÓS -->
    <section class="sobre-nos">
      <div class="sobre-texto animate__animated animate__fadeInLeft">
        <h2>Marmoraria Pedra Bela</h2>
        <p>A Pedra Bela é uma empresa com tradição, qualidade e sofisticação para transformar pedras naturais em verdadeiras obras de arte. Com anos de experiência no mercado, oferecemos soluções completas em mármore, granito, quartzo e outras pedras nobres, sempre com atenção aos detalhes e um acabamento impecável. Atuamos desde o desenvolvimento do projeto até a instalação final, garantindo um serviço personalizado e feito sob medida para cada cliente.
        Entre nossos principais serviços estão a produção de bancadas para cozinhas e banheiros, pias esculpidas, tampos de mesas e balcões, escadas, soleiras, peitoris e elementos decorativos como lareiras e painéis em pedra. Também realizamos a restauração e o polimento de superfícies, trazendo de volta o brilho e a beleza natural das pedras com técnicas modernas e seguras.
        Trabalhamos com uma grande variedade de materiais selecionados, oferecendo opções que combinam durabilidade, elegância e estilo para todo tipo de ambiente, seja residencial, comercial ou corporativo. Nosso compromisso é entregar qualidade em cada detalhe, sempre com pontualidade, transparência e um atendimento que coloca o cliente em primeiro lugar.
      </p>
      </div>
              <!-- VIDEO DO SOBRE NÓS -->
      <div class="sobre-video animate__animated animate__fadeInRight">
        <!-- <video src="" controls></video> TESTE -->
      </div>

    </section>

  <!-- PRODUTOS MAIS VENDIDOS -->
    <section class="produtos">
      <h2 class="animate__animated animate__fadeInUp">Produtos Mais Vendidos</h2>
      <div class="produtos-grid">
        <div class="produto animate__animated animate__zoomIn">
          <img src="imgs/Bancada branca.png" alt="Produto 1" />
          <h3>Bancada de Mármore Branco</h3>
        </div>
        <div class="produto animate__animated animate__zoomIn" style="animation-delay: 0.2s;">
          <img src="imgs/Bancada preta sao gabriel.png" alt="Produto 2" />
          <h3>Granito Preto São Gabriel</h3>
        </div>
        <div class="produto animate__animated animate__zoomIn" style="animation-delay: 0.4s;">
          <img src="imgs/Pia de quartzo.png" alt="Produto 3" />
          <h3>Pia de Cozinha em Quartzo</h3>
        </div>
      </div>
    </section>

    <!-- Whatsapp -->
    <a href="https://web.whatsapp.com/send?phone=5511932062416">
		 <img class="whatsapp-link" src="imgs/Redes/whatsapp.png" alt="">
  </a>
  <!-- Inclusão do footer -->
  <?php include "footer.php" ?>
</body>
<!-- SCRIPTS -->
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
crossorigin="anonymous"></script>

<script src="js/scripts.js"></script>

</html>

