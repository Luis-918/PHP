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
    <title>Par e Ímpar</title>
</head>
<body>
    <h1>Informe um número: </h1>
    <form method="POST">
        <label>Informe o número: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>
        
        <button type="submit">Mostrar resultado
        <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST ['primeiroNumero'];
            }

            $resultado = $funcoes-> ParImpar ($num1);//Utilizando o método da classe Funcoes
        ?>
        </button>
    </form>
    <?php
        if (isset($_POST['primeiroNumero'])){
            echo "$num1: " . $resultado;
        }else{
            echo "Preencha os campos";
        }
    ?>

</body>
</html>