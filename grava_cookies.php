<?php
 $valor = $_GET['usuario'];
 $nivel = $_GET['nivel'];
 $cetor = $_GET['cetor'];
 setcookie("usuario", $valor);
 setcookie("nivel", $nivel);
 setcookie("cetor", $cetor);

 include 'connect_ivanaszko.php'; 
 $sql ="select * from usuario u where usu_id_int = $valor";
 $result1 = pg_exec ($conex1, $sql)or die("Falha na execucao!".pg_last_error());
 $nivel = pg_result($result1, $tupla, 4);
 $cetor = pg_result($result1, $tupla, 5);
 
 echo"<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=fotos/index.php'>";


?> 




      
      
      
      
     