<?php

    $json = json_decode(file_get_contents('php://input'),true);
   
    $name = $json["name"];
   
    $image = $json["image"];
 
    $response = array();
 
    $decodedImage = base64_decode("$image");
 
    $return = file_put_contents("../data/images/".$name, $decodedImage);
 
    if($return !== false){
        $response['success'] = 1;
        $response['message'] = "Image Uploaded Successfully";
    }else{
        $response['success'] = 0;
        $response['message'] = "Image Uploaded Failed";
    }
 
    echo json_encode($response);
?>