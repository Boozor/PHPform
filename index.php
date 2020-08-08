<?php
$connection = new MongoClient();
$collection = $connection->database->collectionName;

$collection->ensureIndex( array( "i" => 1 ) );  // create index on "i"
$collection->ensureIndex( array( "i" => -1, "j" => 1 ) );  // index on "i" descending, "j" ascending
?>