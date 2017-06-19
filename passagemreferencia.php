<?Php

function alteraIdade(){
	
	$parametro = func_get_args();
	
    foreach ($parametro as $key => $value){
    	if (gettype($value) === 'array') {
			foreach ($value as $key => &$value){
				if (gettype($value) === 'integer') $value += 5;
				echo $value.'A<br>';
			}
		} else echo $value.'B<br>';
    }	
	
	print_r($parametro);
}

function alteraIdade2(&$parametro){
	
    foreach ($parametro as $key => $value){
    	if (gettype($value) === 'array') {
			foreach ($value as $key => $value){
				if (gettype($value) === 'integer') $value += 5;
				echo $value2.'D<br>';
			}
		} else {
			foreach ($parametro as $keyx => &$valuex){
            	if (gettype($valuex) === 'integer') $valuex += 5;
	            echo $valuex.'E<br>';
             }
			break;
		}
    }	
	
	print_r($parametro);
}

$pessoas = array('nome'=>'Joao','idade'=>20);

foreach ($pessoas as $key => &$value){
	if (gettype($value) === 'integer') $value += 5;
	echo $value.'C<br>';
}

echo '<br>';
print_r($pessoas);
echo '<br><br><hr>';

alteraIdade($pessoas);
echo '<br><br><hr>';

alteraIdade2($pessoas);
?>