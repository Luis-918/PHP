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
    <title>Acumulador de Valores entre 200</title>
</head>
<body>
    <h1>Informe os valores abaixo: </h1>
    <form method="POST">
        <label>Informe um número: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe outro número: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>
        
        <button type="submit">Somar números
        <?php
            if(isset($_POST['primeiroNumero'])){
                $numero = $_POST ['primeiroNumero'];
                $somaAtual = $_POST ['segundoNumero'];
            }

            $resultado = $funcoes-> acumuladorValores($numero, $somaAtual);//Utilizando o método da classe Funcoes
        ?>
        </button>
    </form>
    <?php
        if (isset($_POST['primeiroNumero'])){
            echo $resultado;
        }else{
            echo "Preencha os campos";
        }
    ?>

</body>
</html>