<?php 

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/


//Carrega um usuario
/*$ususario = new Usuario();
$ususario->loadById(2);
echo $ususario;
*/

//Carrega uma lista de usuários 
/* $lista = Usuario::getList();
echo json_encode($lista); */

//Carrega uma lista de usuários buscando pelo login
/* $search = Usuario::search("le");
echo json_encode($search); 
 */

//Carrega um usuário usando login e a senha
/*$usuario = new Usuario();
$usuario->login("leonardo", "qwerty");
echo $usuario;*/

//Insert
$aluno = new Usuario("aluno2", "@lun02");
$aluno->insert();

echo $aluno;

?>