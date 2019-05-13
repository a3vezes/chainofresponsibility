<?php
    require_once "Desconto500Reais.php";
    require_once "Desconto5Itens.php";
    require_once "SemDesconto.php";

    class CalculadoraDeDescontos {

        public function desconto(Compra $compra){
            $desconto5Itens = new Desconto5Itens();
            $desconto500Reais = new Desconto500Reais();
            $semDesconto = new SemDesconto();

            $desconto5Itens->setProximo($desconto500Reais);
            $desconto500Reais->setProximo($semDesconto);

            $desconto = $desconto5Itens->desconto($compra);

            return $desconto;
        }
    }
?>