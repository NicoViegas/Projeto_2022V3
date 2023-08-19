<?php
    class Alimentos{

        private $Id_Pade;
        private $Id_Alimento;
        private $Nome_Ali;
        private $Preco_KG;

        public function getId_Pade()
        {
            return $this->Id_Pade;
        }

        public function getId_Alimento()
        {
            return $this->Id_Alimento;
        }

        public function getNome_Ali()
        {
            return $this->Nome_Ali;
        }

        public function getPreco_KG()
        {
            return $this->Preco_KG;
        }

        public function __construct($Id_Pade, $Id_Alimento, $Nome_Ali, $Preco_KG)
        {
            $this->Id_Pade = $Id_Pade;
            $this->Id_Alimento = $Id_Alimento;
            $this->Nome_Ali = $Nome_Ali;
            $this->Preco_KG = $Preco_KG;
            
        }

    }



?>