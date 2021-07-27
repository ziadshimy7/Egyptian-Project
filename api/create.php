<?php


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");


include "../register_login/connection.php";

function create ($description,$name,$location){
    global $connection;
    $query="INSERT INTO monuments (monument_id,monument_description,monument_name,monument_location) VALUES (NULL,'$description','$name','$location')";
    $results_post=mysqli_query($connection,$query);
    
    
}
$data = json_decode(file_get_contents("php://input"));
$description=$data->description;
$name=$data->name;
$location=$data->location;
if(create($description,$name,$location)) {
    echo json_encode([
        "message"=>"Monument created"
    ]);
}
else {
    echo json_encode([
        "message"=>"Monument not created"
    ]);

};



?>