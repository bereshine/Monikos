<?php

/*Created by Danila Chenchik Monikos LLC*/

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once 'db_init.php';

// $sql = "DELETE FROM Challenge WHERE challengeid = " . $_POST['challengeid'];

$collection=$client->monikos->Challenge;
$result=$collection->deleteOne(['_id'=>new MongoDB\BSON\ObjectID($_POST['challengeid'])]);

// if ($conn->query($sql) === TRUE) {
//     echo '[{
//     "response": 200,
//     "challengeid": "'.$_POST["challengeid"].'"}]';
// } else {
//     echo '[{"response":"'.$conn->error.'"}]';
// }

// $conn->close();
// echo($result);
// echo sizeof($result); 
?>