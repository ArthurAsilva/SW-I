<?php
    
    class lampada{
        public $fabricante;
        public $tensao;
        public $potencia;
        public $cor;
        public $status;

        public function ligar(){
            $this->status = true;
    
        }
        public function desligar(){
        $this->status = false;
        }
        public function mostrardados(){
          echo"O frabricante é:", $this->fabricante . "br";
          echo"O tensão é:", $this->tensao . "br";
          echo"O potencia é:", $this->potencia . "br";
          echo"O cor é:", $this->cor . "br";
          echo"O status é:", $this->status . "br";
          if($this->status == 1){
            echo"Lampada Ligada" . "br";
          }else{
                echo"Lampada Desligada" . "br";
            }
        
        
        
        
        }

}


?>
