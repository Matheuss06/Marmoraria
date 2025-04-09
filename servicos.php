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

<!-- Inclusão do Banco -->
<?php include 'banco.php' ?>

<!-- Inclusão do Header -->
<?php include 'header.php' ?>

<!-- Serviços -->
<div class="container my-5">


    <div class="row g-4">  
    <?php  foreach ($dados as $material): ?>
        <div class="col-md-4">
            <div class="card-container">
                <div class="card card-1">
                    <div class="card-details">
                        <img src="<?php echo $material['imagem']; ?>" alt="<?php echo $material['titulo']; ?>" class="imgcard">
                    </div>
                <button class="card-button" onclick="mostrarOutroCard(this)">Mais Detalhes</button>
                </div>

                <div class="card card-2" style="display: none;">
                    <div class="card-details">
                        <h3 class="text-title">Informações completas</h3>
                        <p class="text-body">Produto feito com granito preto, pia embutida, 120x60 cm. Ideal para cozinhas modernas.</p>
                        <button class="card-button" onclick="voltarCard(this)">Voltar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>
<?php include "footer.php" ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
  crossorigin="anonymous"></script>

<script src="js/scripts.js"></script>


</html>

