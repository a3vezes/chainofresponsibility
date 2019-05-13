<?php
    class SemDesconto implements IDesconto {
        private $proximo;

        public function setProximo(IDesconto $desconto){
            
        }

        public function desconto(Compra $compra){
            return 0;       
        }      
          
    }
?>