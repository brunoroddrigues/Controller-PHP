<?php
     require_once "models/conexao.php";
     require_once "models/alunoDAO.php";
     require_once "models/aluno_models.php";

    class aluno
    {
        public function listar()
        {
           $alunoDAO = new alunoDAO();
           $retorno = $alunoDAO->buscar_aluno();
           require_once "views/listar_alunos.php";
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
                   $aluno = new aluno_models(0, $_POST["nome"]);
                   $alunoDAO = new alunoDAO();
                   $alunoDAO->inserir_aluno($aluno);
                   header("location:index.php?controle=aluno&metodo=listar");
                }
            }
            require_once "views/form_aluno.php";
        }


        
    }
?>