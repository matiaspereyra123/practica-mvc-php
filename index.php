<?php
$url =!empty($_GET['url']) ? $_GET['url']: 'home/home';
$arrUrl = explode('/', $url);

$controller = $arrUrl[0];
$method = $arrUrl[0];
$params="";

if(!empty($arrUrl[1])){
 if($arrUl[1]=!""){
    $method=$arrUrl[1];
 }
}
 if(!empty($arrUrl[2])){
    if($arrUrl[2]!=""){
        for($i=2; $i< count($arrUrl); $i++){
                $params .=$arrUrl[$i].',';
        }
        $params = trim($params,',' ); /*remueve el ultimo caracter de la cadena*/
 
    }
 }

echo "<br>";
echo "controlador: ".$controller;
echo "<br>";
echo "metodo: ".$method;
echo "<br>";
echo "parametros :".$params;




?>