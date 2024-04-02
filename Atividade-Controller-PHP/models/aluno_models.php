<?php
    class aluno_models
    {
        public function __construct(private int $idaluno = 0, 
        private string $nome = ""){}

        public function getIdaluno()
        {
            return $this->idaluno;
        }
        public function getNome()
        {
            return $this->nome;
        }

    }
?>