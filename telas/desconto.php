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
    <title>10% de Desconto</title>
</head>
<body>
    <h1>Informe o valor original e descubra o pago: </h1>
    <form method="POST">
        <label>Informe o valor: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>
        
        <button type="submit">Calcular a conversão
        <?php
            if(isset($_POST['primeiroNumero'])){
                $precoOriginal = $_POST ['primeiroNumero'];
            }

            $resultado = $funcoes-> Desconto ($precoOriginal);//Utilizando o método da classe Funcoes
        ?>
        </button>
    </form>
    <?php
        if (isset($_POST['primeiroNumero'])){
            echo "O resultado é: R$ " . $resultado;
        }else{
            echo "Preencha os campos";
        }
    ?>

</body>
</html>