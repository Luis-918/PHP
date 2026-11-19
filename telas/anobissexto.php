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
    <title>Ano Bissexto</title>
</head>
<body>
    <h1>Informe os valores abaixo: </h1>
    <form method="POST">
        <label>Informe o ano: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Verificar ano
        <?php
            if(isset($_POST['primeiroNumero'])){
                $ano = $_POST['primeiroNumero'];
            }

            $resultado = $funcoes-> VerificarAnoBissexto($ano);//Utilizando o método da classe Funcoes
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