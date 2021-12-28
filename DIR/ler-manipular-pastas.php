<?php 

$name = "images";

if (!is_dir($name)) {
	mkdir($name);
	echo "Diretorio $name criado com sucesso!";
} /*else {
	rmdir($name);
	echo "Já existe o diretório: $name, foi removido!";
}*/

///////////////////////////////////////////////////////////////////////////

$images = scandir("images");
$data = array();

foreach ($images as $img) {
	if (!in_array($img, array(".", ".."))) {
		$filePath = "images" . DIRECTORY_SEPARATOR . $img;
		$info = pathinfo($filePath);
		$info["size"] = filesize($filePath);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filePath));
		$info["url"] = "http://localhost/DIR/" . str_replace("\\", "/", $filePath);
		array_push($data, $info);
	}
}

echo json_encode($data);

?>