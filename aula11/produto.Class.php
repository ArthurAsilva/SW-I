<?php

class Produto {
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }
    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function adicionarEstoque($qt) {
        if ($qt > 0) {
            $this->quantidade += $qt;
        } else {
            echo "quantidade adicionada deve ser maior que 0.<br>";
        }
    }

    public function removerEstoque($qt) {
        if ($qt > 0 && $qt <= $this->quantidade) {
            $this->quantidade -= $qt;
        } elseif ($qt > $this->quantidade) {
            echo "Estoque insuficiente.<br>";
        } else {
            echo "quantidade para remover deve ser maior que 0.<br>";
        }
    }

    public function mostrarDetalhes() {
        echo "Nome: {$this->nome}<br>";
        echo "Preço: R$ {$this->preco}<br>";
        echo "quantidade em estoque: {$this->quantidade}<br>";
        echo "<hr>";
    }
}
?>
