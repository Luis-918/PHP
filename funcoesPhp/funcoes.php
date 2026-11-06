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
        } //fim do método Celsius para Fahrenheit

        public function desconto(float $precoOriginal): float {
            $precoComDesconto = $precoOriginal * 0.90;
        return $precoComDesconto;
        }

        public function anosParaMeses($anos) {
            return $anos * 12;
        }



    }//fim da Classe
?>