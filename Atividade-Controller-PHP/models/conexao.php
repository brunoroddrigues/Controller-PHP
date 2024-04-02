<?php
	class conexao
	{
		public function __construct(protected $db = null)
		{
			
			$parametros = "mysql:host=localhost;dbname=atividade_controller;charset=utf8mb4";
			
			$this->db = new PDO($parametros, "root", "");
			
		}
	}//fim da classe
?>