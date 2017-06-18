<?Php
require_once("configsession.php");
session_destroy();

validaSession();
session_start();
session_regenerate_id();

validaSession();
	
//session_unset(session_id());

/*
session_unset();
Limpa TODAS as variaveis mas mantem a sessao ativa (inclindo session_id). O servidor ainda sabe quem é vc.

session_destroy();
Limpa TODAS as variáveis e destroi a sessao principal, mas mantem o ID. 
Chamando o session_start() ele recupera o ID mas nao recupera as variáveis de sessao como USER por exemplo.
Usar o session_regenerate_id() para criar um ID novo. Isso é uma seguranca a mais. A sessao deve ser reiniciada (sessionstart()) antes dele.

session_unset($_SESSION['user']);
Limpa apenas uma ariável da sessao.

*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Session destroyed!</title>
<style type="text/css">
.txt {
	font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
}
</style>
</head>

<body>
<p class="txt">Session destroyed!!!</p>
<p class="txt">User: 
  <?=$_SESSION['user']?>
</p>
<p class="txt">ID:
  <?=session_id();?>
</p>
<p class="txt"><a href="createsession.php">CREATE SESSION</a> - <a href="session1.php">PAGE 1</a> - <a href="session2.php">PAGE 2</a></p>
<p class="txt">&nbsp;</p>
<p class="txt">--</p>
<p class="txt">&nbsp;</p>
<p><strong>session_unset();</strong><br>
Limpa TODAS as variaveis mas mantem a sessao ativa (inclindo session_id). O servidor ainda sabe quem é vc.</p>
<p><strong>session_destroy();</strong><br>
  Limpa TODAS as variáveis e destroi a sessao principal, mas mantem o ID. <br>
  Chamando o session_start() ele recupera o ID mas nao recupera as variáveis de sessao como USER por exemplo.<br>
  Usar o <strong>session_regenerate_id() </strong>para criar um ID novo. Isso é uma seguranca a mais. A sessao deve ser reiniciada (sessionstart()) antes dele.</p>
<p><strong>session_unset($_SESSION['user']);</strong><br>
Limpa apenas uma ariável da sessao.</p>
<p class="txt">&nbsp;</p>
</body>
</html>