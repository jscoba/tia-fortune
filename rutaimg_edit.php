shuffle($result);
$result[]=utf8_encode(fortunes()); //Linea a añadir en rutaaviso.php
echo implode("|", $result);


include_once("Fortune_class.php"); //linea a añadir al inicio del archivo