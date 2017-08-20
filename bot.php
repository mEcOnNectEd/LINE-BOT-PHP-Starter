<?php
$strAccessToken = '/RqyLq22gMx2T6AfLKe/gNw8oZOc+au0OAHiQrVF7hwvqLHKWsU4GH8Req6cUHsBj4MF5i9LW0E3qSTHkPg8ZVE8fXB95KnBgR+c9nhT/0izqNnt95KLXGkMvlvjMxDK/v8DnfJskQr6SM8P8ezbcgdB04t89/1O/w1cDnyilFU=';


$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
	
}else if(( $arrJson['events'][0]['message']['text'] == "ชื่อไร")|| ( $arrJson['events'][0]['message']['text'] == "ชื่ออะไร") || ( $arrJson['events'][0]['message']['text'] == "Your name")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Skynet";
  
  $arrWebHookData = array();
  //$arrWebHookData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrWebHookData['messages'][0]['type'] = "text";
  $arrWebHookData['messages'][0]['text'] = "NDF";
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันทำอะไรไม่ได้เลย คุณต้องสอนฉันอีกเยอะ";
}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN LIGHT ON") || ($arrJson['events'][0]['message']['text'] == "เปิดไฟ")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I turn the light ON!";
}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN LIGHT OFF") || ($arrJson['events'][0]['message']['text'] == "ปิดไฟ")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I turn the light OFF!"; 
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Sorry, I couldn't help with that!";
}
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

//if ($arrPostData['messages'][0]['text'] != "Sorry, I couldn't help with that!")
  $arrWebHookData = array();
  //$arrWebHookData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrWebHookData['messages'][0]['type'] = "text";
  $arrWebHookData['messages'][0]['text'] = "NDF";
    $ci = curl_init();// init curl
				curl_setopt($ci, CURLOPT_URL,"http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=L");
curl_setopt($ci, CURLOPT_HEADER, false);
				curl_setopt($ci, CURLOPT_POST, true);// set post data to true
				curl_setopt($ci, CURLOPT_POSTFIELDS,json_encode($arrWebHookData));// post data
    curl_setopt($ci, CURLOPT_FOLLOWLOCATION, true);
				// receive server response ...
				curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);// gives you a response from the server
				$response = curl_exec ($ci);// response it ouputed in the response var
				curl_close ($ci);// close curl connection

//echo $result . "\r\n";

//echo "OK";
 
?>
