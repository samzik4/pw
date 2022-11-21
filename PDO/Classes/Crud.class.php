<?php
    abstract class Crud{
        protected $tabela;
        abstract function inserir();
        abstract function atualizar($campo, $id);

        public function listar(){
            $sqlSelect = "select * from {$this->tabela}";
            $stmt = Conexao::prepare($sqlSelect);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function buscar($campo, $id){
            $sqlSelect = "select * from {$this->tabela} where $campo=:parametro";
            $stmt = Conexao::prepare($sqlSelect);
            $stmt->bindParam(':parametro',$id,PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();           
        }

        public function deletar($campo, $id){
            $sqlSelect = "delete from {$this->tabela} where $campo=:delPar";
            $stmt = Conexao::prepare($sqlSelect);
            $stmt->bindParam(':delPar',$id,PDO::PARAM_INT);
            $stmt->execute();
        }

        public function listaUnico($campo, $campo2){
            $sqlLista = "select $campo, $campo2 from {$this->tabela}";

            $stmt = Conexao::prepare($sqlLista);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function listaOrdenada($campo, $tipo = 'C')
    {
        $order = $tipo === 'C' ? '' : 'DESC';
        $sqlLista = "SELECT * FROM {$this->tabela} ORDER BY $campo $order";

        $stmt = Conexao::prepare($sqlLista);

        $stmt->execute();

        return $stmt->fetchAll();
    }
    }