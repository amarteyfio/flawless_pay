<!-- embed script -->
<script src="https://widget.paybox.com.co/js/app.js" defer></script>

<link rel="stylesheet" href="../css/payment.css">

<div id="demo">

<!--  basic configuration-->

<paybox-button-widget  merchant-key="demo" total="10.99" currency="GHS"> Basic PayBox Button </paybox-button-widget>

</div>


<div id="demo">
<!-- customised  configuration-->

 <!-- Solid buttons
 type: 'primay','success','info','warning','danger','tertiary' -->
 
 <!-- Rounded buttons
 type: 'primay rounded','success rounded','info rounded','warning rounded','danger rounded','tertiary rounded' -->
 
 <!-- Outlined buttons
 type: 'primay outlined','primary rounded outlined,'success outlined','success rounded outlined','info rounded','info rounded outlined','warning outlined','warning rounded outlined','danger outlined','danger rounded outlined','tertiary outlined','tertiary rounded outlined' -->
 
  <!-- Adding order reference to widget
 order-id: e.g PB_1234 (Optional) -->
 
  <!-- Adding payload to widget
 payload: use json_encode () or  JSON.stringify() -->
   
  <!-- Enable shipping in widget
 shipping: enabled or disabled(default) 
 NB: Shipping configuration is done in Settings-->
  
 <!-- Payloads and callbacks data will be printed in Developer console if the widget is in Test mode.This will help with testing-->
 
<paybox-button-widget merchant-key="demo"  total="100.99" order-id ="PB_1234" currency="GHS" type="danger rounded" payload="{}"  shipping="enabled"> Customised PayBox Button </paybox-button-widget>

</div>


 <!-- FAQs-->
 <!-- Set front-end framework to ignore paybox-button-widget unknown custom component alert if it occurs e.g Vue.config.ignoredElements = ['paybox-button-widget']-->



<script>
 payload={
"order_id":1234,
"items":[
 {"item1":"item1-description","cost":20.0},
 {"item2":"item2-description","cost":10.0},
 {"item3":"item3-descrptions","cost":0.90},
]
}


console.log(JSON.stringify(payload));
</script>