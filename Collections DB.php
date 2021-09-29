<?php

$db = new PDO('mysql:host=db; dbname=collections', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query=$db->prepare("SELECT `brewery`, `beer`, `location`, `style`, `abv`, `ibu`, `colour` FROM `breweries`;");

$query->execute();

$result=$query->fetchAll();

$breweries = array("brewery", "beer", "location", "style", "abv", "ibu", "colour");
$array_length = count($breweries);


echo'<pre>';
var_dump($result);
echo'</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<label for="breweries">Choose a Brewery:</label>
<input list="breweries" id="brewery name="brewery” />

<datalist id="breweries">

</datalist>
</html>
