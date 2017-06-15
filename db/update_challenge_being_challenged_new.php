<?php

/*Created by Danila Chenchik Monikos LLC*/

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once 'db_init.php';

$collection = $client -> monikos -> Challenge;
$result = $collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectID($_POST["challengeid"])],
    ['$set' => ['user2score' => $_POST["user2score"]]]
);
 
if ($result->getModifiedCount() === 1) {
    echo '[{
    "response": 200,
    "challengeid": "'.$_POST["challengeid"].'",
    "user2score": "'.$_POST["user2score"].'"}]';
} else {
    echo '[{"response":"500"}]';
}
?>