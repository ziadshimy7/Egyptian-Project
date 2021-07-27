<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include "../register_login/connection.php";
function read_single () {
    global $connection;
    $id= isset($_GET["id"]) ? $_GET["id"] : die(); 
    $query_api="SELECT * FROM  monuments WHERE monument_id = {$id} LIMIT 0,1 ";
    $results_api=mysqli_query($connection,$query_api);
    if(!$results_api){
        echo "Error no results";
        return ;
    }
    $result_assoc=mysqli_fetch_assoc($results_api);
    if(!$result_assoc){
    echo " Error !" ;
    return;
    }
    print_r(json_encode($result_assoc));

};
read_single();