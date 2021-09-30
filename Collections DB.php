<?php

function dbconnection()
{
    $db = new PDO('mysql:host=db; dbname=collections', 'root', 'password');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}

function breweriesdb ()
{
    $query = $db->prepare("SELECT `brewery`, `beer`, `location`, `style`, `abv`, `ibu`, `colour`, `description` FROM `breweries`;");

    $query->execute();

    $result = $query->fetchAll();
}

$beers = array(
    $id[1] = array('Brewdog','Punk IPA','UK - Scotland','IPA American','5.2','35','Light Golden','The beer that started it all for Brewdog. Light, golden classic. New world hops, bursts of tropical.'),
    $id[2] = array('Tiny Rebel', 'Clwb Tropica', 'UK - Wales',	'IPA American',	'5.5',	'40', 'Light Juicy', 'Been noted as a grown up fruit salad. Super juicy, packed with hops.'),
    $id[3] = array('Goose Island Beer Co.', 'Goose IPA','USA - Chicago IL', 'IPA English', '5.9', '55', 'Dark Copper',	'Goose Islands flagship. Traditional English style. 6 time medal winner.'),
    $id[4] = array('Brooklyn Brewery',	'Brooklyn Lager', 'USA - Brooklyn NY', 'Lager Vienna',	'5.2', '33', 'Amber', 'Caramel front-end, amber lager. Gold medal 2018 winner.'),
    $id[5] = array('Paulaner Brauerei', 'Weissbier', 'Germany - Munich', 'Weiss',	'5.5',	'16', 'Cloudy Golden', 'Naturally cloudy, and traditionally brewed. No.1 Weissbier in Germany.'),
    $id[6] = array('Thornbridge Brewery','Jaipur',	'UK - England',	'IPA  American', '5.9',	'55', 'Light Golden', 'Citrus dominated, massively hoppy, award winning IPA.'),
    $id[7] = array('Blue Moon Brewing Company', 'Belgian White', 'USA - Denver CO', 'Witbier',	'5.4', '9',	'Cloudy Golden', 'Belgian style wheat ale, spiced with coriander and orange peel.'),
);

echo '<table border="1">';
echo '<tr><th>brewery</th><th>beer</th><th>location</th><th>style</th><th>abv</th><th>ibu</th><th>colour</th><th>description</th></tr>';
foreach( $beers as $beer )
{
    echo '<tr>';
    foreach( $beer as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Taproom</title>
</head>
<body>
    <form action="collections" method="post"><br>
        Enter Brewery Details: <br>
        <input type="text" name="brewery[0][name]" placeholder="Enter Brewery Name">
        <input type="text" name="beer[0][name]" placeholder="Enter Beer Name">
        <input type="text" name="location[0][name]" placeholder="Enter location">
        <input type="text" name="style[0][name]" placeholder="Enter Beer style">
        <input type="text" name="abv[0][number]" placeholder="Enter ABV amount">
        <input type="text" name="ibu[0][number]" placeholder="Enter IBU">
        <input type="text" name="colour[0][name]" placeholder="Enter Colour">
        <input type="text" name="description[0][name]" placeholder="Enter Description">
        <br><br>
        <button type="submit">Submit Information</button>
    </form>
</body>
</html>