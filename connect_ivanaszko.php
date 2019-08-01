
<?php
//conectando ao banco*********************************
      $conex1 = pg_connect("host=localhost 
	port=5432 
	dbname=ivanaszko 
	user=postgres password=postgres") 
	or die("Falha na conexão!".pg_last_error());

?>