<?php
    require_once "models/conexao.php";
    require_once "models/disciplinaDAO.php";
    require_once "models/disciplinas.php";

    class disciplina 
    {
        public function listar()
        {
           // buscar no banco de dados, os cursos cadastrados
            $disciplinaDAO = new disciplinaDAO();
            $retorno = $disciplinaDAO->buscar_disciplina();
           // mostrar os dados que vieram do banco de dados em uma visao
           require_once "views/listar_disciplinas.php";
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
                   $disciplina = new disciplinas(0, $_POST["nome"]);
                   $disciplinaDAO = new disciplinaDAO();
                   $disciplinaDAO->inserir_disciplina($disciplina);
                   header("location:index.php?controle=disciplina&metodo=listar");
               }
            }
            require_once "views/form_disciplinas.php";
        }
    }
?>