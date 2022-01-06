<?php  
    header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

    include('config.php');

	$test_data = array();
   $sql = "SELECT * FROM test_data; ";
   $stmt=$con->prepare($sql);
   $stmt ->execute();
   $stmt->bind_result($id,$data1);
   while ($stmt->fetch()){
	   $temp=[
	   'id'=>$id,
	   'data1'=>$data1
	   ];
	   array_push($test_data,$temp);
   }
   echo json_encode($test_data);
   
?>