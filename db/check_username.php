<?php

/*Created by Danila Chenchik Monikos LLC*/

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once 'db_init.php';

$collection=$client->monikos->Users;

$result=$collection->find(["username"=>$_POST['username']]);


$outp = "";
$count = 0;
foreach ($result as $name) {
	$count++;
	if ($outp != "") {$outp .= ",";}
	$outp .= '{"id":"'  . $name["_id"] . '",';
    $outp .= '"user":true,';
    $outp .= '"username":"'. $name["username"]. '"}';
}
if($count){
	$outp ='{"records":['.$outp.']}';	
}else{
	$outp .= '"user": false';
	$email = $_POST["email"];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$outp .= ',"email": false';
	}else{
		$outp .= ',"email": true';
	}
	$outp ='{"records":[{'. $outp .'}]}';
}

echo($outp);

?>