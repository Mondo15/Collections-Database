<?php

function dbconnection()
{
    $db = new PDO('mysql:host=db; dbname=collections', 'root', 'password');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function breweriesdb($db)
{
    $query = $db->prepare("SELECT `brewery`, `beer`, `location`, `style`, `abv`, `ibu`, `colour`, `description` FROM `breweries`;");

    $query->execute();

    $result = $query->fetchAll();
    return $result;
}

function display($result) {
    $output = '<ul>';
    foreach ($result as $breweries) {
        $output .= '<li>' . $breweries['brewery'] . ' - - ' . $breweries['beer'] . ' - - ' . $breweries['location'] . ' - - ' . $breweries['style']  . ' - - ' . $breweries['abv'] . ' - - ' . $breweries['ibu'] . ' - - ' . $breweries['colour'] . ' - - ' . $breweries['description'] . ' - - ' . '</li>';
    }
    $output .= '</ul>';
    return $output;
}

$db = dbconnection();

$result = breweriesdb($db);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Taproom</title>
</head>
<body>
<?php

echo display($result);

?>

</body>
</html>