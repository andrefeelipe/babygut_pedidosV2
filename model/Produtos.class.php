<?php

    Class Produtos extends Conexao{
        function __construct(){
            parent::__construct();
        }

        function GetProdutos(){
            $query = "SELECT p.id, p.referencia, p.nome FROM {$this->prefix}referencias p INNER JOIN {$this->prefix}categoria c ON p.categoria = c.id";
            $query .= " ORDER BY p.id DESC";

            $this->ExecuteSQL($query);

            $this->GetLista();
        }

        function GetProdutosID($id){
            $query = "SELECT p.id, p.referencia, p.nome FROM {$this->prefix}referencias p INNER JOIN {$this->prefix}categoria c ON p.categoria = c.id";
            $query .= " AND p.id = {$id}";

            $this->ExecuteSQL($query);

            $this->GetLista();
        }

        private function GetLista(){
            $i = 1;
            while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'id'            => $lista['id'],
                'referencia'    => $lista['referencia'],
                'nome'          => $lista['nome'],
                'imagem'        => Rotas::ImageLink('product1.jpg', 180, 180)
            );
            $i++;
            endwhile;
        }
    }

?>