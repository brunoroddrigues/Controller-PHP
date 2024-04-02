<?php
    class alunoDAO extends conexao
    {
        public function __construct()
        {
            parent :: __construct();
        }

        public function buscar_aluno()
        {
            $sql="select * from alunos";
            try
            {
               $stm = $this->db->prepare($sql);
               $stm->execute();
               $this->db = null;
               return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOEXCEPTION $e)
            {
                $this->db=null;
                return "Problema ao buscar um aluno";
            }
        }




        public function inserir_aluno($aluno)
        {
            $sql="insert into alunos (nome) values(?)";
            try
            {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1,$aluno->getNome());
                $stm->execute();
                $this->db=null;
            }
            catch(PDOEXCEPTION $e)
            {
                $this->db=null;
                return "Problema ao inserir um aluno";
            }
        }



 

    }
?>