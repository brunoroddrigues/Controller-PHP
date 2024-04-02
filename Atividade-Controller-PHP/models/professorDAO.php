<?php
    class professorDAO extends conexao
    {
        public function __construct()
        {
            parent :: __construct();
        }

        public function buscar_professor()
        {
            $sql="select * from professores";
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
                return "Problema ao buscar todos os professores";
            }
        }





        public function inserir_professor($professor)
        {
            $sql="insert into professores (nome,cpf) values(?,?)";
            try
            {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1,$professor->getNome());
                $stm->bindValue(2,$professor->getCpf());
                $stm->execute();
                $this->db=null;
            }
            catch(PDOEXCEPTION $e)
            {
                $this->db=null;
                return "Problema ao inserir um professor";
            }
        }



        public function excluir_professor($professor)
		{
			$sql = "DELETE FROM professores WHERE idprofessor = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $professor->getIdprofessor());
				$stm->execute();
				$this->db = null;
				return "Professor excluido";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao excluir um Professor";
			}
		}
    }
?>