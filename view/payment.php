<<?php 
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../Login/login.php");
    exit;
}


//Call controller to select all rooms in dufie
include "../Controller/user_controller.php";
include "../Controller/room_controller.php";
include "../Controller/hostel_controller.php";

//select user
$user = sel_user_ctr($_SESSION['id']);

$room_id = $_GET['room'];

$room = select_room_ctr($room_id);

$oid = $_GET['oid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/pay.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<!----STYLE-->


<body>
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Payment</h3>
                        <p>Enter Detail to proceed with payment</p>
                        <form class="requires-validation" novalidate id="paymentForm">

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Full Name" id="full-name" required value="<?php echo $user['user_name'];?>">
                            </div>
                            <br>
                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" id="email-address" value="<?php echo $user['user_email']?>" required>
                            </div>
                            <br>

                           <div class="col-md-12">
                              <input class="form-control" type="tel" name="amount" id="amount" required readonly value="<?php echo $room['room_price'];?>">
                            </div>            
                            <br>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit"  class="btn btn-primary" onclick="payWithPaystack()">Pay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://js.paystack.co/v1/inline.js"></script> 

<script>
    /* const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false); */
    function payWithPaystack() {
        event.preventDefault();
        let handler = PaystackPop.setup({

            key: 'pk_test_110ba43e9a482172973111eb66e68e2306265c16', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: document.getElementById("amount").value * 100,
            currency: 'GHS',
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function(){
            alert('Window closed.');
            },
            callback: function(response){
            let message = 'Payment complete! Reference: ' + response.reference;
            alert(message);
            // add_payment_detail_ctrl
            email = document.getElementById("email-address").value;
            amount = document.getElementById("amount").value;
            var dataString = 'email='+ email + '&amount='+ amount;
            if (response.status=='success'){
            //alert("Please Fill All Fields");
            
            
           
            $.ajax({
            type: "POST",
            url: "../Actions/process_payment.php",
            data: dataString,
            cache: false,
            success: function(result){
            // alert(result);
            window.location="../Actions/book_room.php?rid=<?php echo $room_id;?>&hid=<?php echo $room['hostel_id'];?>&order=<?php echo $oid;?>&amt=<?php echo $room['room_price'];?>";
            // window.location = "pay"
            }
            });
          }
          

            }
            

        });
        handler.openIframe();
    }
</script>

</body>
</html>