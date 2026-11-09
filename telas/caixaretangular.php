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
    <title>Volume de uma Caixa Retangular</title>
</head>
<body>
    <h1>Informe os valores abaixo: </h1>
    <form method="POST">
        <label>Informe o comprimento: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe a largura: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe a altura: </label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>
        
        <button type="submit">Calcular a área
        <?php
            if(isset($_POST['primeiroNumero'])){
                $comprimento = $_POST ['primeiroNumero'];
                $largura = $_POST ['segundoNumero'];
                $altura = $_POST ['terceiroNumero'];
            }

            $resultado = $funcoes-> Retangular ($comprimento, $largura, $altura);//Utilizando o método da classe Funcoes
        ?>
        </button>
    </form>
    <?php
        if (isset($_POST['primeiroNumero'])){
            echo "O resultado é: " . $resultado, " de volume";
        }else{
            echo "Preencha os campos";
        }
    ?>

</body>
</html>