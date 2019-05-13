<?php
    class Desconto5Itens implements IDesconto {
        private $proximo;

        public function setProximo(IDesconto $desconto){
            $this->proximo = $desconto;
        }

        public function desconto(Compra $compra){
            if(count($compra->getItens()) >= 5) {
                return $compra->getValor() * 0.1;
            }else {
                return $this->proximo->desconto($compra);
            }            
        }      
          
    }
?>