<?php
    class professor 
    {
        public function __construct(private int $idprofessor = 0, private string $nome = "", private string $cpf = ""){}

        public function getIdprofessor()
        {
            return $this->idprofessor;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getCpf()
        {
            return $this->cpf;
        }

    }
?>