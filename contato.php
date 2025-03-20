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
<?php include 'header.php' ?>

<div class="container1">

    <section class="divcontato">
        <article class="divimgcontato">
            <img src="imgs/mapaliustrativo.jpg" alt="" class="imgcontato">
        </article>

        <article class="txtcontato">
        
            <div>
                <h1 class="titulo">Contatos</h1>
                <hr class="linhatitulo" style="width: 30%;">
            </div>
        
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda perferendis id consequatur doloremque culpa ex nobis molestiae optio, cum atque consequuntur? Eum, quibusdam? Ipsum omnis nulla consectetur expedita nihil architecto!</p>
            </div>

            <!-- Telefone SVG -->
            <div style="margin-top: 50px;">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>

                    (11) 94002-8922
                </p>
            </div>

            <!-- Email SVG -->
            <div style="margin-top: 50px;">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                    </svg>

                    exemplo@gmail.com
                </p>
            </div>

            <!-- Localização SVG -->
            <div style="margin-top: 50px;">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                    </svg>

                    Rua Exemplo, 123 - Cidade SP
                </p>
            </div>

        </article>
    </section>

</div>

<?php include 'footer.php' ?>
</body>
</html>