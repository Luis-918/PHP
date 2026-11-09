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
    <title>Área de um Triângulo</title>
</head>
<body>
    <h1>Informe a base e altura: </h1>
    <form method="POST">
        <label>Informe a base: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe a altura: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>
        
        <button type="submit">Calcular a área
        <?php
            if(isset($_POST['primeiroNumero'])){
                $base = $_POST ['primeiroNumero'];
                $altura = $_POST ['segundoNumero'];
            }

            $resultado = $funcoes-> Triangulo ($base, $altura);//Utilizando o método da classe Funcoes
        ?>
        </button>
    </form>
    <?php
        if (isset($_POST['primeiroNumero'])){
            echo "O resultado é: " . $resultado, " de área";
        }else{
            echo "Preencha os campos";
        }
    ?>

</body>
</html>