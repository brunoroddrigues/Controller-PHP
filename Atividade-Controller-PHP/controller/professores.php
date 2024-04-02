<?php
   require_once "models/conexao.php";
   require_once "models/professorDAO.php";
   require_once "models/professor.php";
   
    class professores
    {
       public function listar()
       {
           $professorDAO = new professorDAO();
           $retorno = $professorDAO->buscar_professor();
           require_once "views/listar_professores.php";
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
               if($_POST["cpf"] == "")
               {
                   echo"<script>
                   alert('Preencha o cpf');
                   </script>";
                   $erro = true;
               }
               if($erro == false)
               {
                $professor = new professor(0, $_POST["nome"], $_POST["cpf"]);
                $professorDAO = new professorDAO();
                $professorDAO->inserir_professor($professor);
                header("location:index.php?controle=professores&metodo=listar");
               }
           }
           require_once "views/form_professor.php";
       }



       public function excluir()
		{
			if(isset($_GET["idprofessor"]))
			{
				$professor = new professor($_GET["idprofessor"]);
				$professorDAO = new professorDAO();
				$professorDAO->excluir_professor($professor);
				header("location:index.php?controle=professores&metodo=listar");
			}
		}
    }
?>