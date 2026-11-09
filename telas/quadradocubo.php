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
    <title>Quadrado e Cubo</title>
</head>
<body>
    <h1>Informe um número: </h1>
    <form method="POST">
        <label>Informe o número: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>
        
        <button type="submit">Calcular o quadrado e cubo 
        <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST ['primeiroNumero'];
                $resultado = $funcoes->quadradoCubo($num1);
            }

            $resultado = $funcoes-> QuadradoCubo ($num1);//Utilizando o método da classe Funcoes
        ?>
        </button>
    </form>
    <?php
        if (isset($_POST['primeiroNumero'])){
            echo "O quadrado de $num1 é: " . $resultado['quadrado'] . "<br>";
            echo "O cubo de $num1 é: " . $resultado['cubo'];
        }else{
            echo "Preencha os campos";
        }
    ?>

</body>
</html>