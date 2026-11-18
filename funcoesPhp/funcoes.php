<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes{
        private float $num1;
        private float $num2;
        private float $resultado;
        private float $media;
        private float $raiz;
        private float $centimetros;
        private float $raio;
        private float $fahrenheit;
        private float $precoOriginal;
        private float $anos;
        private float $base, $altura;
        private float $comprimento, $largura;
        private float $produtoOriginal;
        private float $distancia, $tempo;
        private float $valorhora, $horastrabalhadas;
        private float $idade;
        private float $baseMaior, $baseMenor;
        private float $dias;

        //Criando um construtor = instância as variáveis -> Cria as variáveis na memória do servidor
        public function __construct(){
            $this->$num1;
            $this->$num2;
            $this->$resultado;
        }//fim do construtor

        //Métodos de acesso e modificadores
        public function __get(string $dado):mixed
        {
            return $this->$dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function SomarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 + $num2;
            return $this->resultado;
        }//fim do método Somar

        public function SubtrairDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 - $num2;
            return $this->resultado;
        }//fim do método Subtrair

        public function MultiplicarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 * $num2;
            return $this->resultado;
        }//fim do método Multiplicar

        public function DividirDoisNumeros(float $num1, float $num2){
            if($num2 <= 0){
                return "Impossível dividir por zero!";
            }else{
                $this->resultado = $num1 / $num2;
                return $this->resultado;
            }
        }//fim do método Dividir

        public function delta(int $a, int $b, int $c){
            $delta = pow($b,2)-4*$a*$c;
            return $delta;
        }//fim do Delta

        public function calcularX1X2(int $a, int $b, int $c){
            $del = $this->delta($a,$b,$c);
            if(del < 0){
                return "Impossível calcular X1 e X2, delta nagativo!";
            }else{
                $x1 = (-$b + sqrt($del))/2*$a;
                $x2 = (-$b - sqrt($del))/2*$a;
                return "X1 = $x1 <br><br> X2 = $x2";
            }
        }//fim do método Bhaskara

        public function dobro(float $num1){
            $this->resultado = $num1 * 2;
            return $this->resultado;
        }//fim do método Dobro de um Número

        public function MediaNumeros (float $num1, float $num2, float $num3){
            $media = ($num1 + $num2 + $num3) / 3;
            return $media;
        }//fim do método Média entre Três Números

        public function RaizQuadrada (int $num1){
            $raiz = sqrt($num1);
            return $raiz;
        }//fim do método Raiz Quadrada

        public function MetrosParaCm (float $num1){
            $centimetros = $num1 * 100;
            return $centimetros;
        }//fim do método Metros para Centímetros

        public function AreaCirculo (float $num1){
            $area = M_PI * pow($num1, 2);
            return $area;
        }//fim do método Área de um Círculo

        public function celsiusParaFahrenheit(float $num1): float {
            $fahrenheit = ($num1 * 9 / 5) + 32;
            return $fahrenheit;
        }//fim do método Celsius para Fahrenheit

        public function desconto(float $precoOriginal): float {
            $precoComDesconto = $precoOriginal * 0.90;
            return $precoComDesconto;
        }//fim do método Desconto

        public function anosParaMeses($anos) {
            return $anos * 12;
        }//fim do método Anos para Meses

        public function parImpar(int $num1): string {
            if ($num1 % 2 === 0) {
                return "Este número é par.";
            }else{
                return "Este número é ímpar.";
            }//fim do if
        }//fim do método Par e Ímpar

        public function triangulo(float $base, float $altura) {
            $area = ($base * $altura) / 2;
            return $area;
        }//fim do método Triângulo

        public function retangular(float $comprimento, float $largura, float $altura) {
            $volume = $comprimento * $largura * $altura;
            return $volume;
        }//fim do método Volume de uma Caixa Retangular

        public function quadradoCubo(int $num1) {
            $quadrado = $num1 ** 2;
            $cubo = $num1 ** 3;
    
            return [
                'quadrado' => $quadrado,
                'cubo' => $cubo
            ];
        }//fim do método Quadrado e Cubo

        public function imposto(float $produtoOriginal) {
            $produtoComImposto = $produtoOriginal * 1.18;
            return $produtoComImposto;
        }//fim do método Imposto

        public function velocidade(float $distancia, float $tempo) {
        if ($tempo <= 0) {
            return "O tempo deve ser maior que zero.";
        }//fim do if
        
        $vm = $distancia / $tempo;
        return $vm . " km/h";
        }//fim do método Velocidade Média

        public function aritmetica(float $num1, float $num2) {
            $media = ($num1 + $num2) / 2;
            return $media;
        }//fim do método Média Aritmética

        public function salarioMensal(float $valorhora, float $horastrabalhadas) {
            $salariomensal = ($valorhora * $horastrabalhadas);
            return $salariomensal;
        }//fim do método Salário Mensal

        public function idadeDias(int $idade) {
            return $idade * 365;
        }//fim do método Idade para Dias

        public function anosRestantes(int $anos) {
            return 100 - $anos;
        }//fim do método Anos Restantes

        public function somaMedia(float $num1, float $num2, float $num3) {
            $soma = $num1 + $num2 + $num3;
            $media = $soma / 3;

            return [
                'soma' => $soma,
                'média' => $media
            ];
        }//fim do método Soma e Média

        //Exercícios Continuação
        public function trapezio(float $baseMaior, float $baseMenor, float $altura){
            $area = (($baseMaior + $baseMenor) * $altura) / 2;
            return $area;
        }//fim do método Trapézio

        public function diasSegundos(int $dias){
            return $dias * 86400;
        }//fim do método Dias para Segundos

        public function somaDigitos(int $num): int {
            $dezena = intdiv($num, 10);
            $unidade = $num % 10;
            
            $soma = $dezena + $unidade;
            return $soma;
        }//fim do método Soma de Digitos

        public function inversoMultiplicativo(float $num): float {
            if ($num == 0) {
                throw new InvalidArgumentException("Não existe inverso multiplicativo para zero.");
            }//fim do if
            
            $inverso = 1 / $num;
            return $inverso;
        }//fim do método Inverso Multiplicativo



        //For
        public function tabuada(float $num1){
            $msg = "";
            for ($i = 0; $i<= 10;$i++){
                $msg .= "<br>$num1 * $i = ".($num1 * $i);
            }//fim do for
            return $msg;
        }//fim do método

        //While
        public function decimalBinario(float $decimal){
            $resultado = "";
            while($decimal / 2 != 0){
                $resultado .= " ".($decimal % 2);//Coletando o resto da divisão
                $decimal = (int)$decimal/2;//Contribuir para o critério de parada
            }//fim do while
            return strrev($resultado);//Mostrando da Direita para Esquerda
        }//fim do método Decimal Binário

        public function decimalHexadecimal (float $decimal){
            $valor = 0;
            $resultado = "";
            while($decimal / 16 != 0){
                $resto = $decimal % 16;
                
                switch($resto){
                    case 10:
                        $resultado .= "A";
                        break;

                    case 11:
                        $resultado .= "B";
                        break;

                    case 12:
                        $resultado .= "C";
                        break;

                    case 13:
                        $resultado .= "D";
                        break;

                    case 14:
                        $resultado .= "E";
                        break;

                    case 15:
                        $resultado .= "F";
                        break;
                    default:
                        $resultado .= $resto;
                }//fim do Switch
                $decimal = (int)$decimal/16;
            }//fim do while
            return strrev($resultado);//Mostrando da Direita para Esquerda
        }//fim do método Decimal Hexadecimal

        //Do While
        public function senha (float $senha){
            $senhaBD = 1234;
            do{
                if ($senha != $senhaBD){
                    $msg = "Erro, digite novamente!";
                }else{
                    $msg = "Bem-vindo!";
                }
            }while($senhaBD != $senha);
            return $msg;
        }//fim do método Senha



        //Exercícios com FOR
        public function crescente(int $num1): string{
            if ($num1 <= 0) {
                return "Por favor, informe um número inteiro positivo.";
            }//fim do if

            $sequencia = "";

            for ($i = 1; $i <= $num1; $i++){
                $sequencia .= $i . " ";
            }//fim do for

            return $sequencia;
        }//fim do método Ordem Crescente

        public function regressiva(int $num1): string{
            if ($num1 <= 0){
                return "Por favor, informe um número inteiro positivo.";
            }//fim do if

            $sequencia = "";

            for ($i = $num1; $i >= 1; $i--){
                $sequencia .= $i . " ";
            }//fim do for

            return $sequencia;
        }//fim do método Ordem Regressiva

        public function somarInteiros(int $num1): int|string{
            if ($num1 <= 0) {
                return "Por favor, informe um número inteiro positivo.";
            }//fim do if

            $soma = 0;

            for ($i = 1; $i <= $num1; $i++){
                $soma += $i;
            }//fim do for

            return $soma;
        }//fim do método Somar Inteiros

        public function multiplos(): string{
            $sequencia = "";

            for ($i = 1; $i <= 100; $i++) {
                
                if ($i % 7 == 0) {
                    $sequencia .= $i . " ";
                }//fim do if
            }//fim do for

            return $sequencia;
        }// fim do método Múltiplos de 7

        public function pares(): string{
            $sequencia = "";
        
            for ($i = 1; $i <= 20; $i++) {
                if ($i % 2 == 0) {
                    $sequencia .= $i . " ";
                }//fim do if
            }//fim do for

            return $sequencia;
        }//fim do método Pares entre 20 Números

        public function notasAlunos(array $notas): string {
            $soma = 0;
            $quantidade = count($notas);

            if ($quantidade == 0){
                return "Nenhuma nota informada.";
            }//fim do if

            for ($i = 0; $i < $quantidade; $i++){
                $soma += (float)$notas[$i];
            }//fim do for

            $media = $soma / $quantidade;
            $mediaFormatada = number_format($media, 2, ',', '.');

            if ($media >= 7.0){
                return "Média: {$mediaFormatada} - Situação: Aprovado";
            }elseif ($media >= 5.0 && $media < 7.0){
                return "Média: {$mediaFormatada} - Situação: Em Recuperação";
            }else{
                return "Média: {$mediaFormatada} - Situação: Reprovado";
            }//fim do if
        }//fim do método Notas de Alunos

        public function mediaTemperaturas($t1, $t2, $t3, $t4, $t5, $t6, $t7){
            $temperaturas = [$t1, $t2, $t3, $t4, $t5, $t6, $t7];
            $soma = 0;
            $acimaDe30 = 0;
            $total = count($temperaturas);

            for ($i = 0; $i < $total; $i++) {
                $tempAtual = floatval($temperaturas[$i]);
                $soma += $tempAtual;

                if ($tempAtual > 30) {
                    $acimaDe30++;
                }//fim do for
            }//fim do for

            $media = $soma / $total;
            $mediaFormatada = number_format($media, 2, ',', '.');

            return "A média das temperaturas é: {$mediaFormatada} °C.<br>" .
                "Quantidade de dias acima de 30 °C: {$acimaDe30} dia(s).";
        }//fim do método Média de Temperaturas

        public function impares(int $n): string{

            if ($n < 1) {
                return "Por favor, informe um número inteiro maior ou igual a 1.";
            }//fim do if

            $somaImpares = 0;

            for ($i = 1; $i <= $n; $i++) {
                if ($i % 2 != 0) {
                    $somaImpares += $i;
                }//fim do if
            }//fim do for

            return "A soma dos números ímpares entre 1 e $n é: $somaImpares";
        }//fim do método Soma dos Números Ímpares

        public function fatorial(int $numero): string{

            if ($numero < 0){
                return "Erro: Informe um número inteiro não negativo.";
            }//fim do if

            $fatorial = 1;

            for ($i = $numero; $i > 1; $i--){
                $fatorial *= $i;
            }//fim do for

            return "O fatorial de $numero é: $fatorial";
        }//fim do método Fatorial

        public function somaQuadrados(int $numero): string {
            
        $soma = 0;

            for ($i = 1; $i <= $numero; $i++) {
                $quadrado = $i ** 2;
                $soma += $quadrado;
            }//fim do for

            return "A soma dos quadrados de 1 até $numero é: $soma";
        }//fim do método Soma de Quadrados

        public function divisibilidade() {
            $divisiveisPor3 = 0;
            $naoDivisiveisPor3 = 0;

            for ($i = 1; $i <= 30; $i++){
                $numero = (int) readline("Digite o {$i}º número inteiro: ");

                if ($numero % 3 === 0) {
                    $divisiveisPor3++;
                }else{
                    $naoDivisiveisPor3++;
                }//fim do if
            }//fim do for

            echo "--- Resultado ---\n";
            echo "Números divisíveis por 3: {$divisiveisPor3}\n";
            echo "Números não divisíveis por 3: {$naoDivisiveisPor3}\n";
        }//fim do método Divisibilidade por 3

    }//fim da classe
?>