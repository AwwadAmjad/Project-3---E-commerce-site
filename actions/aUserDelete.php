<?php 
    // if(session_id() == '') {
    //     session_start();
    // }
    // if (!isset($_SESSION['adm' ]) && !isset($_SESSION['user'])) {
    //     header("Location: login.php" );
    //      exit;
    //  }
    //  if ( isset($_SESSION["user"])) {
    //     header("Location: landingPage.php");
    //     exit;
    //  }

    if(!isset($_POST)){
        header("location: error.php");
    }


    $class = 'd-none';

    if ($_POST) {
    $id = $_POST['id'];
    if(isset($_SESSION['user'])){
        if($id != $_SESSION['user']){
        header("location: error.php");
        }
    }
    $image = $_POST['image'];
    ($image =="avatar.png")?: unlink("../images/$image");

    $sql = "DELETE FROM users WHERE id = {$id}";
    if ($conn->query($sql)) {
    $class = "alert alert-success" ;
    $message = "Successfully Deleted!";
    header("refresh:3;url=../files/dashboard.php");
    } else {
    $class = "alert alert-danger";
    $message = "The entry was not deleted due to: <br>" . $conn->error;
    }
    }


?>


<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <title>aDelete</title>
       <?php require_once '../compos/bootstrap.php' ?> 
   </head>
   <body>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Delete request response</h1>
           </div>
            <div class="alert alert-<?=$class;?>" role="alert">
               <p><?=$message;?></p >
               <a href ='../files/dashboard.php'><button class= "btn btn-success" type='button'>Dashboard</button></a>
            </div>
       </div >
   </body>
</html>