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
    <title>Média de 8 Notas</title>
</head>
<body>
    <h1>Informe os valores abaixo: </h1>
    <form method="POST">
        <label>Informe a primeira nota: </label>
        <input type="number" id="nota" name="primeiroNumero"/>
        <br><br>

        <label>Informe a segunda nota: </label>
        <input type="number" id="nota" name="segundoNumero"/>
        <br><br>

        <label>Informe a terceira nota: </label>
        <input type="number" id="nota" name="terceiroNumero"/>
        <br><br>

        <label>Informe a quarta nota: </label>
        <input type="number" id="nota" name="quartoNumero"/>
        <br><br>

        <label>Informe a quinta nota: </label>
        <input type="number" id="nota" name="quintoNumero"/>
        <br><br>

        <label>Informe a sexta nota: </label>
        <input type="number" id="nota" name="sextoNumero"/>
        <br><br>

        <label>Informe a sétima nota: </label>
        <input type="number" id="nota" name="setimoNumero"/>
        <br><br>

        <label>Informe a oitava nota: </label>
        <input type="number" id="nota" name="oitavoNumero"/>
        <br><br>
        
        <button type="submit">Mostrar média
        <?php
            if(isset($_POST['nota'])){
                $notas = $_POST['nota'];
            }

            $resultado = $funcoes->notasAlunos($notas);//Utilizando o método da classe Funcoes
        ?>
        </button>
    </form>
    <?php
        if (isset($_POST['primeiroNumero'])){
            echo "<h3>" . $resultado . "</h3>";
        }else{
            echo "Preencha os campos";
        }
    ?>

</body>
</html>