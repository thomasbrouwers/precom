<?php

/*

    Onderstaande json is te sturen via postman, link invullen, POST kiezen en bij body 'raw' kiezen en JSON selecteren 

*/


 /* 
 
{
   "data":{
      "android_channel_id":"pager",
      "content-available":"1",
      "message":"Prio 1 Testmelding 9941\r\n",
      "messageData":{
         "MsgOutID":"107285313",
         "ControlID":"g",
         "Timestamp":"2022-08-16T13:50:49.297"
      },
      "notId":"107285313",
      "soundname":"pager",
      "vibrationPattern":"[180,121,134,300,289,123,134,300,621,121,134,300,289,123,134,300]"
   },
   "from":"788942585741",
   "messageId":"0:1660657845950438%af1e7638f9fd7ecd",
   "sentTime":1660657845944,
   "ttl":2419200
}
       
*/



$ruwbericht = file_get_contents("php://input");
$jsonbericht = (json_decode($ruwbericht, true));


//var_dump ($jsonbericht);

echo $jsonbericht['data']['message'];


file_put_contents("/volume1/web/transip/log.txt", $jsonbericht['data']['message'], FILE_APPEND);




?>
