<?php
    Class DAO_Pagamento
    {

        public function incluiPagamento(Pagamento $Pagamento)
            {
                $sql = 'insert into Pagamento (Id_Pagamento, Id_Cpf, Id_Alimento, Quantidade_Ali, Met_Pagamento, valTotPagamento) values (?,?,?,?,?,?)';
                $pst = Conexao::getPreparedStatement($sql);
                $pst -> bindValue(1, $Pagamento -> getId_Pagamento());
                $pst -> bindValue(2, $Pagamento -> getId_Cpf());
                $pst -> bindValue(3, $Pagamento -> getId_Alimento());
                $pst -> bindValue(4, $Pagamento -> getQuantidade_Ali());
                $pst -> bindValue(5, $Pagamento -> getMet_Pagamento());
                $pst -> bindValue(6, $Pagamento -> getvalTotPagamento());
                if($pst ->execute()){
                    return true;
                } else {
                    return false;
                }
            }

        public function ListaPagamento()
        {

            $lista = [];
            $pst = Conexao::getPreparedStatement('select p.Id_pagamento, c.Nom_Cliente, a.Nome_Ali, p.Quantidade_Ali, p.Met_Pagamento, p.ValTotPagamento from pagamento p
                                                 inner join cliente c on c.Id_Cpf = p.Id_Cpf
                                                 inner join alimentos a on a.Id_Alimento = p.Id_Alimento;');
            $pst-> execute();
            $lista = $pst -> fetchALL(PDO::FETCH_ASSOC);
            return $lista;
        }

        public function ListaPagamentoDois($Id_pagamento)
        {

            $lista = [];
            $pst = Conexao::getPreparedStatement('select p.Id_pagamento, c.Nom_Cliente, a.Nome_Ali, p.Quantidade_Ali, p.Met_Pagamento, p.ValTotPagamento from pagamento p
                                                 inner join cliente c on c.Id_Cpf = p.Id_Cpf
                                                 inner join alimentos a on a.Id_Alimento = p.Id_Alimento;
                                                 where Id_pagamento = ?');
            $pst-> bindValue(1, $Id_pagamento);
            $pst-> execute();
            $lista = $pst -> fetchALL(PDO::FETCH_ASSOC);
            return $lista;
        }

        public function exclui($id)
        {
            $sql = 'DELETE FROM pagamento WHERE (Id_Pagamento = ?);';
            $pst = Conexao::getPreparedStatement($sql);
            $pst -> BindValue(1, $id);
            if($pst ->execute()){
                return true;

            } else {
                    return false;
            }
        }

        public function altera(Pagamento $Pagamento){
            $sql = 'update pagamento set Id_Pagamento = ?, Id_Cpf = ?, Id_Alimento = ?, Quantidade_Ali = ?, Met_Pagamento = ?, ValTotPagamento = ?';
            $pst = Conexao::getPreparedStatement($sql);
            $pst-> bindValue(1, $Pagamento -> getId_Pagamento());
            $pst-> bindValue(2, $Pagamento -> getId_Cpf());
            $pst-> bindValue(3, $Pagamento -> getId_Alimento());
            $pst-> bindValue(4, $Pagamento -> getQuantidade_Ali());
            $pst-> bindValue(5, $Pagamento -> getMet_Pagamento());
            $pst-> bindValue(6, $Pagamento -> getValTotPagamento());

            if($pst->execute()){
                return true;
            } else {
                return false;
            }
        }
    }

?>