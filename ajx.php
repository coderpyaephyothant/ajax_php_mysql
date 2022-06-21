<?php 
session_start();
require('config.php');
header("Access-Control-Allow-Origin: *"); //Cross-Origin Request Headers(CORS) with PHP headers

    // $user = [
    //     'name' => "pyae phyo thant",
    //     'computerlanguage' => "PHP",
    // ];
    // echo json_encode($user);
    // // print"<pre>";
    // // print_r($user);
    $pdo_likeBtn = $pdo->prepare("SELECT * FROM like_btn WHERE id=1");
    $pdo_likeBtn->execute();
    $pdo_result = $pdo_likeBtn->fetchAll();
    // print"<pre>";
    // print_r($pdo_result);
    
    // $pdo_likeBtn1 = $pdo->prepare("UPDATE like_btn SET count=count+1 WHERE id=1");
    // $pdo_result1 = $pdo_likeBtn1->execute();
    // if($pdo_result1){
    //     $pdo_likeBtn2 = $pdo->prepare("SELECT * FROM like_btn WHERE id=1");
    // $pdo_likeBtn2->execute();
    // $pdo_result2 = $pdo_likeBtn2->fetch(PDO::FETCH_ASSOC);
    // echo json_encode($pdo_result2['count']);
    // }
     



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LikeBtnAjax</title>
</head>
<body>
    <div class="container" >
        <div class="row">
            <div style="margin-top:5rem;display:flex;align-items:center;justify-content:flex-start ;flex-direction:column;">
            <div class="card" style="width: 18rem;">
            <img src="https://bit.ly/3bjvD5O" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            <button class="btn btn-primary" id="button" style="margin-top:1rem;" onclick="counting()"><span>Like </span><?php echo $pdo_result[0]['count']; ?></button>
            </div>
        
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script>
        const counting = ()=>{
            fetch('http://localhost/ajxphp/api.php')
            .then(function(e){
                return e.json();
            }).then(function(data){
                document.getElementById('button').innerHTML = 'Like '+ data
                console.log(data)
            })
        }
    </script>
</body>
</html>