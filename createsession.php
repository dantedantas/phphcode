<?Php
require_once("configsession.php");
$_SESSION['user'] = 'Dante DANTAS';	

validaSession();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Session created!</title>
<style type="text/css">
.txt {
	font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
}
</style>
</head>

<body>
<p class="txt">Session created!!!</p>
<p class="txt">User: 
  <?=$_SESSION['user']?>
</p>
<p class="txt">ID:
  <?=session_id();?>
</p>
<p class="txt">Path:
  <?=session_save_path();?>
</p>
<p class="txt"><a href="createsession.php">CREATE SESSION</a> - <a href="session1.php">PAGE 1</a> - <a href="session2.php">PAGE 2</a> - <a href="unsetsession.php">UNSET SESSION</a> - <a href="destrosession.php">DESTROY SESSION</a></p>
</body>
</html>