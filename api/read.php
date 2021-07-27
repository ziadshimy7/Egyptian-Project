<?php 
include "../register_login/connection.php";
$query_api="SELECT * FROM  monuments";
$results_api=mysqli_query($connection,$query_api);
$row_count=mysqli_num_rows($results_api);
$row_array=[];
$row_array["data"]=[];
if($row_count >0){
    while($row=mysqli_fetch_assoc($results_api)){
        extract($row);
        $row_item=array(
            "id"=>$monument_id,
            "monument_description"=>$monument_description,
            "monument_name"=>$monument_name,
            "monument_location"=>$monument_location,
        );
        array_push($row_array["data"],$row_item);
    }
    echo json_encode($row_array);
}
else {
    echo json_encode(array(
        "message"=>"No items found ! "
    ));
};