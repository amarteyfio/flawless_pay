<?php
    // Initialize the session
    //session_start();
    include("../Settings/core.php");
    include("../Controller/infrastructure_controller.php");

    // Check if the user is logged in, if not then redirect him to login page
    //if logged in check if admin, if not redirect to login page 

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        if($_SESSION["role"] == 1){ 
            //echo "Hello Root";
            $role="Root";
        }

        else{ 
            echo "You are not ROOT.";
            //$role="User";
            //echo '<a href="l../login/login.php"">Login</a>';
        }
    }

    else{
        header("location: ../login/login.php");
    }

    $_SESSION['id']= $_GET['id'];
    $gethostelID= $_SESSION['id'];



?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>EDIT Hostel <small><?php echo $role ?></small></h1>

    <form action= "../actions/update_hostel.php" method="POST">

        
        <!--make HOSTEL text box--> 
        <h4>Hostel</h4>
        <textarea type="text" name="editedhostel"  id="editHostel" cols="40" rows="5" required
        ><?php
            $selectone=selectAHostel_ctr($gethostelID); 
            if ($selectone == NULL){
            print ("Doesnt exist.");
            }
            else{
                print $selectone['hostel_name'];
            }
        ?>
        </textarea>
        
       
        <br>
        <br>
        <!--submit button-->
        <input type="submit" name="edithostelinfo" 
        value="Edit">

    </form>
    
    <br>
    
    <!--back to index button-->
    <button type="button" onclick="location.href='index.php'">Return to Index</button>
</body>

<br>

