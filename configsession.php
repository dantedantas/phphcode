<?Php
function validaSession(){
  switch(session_status()){
	case PHP_SESSION_DISABLED:
		echo "<br>Sessao desabilitada!!!<br>";
		break;
	case PHP_SESSION_NONE:
		echo "<br>Sessao habilitada mas nao esta sendo usada!!!<br>";
		break;
	case PHP_SESSION_ACTIVE:
		echo "<br>Sessao habilitada e esta sendo usada!!!<br>";
		break;	
	default:
		echo "<br>Nao achou retorno!!!<br>";
		break;		  
  }
}
validaSession();
session_start();
validaSession();

?>