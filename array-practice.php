<?php

echo "<pre>";
// error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "Indexed arrays:<br>";

// Either one works for next array examples of movies.
$movies = array("Back to the future", "Brave Heart", "Tron Legacy", "The Bodyguard");
$movies[] = "Wonder Woman";
var_dump($movies);

$shows[] = "Scrubs";
$shows[] = "The Boys";
$shows[] = "Mr. Robot";
var_dump($shows);


// Bulleted list using movies array
echo "<ul>";
foreach($movies as $movie){
    echo "<li>$movie</li>";
}
echo "</ul>";


// Ordered list of shows
echo "<ol>";
foreach($shows as $show){
    echo "<li>$show</li>";
}
echo "</ol>";

echo "</pre>";