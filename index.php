<?php
try
{
    $connection = new Mongo('mongodb://iwestz:iwestz@ds145389.mlab.com:45389/wow-api-ah');
    $database   = $connection->selectDB('wow-api-ah');
    $collection = $database->selectCollection('AH');
}
catch(MongoConnectionException $e)
{
    die("Failed to connect to database ".$e->getMessage());
}

$cursor = $collection->find();

?>