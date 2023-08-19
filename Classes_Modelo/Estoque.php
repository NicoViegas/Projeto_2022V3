<?php
    class Estoque{

        private $Id_Alimento;
        private $Quantidade_Ali;


        public function getId_Alimento()
        {
            return $this->Id_Alimento;
        }


        public function getQuantidade_Ali()
        {
            return $this->Quantidade_Ali;
        }

        public function __construct($Id_Alimento, $Quantidade_Ali)
        {
        
            $this->Id_Alimento = $Id_Alimento;
            $this->Nome_Ali = $Nome_Ali;
            $this->Quantidade_Ali = $Quantidade_Ali;
            
        }

    }
