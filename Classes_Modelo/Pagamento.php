<?php
    class Pagamento{

        private $Id_Pagamento;
        private $Id_Cpf;
        private $Id_Alimento;
        private $Quantidade_Ali;
        private $Met_Pagamento;
        private $ValTotPagamento;


        public function getId_Pagamento()
        {
            return $this->Id_Pagamento;
        }

        public function getId_Cpf()
        {
            return $this->Id_Cpf;
        }

        public function getId_Alimento()
        {
            return $this->Id_Alimento;
        }

        public function getQuantidade_Ali()
        {
            return $this->Quantidade_Ali;
        }

        public function getMet_Pagamento()
        {
            return $this->Met_Pagamento;
        }

        public function getValTotPagamento()
        {
            return $this->ValTotPagamento;
        }

        public function __construct($Id_Pagamento, $Id_Cpf,$Id_Alimento,$Quantidade_Ali,$Met_Pagamento,$ValTotPagamento)
        {
            $this->Id_Pagamento = $Id_Pagamento;
            $this->Id_Cpf = $Id_Cpf;
            $this->Id_Alimento = $Id_Alimento;
            $this->Quantidade_Ali = $Quantidade_Ali;
            $this->Met_Pagamento = $Met_Pagamento;
            $this->ValTotPagamento = $ValTotPagamento;
        }

    }



?>