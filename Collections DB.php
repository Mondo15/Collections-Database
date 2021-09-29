<?php

$db = new PDO('mysql:host=db; dbname=collections', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query=$db->prepare("SELECT `brewery`, `beer`, `location`, `style`, `abv`, `ibu`, `colour` FROM `breweries`;");

$query->execute();

$result=$query->fetchAll();

$breweries = array("brewery", "beer", "location", "style", "abv", "ibu", "colour");
$array_length = count($breweries);


?>

<!DOCTYPE html>
<head lang="en">
   <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="" />
    <title>The Taproom</title>
</head>
<body>
<h1 class="title">The Taproom</h1>
<div class="The Collection">The Collection</div>


</body>

<label for="breweries">Choose a Brewery:</label>
<input list="breweries" id="brewery name="brewery” />

<datalist id="breweries">
</datalist>
</html>
