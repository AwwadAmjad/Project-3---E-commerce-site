<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    // if (!isset($_SESSION['adm' ]) && !isset($_SESSION['user'])) {
    //     header("Location: login.php" );
    //      exit;
    //  }
    //  if ( isset($_SESSION["user"])) {
    //     header("Location: landingPage.php");
    //     exit;
    //  }
    
?>

<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <?php require_once '../compos/bootstrap.php'?>
       <title>Create User</title>
   </head>
   <body>
   <div class="container p-5">
       <h2>Create new User</h2>       
       <form action="../actions/aUserCreate.php" method="post" enctype="multipart/form-data">
           <table  class="table">
               <tr>
                   <th>First Name</th>
                   <td><input class="form-control"  type="text"  name ="firstName" placeholder = "First Name" /></td>
               </tr>
               <tr>
                   <th>Last Name</th>
                   <td><input class="form-control"  type="text"  name ="lastName" placeholder = "Last Name" /></td>
               </tr>

               <tr>
               <tr>
                   <th>Email</th>
                    <td><input class= "form-control " type ="text"  name="email"  placeholder= "Email" /></td>
               </tr>
               <tr>
                   <th>Password</th>
                    <td><input class= "form-control" type ="text"  name="password"  placeholder= "Password" ></td>
               </tr>
               <tr>
                   <th>Telefon Number</th>
                    <td><input class= "form-control" type ="text"  name="telefonNumber"  placeholder= "Telefon Number"  /></td>
               </tr>
               <tr>
                   <th>Address</th>
                    <td class="">
                        <div class="d-flex">
                            <input class= "form-control  street" type ="text"  name="street"  placeholder= "street"  />
                            <input class= "form-control plz ms-4 " type ="text"  name="houseNumber"  placeholder= "HausNr"  />
                            <input class= "form-control stiege ms-4 " type ="text"  name="stiege"  placeholder= "Stiege"  />
                        </div>
                        <div class="d-flex mt-2">
                            <input class= "form-control w-50  " type ="text"  name="city"  placeholder= "Stadt"  />
                            <input class= "form-control stiege ms-4 " type ="text"  name="plz"  placeholder= "plz"  />
                        </div>
                    </td>
                    
               </tr>

               <tr>
                   <th>Image</th>
                    <td><input  class= "form-control"  type ="file"   name = "image"  /></td>
                </tr>
                <tr>
                    <td>
                        <button   name = "submit"   class = "btn btn-success"   type = "submit"> Create User </button>
                    </td>
                    <td>
                        <a href = "dashboard.php"><button class = "btn btn-warning" type = "button"> Back </button></a>
                    </td>
                </tr>
            </table>
        </form>    
    </div>
   </body>
</html>