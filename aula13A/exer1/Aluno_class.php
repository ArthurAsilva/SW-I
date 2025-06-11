<?php
class Aluno {
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($n, $n1, $n2) {
        $this->nome = $n;
        $this->nota1 = $n1;
        $this->nota2 = $n2;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNota1() {
        return $this->nota1;
    }

    public function getNota2() {
        return $this->nota2;
    }

    public function calcularMedia() {    
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function verificarSituacao() {
        $media = $this->calcularMedia();
        if ($media >= 7) {
            return "APROVADO";
        } else {
            return "REPROVADO";
        }
    }
}

