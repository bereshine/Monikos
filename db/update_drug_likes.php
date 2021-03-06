<?php

/*Created by Danila Chenchik Monikos LLC*/

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once 'db_init.php';

$collection = $client->monikos->Drugs2;
$result = $collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectID($_POST["drugid"])],
    ['$set' => ['Likes' => $_POST["likes"]]]
);
 
if ($result->getModifiedCount() === 1) {
    echo '[{
    "response": 200,
    "id": "'.$_POST["drugid"].'",
    "likes": "'.$_POST["likes"].'"}]';
} else {
    echo '[{"response":"500"}]';
}
?>