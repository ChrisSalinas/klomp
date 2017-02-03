<?php
$sql = "SELECT * FROM data_KCV";

$result = $mysqli->query($sql);

//if($result->num_rows != 0){
//    while($rows = $result->fetch_assoc()){
//        $id = $rows['id'];
//        $adress = $rows['adress'];
//        $zipcode = $rows['zipcode'];
//    }
//}