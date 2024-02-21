<?php

function tablaMultiplicar($numero){// funcion tabla multiplicar
    for ($i=1;$i<=10;$i++){
echo "$numero * $i = ". ($numero *$i)."<br/>";
    }
}

echo "tabla de multiplicar del 4"."<br/>";
tablaMultiplicar(4);
"<br/>";echo "tabla de multiplicar del 6 "."<br/>";
tablaMultiplicar(6)."<b/>";


function  factorial($numero){// funcion del factorial
    $factorial=1;
    for($i=1;$i<=$numero;$i++){
        $factorial*=$i;
    }
    return $factorial;
}
$numero=5;//aqui se puede colocar cualquier numero.
echo "factorial del $numero es ".factorial($numero)."<br/>";//sse imprime en pantalla el numero y su factorial.

function numeroPrimo($numero){//funcion de numero primo.
if ($numero<=1){
    return false;
}
for ($i=2;$i<=sqrt($numero);$i++){
    if($numero % $i==0){
        return false;
    }
}
return false;
}
$numero=15;
if(numeroPrimo($numero)){
    echo"$numero es un numero primo";
}else{
    echo "$numero no es un numero primo"."<br />";
}


function numeroPar($numero){//funcion de numero par.
return $numero %2 == 0;
}

$numero=12;
if(numeroPar($numero)){
    echo "$numero es un numero par";
}else {
    echo "$numero no es un numero par";
}


function tablaMulti($numero)//funcion de tabla segun el numero colocado.
{
for($i=1;$i<=10;$i++){
    echo "$numero x $i =".($numero*$i)."<br/>";
}
}
$numero = 5;//se puede agregar cualquier numero.
echo "la tabla de multiplicar de :"."<br/>";
tablaMulti($numero);

?>