 <?php
  
function send_LINE($msg){
 $access_token = '7xyjp5+2vWR7nPkOtxSmHrgFaZ9xnkh5Y4JaIDJluP4eCFb/TYCxpXBMlwfJpm6P308DNT4b6S954oiHg3uh3HqwrcqF8FGqbi0uKn1OSSGrWeqmkFB8MyJMaRiIrCwKWOovysh2fHn50TwDfZHe4gdB04t89/1O/w1cDnyilFU='; 
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => 'U3482d375a07a9528c756a9d76d753e6d',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      
}
?>
