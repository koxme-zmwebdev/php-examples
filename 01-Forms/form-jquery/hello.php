<?php
$name = "";
if(isset($_POST["name"])){
    $name = $_POST["name"];
} else {
    $name = "null";
}

//$data = '{hello:"' . $name . '"}';

$data = array("name"=> $name);

header('Content-Type: application/json');

echo json_encode($data);
?>
