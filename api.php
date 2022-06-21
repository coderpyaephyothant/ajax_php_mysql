<?php 
session_start();
require('config.php');
header("Access-Control-Allow-Origin: *"); //Cross-Origin Request Headers(CORS) with PHP headers


    $pdo_likeBtn = $pdo->prepare("SELECT * FROM like_btn WHERE id=1");
    $pdo_likeBtn->execute();
    $pdo_result = $pdo_likeBtn->fetchAll();
    if($pdo_result){
        $pdo_likeBtn1 = $pdo->prepare("UPDATE like_btn SET count=count+1 WHERE id=1");
        $pdo_result1 = $pdo_likeBtn1->execute();
    }
    
    if($pdo_result1){
        $pdo_likeBtn2 = $pdo->prepare("SELECT * FROM like_btn WHERE id=1");
    $pdo_likeBtn2->execute();
    $pdo_result2 = $pdo_likeBtn2->fetch(PDO::FETCH_ASSOC);
    echo json_encode($pdo_result2['count']);
    }
     



?>