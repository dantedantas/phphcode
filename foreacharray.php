<?Php
$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Dimas',
	'idade'=>'39',
	'sexo'=>'M'
));

array_push($pessoas, array(
    'nome'=>'Dante',
	'idade'=>'43',
	'sexo'=>'M'
));

array_push($pessoas, array(
    'nome'=>'Carlos',
	'idade'=>'67',
	'sexo'=>'M'
));

array_push($pessoas, array(
    'nome'=>'Viktor',
	'idade'=>'2',
	'sexo'=>'M'
));

array_push($pessoas, array(
    'nome'=>'Basia',
	'idade'=>'33',
	'sexo'=>'F'
));

array_push($pessoas, array(
    'nome'=>'Ive',
	'idade'=>'33',
	'sexo'=>'F'
));

array_push($pessoas, array(
    'nome'=>'Valdete',
	'idade'=>'66',
	'sexo'=>'F'
));

if (isset($_GET['nome'])){
	array_push($pessoas, array(
    'nome'=>$_GET['nome'],
	'idade'=>$_GET['idade'],
	'sexo'=>$_GET['sexo']
));
}

function quebra2Linhas(){
	echo '<br><br>';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Foreach & Array - HCode (PHP7)</title>
</head>

<body>
<?Php
    print_r($pessoas);
	quebra2Linhas();
	
	print_r($pessoas[3]['idade']);
	quebra2Linhas();
	echo '<hr>';
	
	foreach($pessoas as $key => $value){
		 echo "{$key} => <br>";
		 foreach($value as $key2 => $value2){
		 		 echo "     {$key2} => {$value2}<br>";
		          //print_r($arr);
		 }
	}
?>	
<form action="">
    <lebel>Nome: </lebel>
	<input type="text" name="nome" >
    <lebel>Idade: </lebel>
	<input type="number" name="idade" >
    <lebel>Sexo: </lebel>
	<input type="text" name="sexo" >
	<input type="submit" value="OK" >
</form>
</body>
</html>