<?php
    require "Compra.php";
    require "Item.php";
    require "IDesconto.php";
    require "Desconto5Itens.php";
    require "Desconto500Reais.php";
    require "SemDesconto.php";
    require "CalculadoraDeDescontos.php";

    $compra500 = new Compra(500);
    $compra500->addItem(new Item("Item 1",125));
    $compra500->addItem(new Item("Item 2",125));
    $compra500->addItem(new Item("Item 3",125));
    $compra500->addItem(new Item("Item 4",125));

    $compra5Itens = new Compra(400);
    $compra5Itens->addItem(new Item("Item 1",80));
    $compra5Itens->addItem(new Item("Item 2",80));
    $compra5Itens->addItem(new Item("Item 3",80));
    $compra5Itens->addItem(new Item("Item 4",80));
    $compra5Itens->addItem(new Item("Item 5",80));

    $semDesconto = new Compra(400);
    $semDesconto->addItem(new Item("Item 1",400));

    $calculadoraDeDescontos = new CalculadoraDeDescontos();

    echo "Compra 500 Reais e 4 Itens <br />";
    echo "Desconto:";
    echo $calculadoraDeDescontos->desconto($compra500);
    echo "<br />";

    echo "Compra 400 Reais 5 Itens <br />";
    echo "Desconto:";
    echo $calculadoraDeDescontos->desconto($compra5Itens);
    echo "<br />";

    echo "Compra Sem Desconto <br />";
    echo "Desconto:";
    echo $calculadoraDeDescontos->desconto($semDesconto);
    echo "<br />";
?>