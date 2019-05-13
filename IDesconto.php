<?php
    interface IDesconto {       
        public function desconto(Compra $compra);
        public function setProximo(IDesconto $proximo); 
    }
?>