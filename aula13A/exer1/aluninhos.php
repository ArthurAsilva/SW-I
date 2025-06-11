<?php
   include_once 'aluno_class.php';

   $arthur = new aluno("Arthur", 10, 10);

   $nota1 = $arthur->getnota1();
   $nota2 = $arthur->getnota2();

   $media = $arthur->calcularMedia($nota1, $nota2);

   echo "Aluno: " . $arthur->getNome() . "<br>";
   echo "Nota 1: " . $arthur->getnota1() . "<br>";
   echo "Nota 2: " . $arthur->getnota2() . "<br>";
   echo "Média: " . $arthur->calcularMedia() . "<br>";
   echo "Situação: " . $arthur->verificarSituacao() . "<br>";
?>