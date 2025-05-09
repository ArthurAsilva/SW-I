<?php
  include_once 'lampada.class.php';
  $lampada1 = new lampada();
  //vardump($lamp1);
  
  $lamp1->fabricante = "Philips";
  $lamp1->tensao = 110;
  $lamp1->potencia = 60;
  $lamp1->cor = "Branca";
  
  $lamp1->mostrardados();

   $lamp1->ligar();
   $lamp1->mostrardados();
?>