<?php
    Class DAO_Cliente
    {

    public function incluiCliente(Cliente $Cliente)
            {
                $sql = 'insert into Cliente (Id_Cpf, Nom_Cliente) values (?,?)';
                $pst = Conexao::getPreparedStatement($sql);
                $pst -> bindValue(1, $Cliente -> getId_Cpf());
                $pst -> bindValue(2, $Cliente -> getNom_Cliente());
                if($pst ->execute()){
                    return true;
                } else {
                    return false;
                }
            }

        public function ListaCliente()
        {

            $lista = [];
            $pst = Conexao::getPreparedStatement('select * from Cliente');
            $pst-> execute();
            $lista = $pst -> fetchALL(PDO::FETCH_ASSOC);
            return $lista;
        }

    }

?>