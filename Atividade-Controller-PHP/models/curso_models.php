<?php
    class curso_models
    {
        public function __construct(private int $idcurso = 0, 
        private string $nome = ""){}

        public function getIdcurso()
        {
            return $this->idcurso;
        }
        public function getNome()
        {
            return $this->nome;
        }

    }
?>