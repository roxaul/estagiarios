<?php
	class usuario{
		private $nome;
		private $email;
		
		public function __construct(){
		}
		
		public function getNome(){
		return $this->nome;
		}
		
		public function setNome($nome){
		 $this->nome = $nome;
		}
		
		public function getEmail(){
		return $this->email;
		}
		
		public function setEmail($email){
		$this->email = $email;
		
		}
	
	}
?>