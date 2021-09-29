<?php

$db = new PDO('mysql:host=db; dbname=collections', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query=$db->prepare("SELECT `brewery`, `beer`, `location`, `style`, `abv`, `ibu`, `colour`, `description` FROM `breweries`;");

$query->execute();

$result = $query->fetchAll();

echo '<ul>';
foreach ($result as $breweries) {
    echo '<li>' . $breweries['brewery'] . ' - - ' . $breweries['beer'] . ' - - ' . $breweries['location'] . ' - - ' . $breweries['style']  . ' - - ' . $breweries['abv'] . ' - - ' . $breweries['ibu'] . ' - - ' . $breweries['colour'] . ' - - ' . $breweries['description'] . ' - - ' . '</li>';
}
echo '</ul>';


