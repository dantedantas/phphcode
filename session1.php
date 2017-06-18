<?Php
require_once("configsession.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Session 1</title>
<style type="text/css">
.txt {
	font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
}
</style>
</head>

<body>
<p class="txt">User: <?=$_SESSION['user']?></p>
<p class="txt">ID:
  <?=session_id();?>
</p>
<p class="txt"><a href="createsession.php">CREATE SESSION</a> - <a href="session2.php">PAGE 2</a> - <a href="unsetsession.php">UNSET SESSION</a> - <a href="destrosession.php">DESTROY SESSION</a></p>
</body>
</html>