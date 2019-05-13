<?php
    class Desconto500Reais implements IDesconto {
        private $proximo;

        public function setProximo(IDesconto $desconto){
            $this->proximo = $desconto;
        }

        public function desconto(Compra $compra){
            if($compra->getValor()  >= 500) {
                return $compra->getValor() * 0.05;
            }else {
                return $this->proximo->desconto($compra);
            }            
        }      

    }
?>