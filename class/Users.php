<?php  

	require_once "./config/Connect.php";

	class Users extends Connect
	{
		public function insertUser($name, $email, $pass)
		{
			$stmt = $this->connection->prepare("INSERT INTO users (name, email, pass) VALUES (:NAME, :EMAIL, :PASS)");
			$stmt->bindParam(':NAME', $name);
			$stmt->bindParam(':EMAIL', $email);
			$stmt->bindParam(':PASS', $pass);

			$stmt->execute();

			header('Location: index.php');
		}
	}

?>