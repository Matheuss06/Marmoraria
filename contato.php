<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/Logo/Logo sem fundo.png" type="image/png">
    <title>Contato - Marmoraria Pedra Bela</title>
    <link rel="stylesheet" href="Css/style.css">
    </head>

<body class="contato-body">
    <?php include "header.php" ?>
<?php
session_start();

// Inicializa o array de avaliações na sessão se ainda não existir
if (!isset($_SESSION['avaliacoes'])) {
    $_SESSION['avaliacoes'] = [];
}

// Verifica se foi enviado um POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);
    $estrelas = intval($_POST["estrelas"]);

    if (!empty($nome) && !empty($mensagem) && $estrelas > 0) {
        // Adiciona a nova avaliação ao início do array
        array_unshift($_SESSION['avaliacoes'], ["nome" => $nome, "mensagem" => $mensagem, "estrelas" => $estrelas]);

        // Mantém apenas as últimas 5 avaliações
        $_SESSION['avaliacoes'] = array_slice($_SESSION['avaliacoes'], 0, 5);
    }
}
?>

<div class="contato-container">
    <h2 class="contato-titulo">Contato</h2>

    <div class="contato-endereco">
        <p>📍 Rua Exemplo, 123 - Bairro Nobre</p>
        <p>🏙️ Cidade, Estado - CEP: 00000-000</p>
        <p>📞 Telefone: (00) 1234-5678</p>
    </div>

    <div class="contato-formulario">
        <h3 class="contato-titulo">Deixe sua Avaliação</h3>
        <form method="post">
            <label class="contato-label" for="nome">Seu Nome:</label>
            <input class="contato-input" type="text" id="nome" name="nome" required>

            <label class="contato-label" for="mensagem">Mensagem:</label>
            <textarea class="contato-textarea" id="mensagem" name="mensagem" rows="4" required></textarea>

            <div class="contato-estrelas">
                <input class="contato-radio" type="radio" id="estrela5" name="estrelas" value="5">
                <label class="contato-estrela" for="estrela5">★</label>
                
                <input class="contato-radio" type="radio" id="estrela4" name="estrelas" value="4">
                <label class="contato-estrela" for="estrela4">★</label>
                
                <input class="contato-radio" type="radio" id="estrela3" name="estrelas" value="3">
                <label class="contato-estrela" for="estrela3">★</label>
                
                <input class="contato-radio" type="radio" id="estrela2" name="estrelas" value="2">
                <label class="contato-estrela" for="estrela2">★</label>
                
                <input class="contato-radio" type="radio" id="estrela1" name="estrelas" value="1">
                <label class="contato-estrela" for="estrela1">★</label>
            </div>

            <button class="contato-botao" type="submit">Enviar Avaliação</button>
        </form>
    </div>

    <div class="contato-avaliacoes">
        <h3 class="contato-titulo">Últimas Avaliações</h3>
        <?php if (!empty($_SESSION['avaliacoes'])): ?>
            <?php foreach ($_SESSION['avaliacoes'] as $avaliacao): ?>
                <div class="contato-avaliacao">
                    <strong><?php echo $avaliacao["nome"]; ?>:</strong>
                    <p><?php echo $avaliacao["mensagem"]; ?></p>
                    <p>
                        <?php for ($i = 0; $i < $avaliacao["estrelas"]; $i++): ?>
                            ⭐
                        <?php endfor; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhuma avaliação ainda. Seja o primeiro a avaliar!</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
