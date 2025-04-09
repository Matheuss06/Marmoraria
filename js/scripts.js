// -------------  CARROSEL -----------------  
    const images = document.querySelectorAll('.carousel img');
    let current = 0;

    setInterval(() => {
      images[current].classList.remove('active');
      current = (current + 1) % images.length;
      images[current].classList.add('active');
    }, 4000);
  

  function mostrarOutroCard(botao) {
    const container = botao.closest(".card-container");
    container.querySelector(".card-1").style.display = "none";
    container.querySelector(".card-2").style.display = "block";
  }

  function voltarCard(botao) {
    const container = botao.closest(".card-container");
    container.querySelector(".card-2").style.display = "none";
    container.querySelector(".card-1").style.display = "block";
  }

