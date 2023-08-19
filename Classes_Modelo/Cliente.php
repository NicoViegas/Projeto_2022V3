<?php
    class Cliente{

        private $Id_Cpf;
        private $Nom_Cliente;

        public function getId_Cpf()
        {
            return $this->Id_Cpf;
        }

        public function getNom_Cliente()
        {
            return $this->Nom_Cliente;
        }

        public function __construct($Id_Cpf, $Nom_Cliente)
        {
            $this->Id_Cpf = $Id_Cpf;
            $this->Nom_Cliente = $Nom_Cliente;
            
        }

    }



?>