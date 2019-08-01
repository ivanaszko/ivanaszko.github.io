<html>
<HEAD>
  <title>.: Funil :.</title>
  
</HEAD>
  <body style=”scrollbar-track-color: red”>
<?php 
  include 'connect_ivanaszko.php';
  $result = pg_exec ($conex1, "select * from usuario order by usu_login_str");
  $tot_tuplas = pg_numrows ($result);
?>

<form name="login" method="POST" action="xp_logon.php">
				<!-- Login -->
				        

                                        <table border="0" cellpadding="0" cellspacing="0" width="300" height="160" background="imagens/login.jpg">
					<tr>
						<td width="300" colspan="3" align="center" valign="bottom" class="verdana11pretobold">
							<b>Login de Usuario</b>
						</td>
					</tr>
					<tr>
						<td width="88" align="center" valign="bottom" rowspan="4">
							<IMG SRC="imagens/cadeado.gif" WIDTH="80" HEIGHT="88" BORDER="0" ALT="">
						</td>
						<td width="212" align="right" colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td width="52" align="left" class="verdana10pretobold">
							<p align="center">
							<font class="tabletextbold">Usuário&nbsp;</font>
						</td>
						<td width="160" align="left">
							<p align="left">
							<select size="1" name="usuarios">
                                                        <option selected>--------Selecione--------</option>
                                                          <?php
                                                          for ($tupla = 0; $tupla < $tot_tuplas; $tupla ++)
                                                            {
                                                            $nome=pg_result($result, $tupla, 1);
                                                            $apelido=pg_result($result, $tupla, 2); 
                                                            echo "<option $apelido>$apelido</option>"; 
                                                            }
                                                            ?>
                                                        </select>
						</td>
					</tr>
					<tr>
						<td width="52" align="right" valign="middle" class="verdana10pretobold">
							<font class="tabletextbold">Senha&nbsp;&nbsp;</font>
						</td>
						<td width="160" valign="middle">
							<input TYPE="password" MAXLENGTH="24" NAME="senha" size="8" style="color: #393f42; font-size: 9pt">
						</td>
					</tr>
					<tr>
						<td width="212" align="center" valign="middle" colspan="2">
							<table border="0" cellpadding="0" cellspacing="0" width="100" height="24">
								<tr>
									<!-- Botão Entrar -->
									<td width="100" height="24" align="center" valign="middle" >
									  <input TYPE="submit" MAXLENGTH="24" NAME="envia" size="8" style="color: #393f42; font-size: 9pt">	
									</td>
									<!-- Botão Entrar -->
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width="140" align="center" valign="middle" colspan="2">&nbsp;</td>
					</tr>
				</table>
				<!-- Login -->
				
			</form>
</body>
</html>