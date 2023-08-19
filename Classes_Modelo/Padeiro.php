<?php
    class Padeiro{

        private $Id_Pade;
        private $Nom_Pade;
        private $Cpf_Pade;
        private $Idade_Pade;

        public function getId_Pade()
        {
            return $this->Id_Pade;
        }

        public function getNom_Pade()
        {
            return $this->Nom_Pade;
        }

        public function getCpf_Pade()
        {
            return $this->Cpf_Pade;
        }

        public function getIdade_Pade()
        {
            return $this->Idade_Pade;
        }

        public function __construct($Id_Pade, $Nom_Pade, $Cpf_Pade, $Idade_Pade)
        {
            $this->Id_Pade = $Id_Pade;
            $this->Nom_Pade = $Nom_Pade;
            $this->Cpf_Pade = $Cpf_Pade;
            $this->Idade_Pade = $Idade_Pade;
            
        }

    }



?>