<?php
    Class DAO_Estoque
    {

        public function ListaEstoque()
        {
            $lista = [];
            $pst = Conexao::getPreparedStatement('select a.Nome_Ali, estoque.Quantidade_Ali from estoque
                                                  inner join alimentos a
                                                  on a.Id_Alimento = Estoque.Id_Alimento;');
            $pst-> execute();
            $lista = $pst -> fetchALL(PDO::FETCH_ASSOC);
            return $lista;
        }

    }

?>