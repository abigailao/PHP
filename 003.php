<?php
////VB* 2019 Arrays, controlestructuren en loops - Arrays en andere datatypen p. 2 (N/: an array contains strings)
//$a = array(1,5,66,"truus");
//
//echo $a[0]."<br>"; //(N/: 0 refers to the first element in the array. The answer is 1.)
//echo $a[2]; //(N/: 2 refers to the third element in the array.. The answer is therefore 66.)
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////VB* 2019 Arrays, controlestructuren en loops - Arrays en andere datatypen p. 3
//$a = array(); //This isn't necessary!
//$a["vrouw"] = "truus";
//$a["leeftijd"] = "67";
//$a ["gewicht"] = 64;
//
//echo $a["leeftijd"]; //The result is 67
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////VB* 2019 Arrays, controlestructuren en loops - Arrays en andere datatypen p. 4
//$alle["leeftijd"] = 12;
//$alle["naam"] = "Jan";
//$alle["telefoon"] = "06129943540";
//
//foreach ($alle as $label => $waarde) {
//    echo "de ".$label." is: ".$waarde."<br>";
//}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////VB* 2019 Arrays, controlestructuren en loops - Controlestructuren en loops p. 8
//$a = 6;
//$b = 7;
//
//if ($a > $b) {
//    echo "A";//Process code if correct
//} else {
//    echo "B";//Process code if incorrect
//}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////VB* 2019 Arrays, controlestructuren en loops - Controlestructuren en loops p. 9
//$nu = date('H');
//if ($nu >= 12) {
//    echo "Het is middag";
//} else if ($nu > 6) {
//    echo "Het is ochtend";
//} else {
//    echo "Het is nacht";
//}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////VB* 2019 Arrays, controlestructuren en loops - Controlestructuren en loops p. 10
//$jaar = 6;
//$kaarsjes = 0; // draw a few candles
//
//while ($kaarsjes < $jaar) { // As long as $kaarsjes is less than 6 ...
//    echo " |*| ";
//    $kaarsjes++; // This will add an extra number like = $kaarsjes + 1
//}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////VB* 2019 Arrays, controlestructuren en loops - Controlestructuren en loops p. 11
//$jaar = 29;
//
//for ($kaarsjes = 0; $kaarsjes < $jaar; $kaarsjes++) {
//    echo " |*| "; // 29 candles
//}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////2019 Arrays, controlestructuren en loops - Controlestructuren en loops p. 12 (use foreach when going through arrays
//// to prevent random errors)
//$planten = array("nature1", "nature2","nature3","nature4","nature5","nature6","nature7","nature8","nature9","nature10");
//
//echo "<ul>";
//foreach ($planten as $plant){
//    echo "<li><img src='img/$plant.jpg'></li>";
//}
//echo "</ul>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////2019 Arrays, controlestructuren en loops - Controlestructuren en loops p. 13
//echo "<style>body { text-align: center}</style>";
//for ($i = 0; $i<=9; $i++) {
//   for($j = 0; $j<$i; $j++) {
//       echo "*";
//   }
//    echo "*<br>";
//}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////2019 Arrays, controlestructuren en loops - Controlestructuren en loops p. 14 (Use the xmas tree as an example)
for ($x = 35; $x >= 25; $x--){
    echo "hoppelepee ";
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////2019 Arrays, controlestructuren en loops - Controlestructuren en loops p. 15
//echo "<style>img { width: 350px; height: 350px;}body {text-align: center}
//.rood{ border: red solid 5px;} .groen{border: green solid 5px}</style>";
//for ($i = 1; $i <= 9; $i++) {
//    if($i % 2 == 0) {
//        $class = "class='rood'";
//    } else{
//        $class = "class='groen'";
//    }
//    echo "<img ".$class. "src='img/nature".$i.".jpg'>";
//}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////2019 Arrays, controlestructuren en loops - Controlestructuren en loops p. 16
//
//$leeftijd = 2;
//$bedrag = 10;
//
//if($leeftijd > 65){
//    $bedrag = $bedrag * 0.5;
//}
//if($leeftijd <= 12){
//    $bedrag = $bedrag * 0.5;
//}
//if($leeftijd < 3){
//    $bedrag = $bedrag * 0.0;
//}
//echo $bedrag;
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////2019 Arrays, controlestructuren en loops - Controlestructuren en loops p. 17
// one image for each 5 swimmers. Use array foreach
//echo "<style>.img-size {width: 50px; height: 50px;</style>";
//$zc["De spartelkuikens "] = 25;
//$zc["De waterbuffels "] = 32;
//$zc["plonsmderin "] = 11;
//$zc["bommetje "] = 23;
//foreach ($zc as $label => $aantal){
//echo '<br>'. $label.$aantal;
//    for($i=0; $i<floor($aantal/5);$i++){
//        echo "<img class='img-size' src='img/zwemmer.png'>";
//        //(N/: The floor() function rounds a number DOWN to the nearest integer, if necessary.)
//    }
//}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//2019 Arrays, controlestructuren en loops - Controlestructuren en loops p. 18/19
/* info 9.15 > mevr. Pietersen, 9.30 > Mevr. Willems, 9.45 > ...,
10.00 > Paul van den Broek, 10.15 > Karel de Meeuw, 10.30 > ...*/
//$kappersagenda["uur"] = 9.45;
//print("De volgende momenten zijn nog beschikbaar:<ul>");
//foreach($kappersagenda as $afspraak => $tijd) {
//    if($afspraak == "uur") {
//        print ("<li>".$tijd."</li>");
//    }
//}
//print ("</ul>");