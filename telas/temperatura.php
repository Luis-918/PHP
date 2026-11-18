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
    <title>Média de Temperaturas da Semana</title>
</head>
<body>
    <h1>Digite as 7 temperaturas (°C): </h1>
    <form method="POST">
        <label>Informe a temperatura do primeiro dia: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe a temperatura do segundo dia: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe a temperatura do terceiro dia: </label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <label>Informe a temperatura do quarto dia: </label>
        <input type="number" id="quartoNumero" name="quartoNumero"/>
        <br><br>

        <label>Informe a temperatura do quinto dia: </label>
        <input type="number" id="quintoNumero" name="quintoNumero"/>
        <br><br>

        <label>Informe a temperatura do sexto dia: </label>
        <input type="number" id="sextoNumero" name="sextoNumero"/>
        <br><br>

        <label>Informe a temperatura do sétimo dia: </label>
        <input type="number" id="setimoNumero" name="setimoNumero"/>
        <br><br>

        <label>Informe a temperatura do oitavo dia: </label>
        <input type="number" id="oitavoNumero" name="oitavoNumero"/>
        <br><br>
        
        <button type="submit">Mostrar as médias
        <?php
            if(isset($_POST['primeiroNumero'])){
                $t1 = $_POST ['primeiroNumero'];
                $t2 = $_POST ['segundoNumero'];
                $t3 = $_POST ['terceiroNumero'];
                $t4 = $_POST ['quartoNumero'];
                $t5 = $_POST ['quintoNumero'];
                $t6 = $_POST ['sextoNumero'];
                $t7 = $_POST ['setimoNumero'];
            }

            $resultado = $funcoes-> MediaTemperaturas($t1, $t2, $t3, $t4, $t5, $t6, $t7);//Utilizando o método da classe Funcoes
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