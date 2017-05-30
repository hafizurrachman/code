<?php
include "config.php";

// Gets data from URL parameters.
$name = $_GET['name'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$type = $_GET['type'];

// Inserts new row with place data.
$query = sprintf("INSERT INTO obyek " .
         " (obyek_id, obyek_nama, obyek_latitude, obyek_longtitude, obyek_type ) " .
         " VALUES (NULL, '%s', '%s', '%s', '%s');",
         mysql_real_escape_string($name),
         mysql_real_escape_string($lat),
         mysql_real_escape_string($lng),
         mysql_real_escape_string($type));

$result = mysql_query($query);

if (!$result) {
  die('Invalid query: ' . mysql_error());
}

?>
?>