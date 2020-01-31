<?php
////2019 Code organiseren met functies - voorbeeld
//$sporten = array("handbal", "korfbal", "hockey", "schaatsen");
//shuffle($sporten);
//echo "<li>Er zijn ".count($sporten)." sporten in de array</li>";
//foreach ($sporten as $sport){
//    echo "<li>".$sport."</li>";
//}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////2019 Code organiseren met functies - Voorbeeld
//$bunchOfArrayVariables = array("Blue","Bang Bang", "Lies","Flower Road");
//shuffle($bunchOfArrayVariables); //shuffle order of variables from array $bunchOfArrayVariables
//$MoreArrayVariablesToShowTheUseOfMultipleArraysInAFunction = array("Neverland");
//
//
//nameOfFunction($bunchOfArrayVariables); //nameOfArrayList is de name of the function you've created and
////bunchOfArrayVariables shows which array you'd like to display under this function.
//nameOfFunction($MoreArrayVariablesToShowTheUseOfMultipleArraysInAFunction); //^^^^^
//
//function nameOfFunction($name) {
//    foreach ($name as $theArraysInAListCauseYN) {
//        echo "<li>".$theArraysInAListCauseYN."</li>";
//    }
//}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////2019 Code organiseren met functies - Voorbeeld p.7
//
//function telOp($a, $b)
//{
//    $c = $a + $b;
//    return $a." + ". $b ." = ". $c; //why change echo into return?
//}
//echo telOp(4, 5); //write echo behind 'telOp' in order to view/see result on html screen
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////2019Code organiseren met functies - Code organiseren met functies p.10
//function celsiusFahrenheit($c) {
//    $f = $c * 1.8 + 32; //formula: fahrenheit = celsius x 1.8 + 32
//    return "Celsius in Fahrenheit = ".$c." > ".$f;
//}
//echo celsiusFahrenheit(9);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////2019Code organiseren met functies - Code organiseren met functies p.10


//function getal($i, $aantal)
//{
//    if ($i % $aantal == 0) {
//        return true;
//    } else {
//        return "0 < false";
//    }
//}
//echo getal(18, 3);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//2019Code organiseren met functies - Code organiseren met functies p.10
//function omgekeerd($a){
//}return strrev($a);
//
//echo omgekeerd("werd");
$string = "test";
$reverse = "";
$i = 0;
while(!empty($string[$i])){
    $reverse = $string[$i].$reverse;
    $i++;
}
echo $reverse;