<?Php
//$myjson = '[{"nome":"Dimas","idade":"39","sexo":"M"},{"nome":"Dante","idade":"43","sexo":"M"},{"nome":"Carlos","idade":"67","sexo":"M"},{"nome":"Viktor","idade":"2","sexo":"M"},{"nome":"Basia","idade":"33","sexo":"F"},{"nome":"Ive","idade":"33","sexo":"F"},{"nome":"Valdete","idade":"66","sexo":"F"}]	';
$url = 'http://localhost:8080/cursophp7/json.php';
$contents = file_get_contents($url); 
$contents = utf8_encode($contents); 
// true -> o true faz com que o json seja convertido em array e nao objeto. Se tirar o true (json_decode($contents)) ele retorna uma lista de objetos.
$results = json_decode($contents, true);   



var_dump($results);
?>