<?php
// recuperando variaveis do post
$nome_usuario = $_POST['usuarios'];
$senha_usuario = $_POST['senha'];

// incluuindo conexao com o banco
include 'connect_ivanaszko.php';

// consulta banco
$sql="select * from usuario where usu_login_str = '$nome_usuario'";
echo $sql;
$result1 = pg_exec($conex1, $sql) or die("falha na execucao! => ".pg_last_error());
$senha = pg_result ($result1, 0, 3);
$id = pg_result ($result1, 0, 0);
$nivel = pg_result ($result1, 0, 4);

if ($senha == $senha_usuario)
  {
  echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=grava_cookies.php?usuario=$id&nivel=$nivel'>";
  }
  if ($senha <> $senha_usuario)
{
  printf("<h1>Falha de autenticacao</h1>");
}

?>