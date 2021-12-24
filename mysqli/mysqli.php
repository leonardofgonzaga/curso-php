<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

// Cadastrar 

/*
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (? ,?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#%";

$stmt->execute();
*/

// Consultar

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {
	array_push($data, $row);
	//var_dump($row);
}

echo json_encode($data);

?>