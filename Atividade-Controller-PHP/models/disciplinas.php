<?php
    class disciplinas
    {
        public function __construct(private int $iddisciplina = 0, private string $nome = ""){}

        public function getIddisciplina()
        {
            return $this->idprofessor;
        }
        public function getNome()
        {
            return $this->nome;
        }
    }
?>