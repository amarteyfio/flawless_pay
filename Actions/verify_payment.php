<?php
$ref = intval($_GET['reference']);
if ($ref = ""){
    header("Location:javascript://history.go(-1)");
}
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_2b5213ed93674853627d00c1c7f44f22daec14c1",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
    $result = json_decode($response);
  }

  /*if ($result->data->status == 'success'){
    $status = $result->data->gc_status;
    $reference = $result->data->referece;
    $name = $result->data->lname;

  }
  else{
    header("Location: ../view/payment_failed.php");
  }
  */
  
?>
