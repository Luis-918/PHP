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
    <title>Validação de Idade</title>
</head>
<body>
    <h1>Informe os valores abaixo: </h1>
    <form method="POST">
        <label>Informe uma idade: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>
        
        <button type="submit">Mostrar faixa etária
        <?php
            if(isset($_POST['primeiroNumero'])){
            $idade = $_POST['primeiroNumero'];
            }

            $resultado = $funcoes-> validarIdades($idade);//Utilizando o método da classe Funcoes
        ?>
        </button>
    </form>
    <?php
        if (isset($_POST['primeiroNumero'])){
            echo "Faixa etária: " . $idade;
        }else{
            echo "Preencha os campos";
        }
    ?>

</body>
</html>