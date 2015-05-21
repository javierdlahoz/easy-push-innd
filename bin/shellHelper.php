<?php
$file = $_POST["file"];
$info = exec("sudo sh ".__DIR__."/../shell/".$file);
header('Content-Type: application/json');
echo json_encode(array("message" => $info));
exit;