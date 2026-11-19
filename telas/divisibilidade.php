<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisibilidade por 3</title>
</head>
<body>
    <h1>Informe 30 números inteiros: </h1>
    <form method="POST">
        <?php for ($i = 1; $i <= 30; $i++): ?>
            <label for="num_<?= $i ?>"><?= $i ?>º número:</label>
            <input type="number" id="num_<?= $i ?>" name="numeros[]" required>
            <br><br>
        <?php endfor; ?>

        <button type="submit">Verificar divisibilidade por 3
        </button>
    </form>
    <?php if ($resultado !== ""): ?>
        <?= $resultado ?>
    <?php else: ?>
        <p>Preencha os 30 campos e clique no botão.</p>
    <?php endif; ?>

</body>
</html>