<?php
    Class DAO_Alimentos
    {

        public function incluiAlimento(Alimentos $alimentos)
            {
                $sql = 'insert into alimentos (Id_Pade, Id_Alimento, Nome_Ali, Preco_KG) values (?,?,?,?)';
                $pst = Conexao::getPreparedStatement($sql);
                $pst -> bindValue(1, $alimentos -> getId_Pade());
                $pst -> bindValue(2, $alimentos -> getId_Alimento());
                $pst -> bindValue(3, $alimentos -> getNome_Ali());
                $pst -> bindValue(4, $alimentos -> getPreco_KG());
                if($pst ->execute()){
                    return true;
                } else {
                    return false;
                }
            }

        public function ListaAlimentos()
        {

            $lista = [];
            $pst = Conexao::getPreparedStatement('select p.Nom_Pade, a.Id_Alimento , a.Nome_Ali, a.Preco_KG from alimentos a 
                                                inner join Padeiro p
                                                on p.Id_Pade = a.Id_Pade;');
            $pst-> execute();
            $lista = $pst -> fetchALL(PDO::FETCH_ASSOC);
            return $lista;
        }

        
    }

?>