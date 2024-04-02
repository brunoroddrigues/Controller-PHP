<?php
    class disciplinaDAO extends conexao
    {
        public function __construct()
        {
            parent :: __construct();
        }

        public function buscar_disciplina()
        {
            $sql="select * from disciplinas";
            try
            {
                $stm = $this->db->prepare($sql);
                $stm->execute();
                $this->db=null;
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOEXCEPTION $e)
            {   
                $this->db=null;
                return "Problema ao buscar todas as disciplinas";
            }
   
        }



        public function inserir_disciplina($disciplina)
        {
            $sql="insert into disciplinas (nome) Values(?)";
            try
            {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1,$disciplina->getNome());
                $stm->execute();
                $this->db=null;
            }
            catch(PDOEXCEPTION $e)
            {
                $this->db=null;
                return "Problema ao inserir uma disciplina";
            }
        }
    }
?>