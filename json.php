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



	echo json_encode($pessoas);
?>	
