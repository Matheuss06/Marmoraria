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
                <div class="card shadow">
                    <img src="<?php echo $material['imagem']; ?>" class="card-img-top" alt="<?php echo $material['titulo']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $material['titulo']; ?></h5>
                        <p class="card-text"><?php echo $material['descricao']; ?></p>
                        <a href="detalhes.php?id=<?php echo $material['id']; ?>"class="btn btn-dark">Saiba Mais</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
<h1>TESTEEEE</h1>
    </div>
</div>

<?php include "footer.php" ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
  crossorigin="anonymous"></script>

<script src="js/scripts.js"></script>

</html>

