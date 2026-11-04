<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes{
        private float $num1;
        private float $num2;
        private float $resultado;

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
        }//fim do delta

        public function calcularX1X2(int $a, int $b, int $c){
            $del = $this->delta($a,$b,$c);
            if(delta($a,$b,$c) < 0){
                return "Impossível calcular X1 e X2, delta nagativo!";
            }else{
                $x1 = (-$b + sqrt(delta($a,$b,$c)))/2*$a;
                $x2 = (-$b + sqrt(delta($a,$b,$c)))/2*$a;
                return "X! = $x1 <br><br> X2 = $x2";
            }
        }//fim do método

        public function dobro(float $num1){
            $this->resultado = $num1 * 2;
            return $this->resultado;
        }

    }//fim da Classe
?>