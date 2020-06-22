<!--PHP met MySQL Opdracht: Laat alle cursisten zien uit de school-database-->
<!--HTML INDEX--------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <style type="text/css">
        table{
            border-collapse: collapse;
            width: 100%;
            color:#df6300;
            font-size: 18px;
            text-align: left;
        }
        th{
            background-color: #df6300;
            color: white;
        }
        tr:nth-child(even){background-color: #f2f2f2}
    </style>
</head>
<body>

<!--try this site for an explanation: https://www.w3schools.com/php/php_mysql_select.asp-->
<table>
    <tr>
        <th>cursistnr</th>
        <th>naam</th>
        <th>roepnaam</th>
        <th>straat</th>
        <th>postcode</th>
        <th>plaats</th>
        <th>geslacht</th>
        <th>geboorteplaats</th>
    </tr>

<!--PHP DATABASE CONNECT----------------------------------------------------------------------------------------------->
<?php
$conn = mysqli_connect("localhost", "root", "", "school");
if ($conn-> connect_error){
    die("Connection failed:". $conn-> connect_error);
}
//VOEG DE NAAM VAN COLUMN(s) EN DE TABLE IN DE DATABASE TOE
$sql = "SELECT cursistnr, naam, roepnaam, straat, postcode, plaats, geslacht, geb_datum from cursist";
$result = $conn->query($sql);

if ($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()) {
        echo "<tr><td>" . $row["cursistnr"].
            "</td><td>" . $row["naam"].
            "</td><td>" . $row["roepnaam"].
            "</td><td>" . $row["straat"].
            "</td><td>" . $row["postcode"].
            "</td><td>" . $row["plaats"].
            "</td><td>" . $row["geslacht"].
            "</td><td>" . $row["geb_datum"].
            "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn-> close();
    ?>
</table>
</body>
</html>