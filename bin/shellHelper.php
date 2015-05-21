<?php
$file = $_POST["file"];
if($file == "easy-push.sh"){
    $info = exec("sh ".__DIR__."/../shell/".$file);
}
else{
    $info = exec("sudo sh ".__DIR__."/../shell/".$file);
}
header('Content-Type: application/json');
echo json_encode(array("message" => $info));
exit;
