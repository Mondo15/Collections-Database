<?php

class Collections DB extends \PHPUnit_Framework_Testcase

$db = new PDO('mysql:host=db; dbname=collections', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query=$db->prepare("SELECT `brewery`, `beer`, `locat ion`, `style`, `abv`, `ibu`, `colour`, `description` FROM `breweries`;");

$query->execute();

$result=$query->fetchAll();

$breweries = array("brewery", "beer", "location", "style", "abv", "ibu", "colour", "description");
$array_length = count($breweries);

$column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];
$sort_order = isset($_GET['order']) && strtolower($_GET['order']) =='desc' ? 'DESC' : 'ASC';

?>
