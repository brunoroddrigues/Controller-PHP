<?php
    class cursoDAO extends conexao
    {
        public function __construct()
        {
            parent :: __construct();
        }

        public function buscar_curso()
        {
            $sql="select * from cursos";
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
                return "Problema ao buscar todos os curso";
            }
   
        }




        public function inserir_curso($curso)
        {
            $sql="insert into cursos (nome) values(?)";
            try
            {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1,$curso->getNome());
                $stm->execute();
                $this->db=null;
            }
            catch(PDOEXCEPTION $e)
            {
                $this->db=null;
                return "Problema ao inserir um curso";
            }
        }
    }
?>