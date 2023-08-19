<?php
    class Criar_Alimento{

        private $Id_Pade;
        private $Id_Alimento;
        private $Nome_Ali;
        private $Quantidade_Ali;

        public function getId_Pade()
        {
            return $this->Id_Pade;
        }

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
            $this->Quantidade_Ali = $Quantidade_Ali; 
        }

    }
