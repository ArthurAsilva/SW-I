<?php 
require_once 'produto.class.php';

$produto1 = new Produto("Camiseta", 59.90, 100);

$produto1->mostrarDetalhes();

$produto1->removerEstoque(30);
$produto1->adicionarEstoque(50);

$produto1->mostrarDetalhes();

$produto1->setNome("Camiseta Estampada");
$produto1->setPreco(49.90);

$produto1->mostrarDetalhes();
?>
