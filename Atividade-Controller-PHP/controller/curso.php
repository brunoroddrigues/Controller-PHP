<?php
    require_once "models/conexao.php";
    require_once "models/cursoDAO.php";
    require_once "models/curso_models.php";

    class curso 
    {
        public function listar()
        {
           // buscar no banco de dados, os cursos cadastrados
            $cursoDAO = new cursoDAO();
            $retorno = $cursoDAO->buscar_curso();
           // mostrar os dados que vieram do banco de dados em uma visao
           require_once "views/listar_cursos.php";
        } 




        public function inserir()
        {
            $erro = false;
            if($_POST)
            {
                if($_POST["nome"] == "")
                {
                    echo"<script>
                    alert('Preencha o nome');
                    </script>";
                    $erro = true;
                }
                if($erro == false)
                {
                   $curso = new curso_models(0, $_POST["nome"]);
                   $cursoDAO = new cursoDAO(); 
                   $cursoDAO->inserir_curso($curso);
                   header("location:index.php?controle=curso&metodo=listar");
                }
            }
            require_once "views/form_curso.php";
        }
    }
?>