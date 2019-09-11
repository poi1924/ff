 <?php
 function pubMqtt($topic,$msg){
       $APPID= "numpapicklinebot/"; //enter your appid
     $KEY = "mJ7K4MfteC7p0dW"; //enter your key
    $SECRET = "pp4gzMhCvJIqlxc66hKEvk46m"; //enter your secret
    $Topic = "$topic"; 
      put("https://api.netpie.io/microgear/".$APPID.$Topic."?retain&auth=".$KEY.":".$SECRET,$msg);
 
  }
 function getMqttfromlineMsg($Topic,$lineMsg){
 
    $pos = strpos($lineMsg, ":");
    if($pos){
      $splitMsg = explode(":", $lineMsg);
      $topic = $splitMsg[0];
      $msg = $splitMsg[1];
      pubMqtt($topic,$msg);
    }else{
      $topic = $Topic;
      $msg = $lineMsg;
      pubMqtt($topic,$msg);
    }
  }
 

?>
