<?php
    Class DAO_Padeiro
    {

    public function incluiPadeiro(Padeiro $padeiro)
            {
                $sql = 'insert into padeiro (Id_Pade, Nom_Pade, Cpf_Pade, Idade_Pade) values (?,?,?,?)';
                $pst = Conexao::getPreparedStatement($sql);
                $pst -> bindValue(1, $padeiro -> getId_Pade());
                $pst -> bindValue(2, $padeiro -> getNom_Pade());
                $pst -> bindValue(3, $padeiro -> getCpf_Pade());
                $pst -> bindValue(4, $padeiro -> getIdade_Pade());
                if($pst ->execute()){
                    return true;
                } else {
                    return false;
                }
            }

        public function ListaPadeiro()
        {

            $lista = [];
            $pst = Conexao::getPreparedStatement('select * from Padeiro');
            $pst-> execute();
            $lista = $pst -> fetchALL(PDO::FETCH_ASSOC);
            return $lista;
        }

        public function exclui($id)
        {
            $sql = 'DELETE FROM padeiro WHERE (Id_Pade = ?);';
            $pst = Conexao::getPreparedStatement($sql);
            $pst -> BindValue(1, $id);
            if($pst ->execute()){
                return true;

            } else {
                    return false;
            }
        }
    }

    

?>