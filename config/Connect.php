<?php  

	define('HOST', 'localhost');
	define('DATABASE', 'senai3');
	define('USER', 'root');
	define('PASSWORD', '');

	class Connect
	{
		protected $connection;

		function __construct()
		{
			$this->connectDatabase();
		}
		function connectDatabase()
		{
			try {
				$this->connection = new PDO('mysql:host=' . HOST . '; dbname=' . DATABASE, USER, PASSWORD);
				//echo "Conectado com sucesso!";
			} catch (PDOException $e) {
				//echo "Erro: " . $e;
				echo "Ouve algum problema na conexão. Tente novamente mais tarde.";
			}
		}
	}

	//$test = new Connect();

?>