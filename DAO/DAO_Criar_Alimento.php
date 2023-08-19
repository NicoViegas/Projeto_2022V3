<?php
    Class DAO_Criar_Alimento
    {

        public function incluiCriar_Alimento(Criar_Alimento $Criar_Alimento)
            {
                $sql = 'insert into Criar_Alimento (Id_Alimento,Quantidade_Ali) values (?,?)';
                $pst = Conexao::getPreparedStatement($sql);
                $pst -> bindValue(1, $Criar_Alimento -> getId_Alimento());
                $pst -> bindValue(2, $Criar_Alimento -> getQuantidade_Ali());
                if($pst ->execute()){
                    return true;
                } else {
                    return false;
                }
            }

    }

?>