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
    <title>Idade para Dias</title>
</head>
<body>
    <h1>Informe a idade abaixo: </h1>
    <form method="POST">
        <label>Informe uma idade: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>
        
        <button type="submit">Calcular a conversão
        <?php
            if(isset($_POST['primeiroNumero'])){
                $idade = $_POST ['primeiroNumero'];
            }

            $resultado = $funcoes-> IdadeDias($idade);//Utilizando o método da classe Funcoes
        ?>
        </button>
    </form>
    <?php
        if (isset($_POST['primeiroNumero'])){
            echo "A idade é: " . $resultado, " dias";
        }else{
            echo "Preencha os campos";
        }
    ?>

</body>
</html>