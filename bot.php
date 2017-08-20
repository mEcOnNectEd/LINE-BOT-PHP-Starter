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
	
  $strUrlDolpin="NDF";		
}else if(( $arrJson['events'][0]['message']['text'] == "ชื่อไร")|| ( $arrJson['events'][0]['message']['text'] == "ชื่ออะไร") || ( $arrJson['events'][0]['message']['text'] == "Your name")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Skynet";
  
  $strUrlDolpin="NDF";
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันทำอะไรไม่ได้เลย คุณต้องสอนฉันอีกเยอะ";
	  
  $strUrlDolpin="NDF";


//Ligthing master
}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN LIGHT ON") || ($arrJson['events'][0]['message']['text'] == "เปิดไฟ")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I turn ON the light now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=LON";

}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN LIGHT OFF") || ($arrJson['events'][0]['message']['text'] == "ปิดไฟ")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I turn OFF the light now"; 
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=LOFF";

}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN LIGHT BLUE") || ($arrJson['events'][0]['message']['text'] == "สีฟ้า")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I change colour to BLUE now"; 
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=LBLUE";

}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN LIGHT RED") || ($arrJson['events'][0]['message']['text'] == "สีแดง")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I change colour to RED now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=LRED";
}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN LIGHT GREEN") || ($arrJson['events'][0]['message']['text'] == "สีเขียว")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I change colour to GREEN now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=LGREEN";
}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN LIGHT WHITE") || ($arrJson['events'][0]['message']['text'] == "สีขาว")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I change colour to WHITE now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=LWHITE";

}else if((strtoupper($arrJson['events'][0]['message']['text']) == "DIM LIGHT 10%") || ($arrJson['events'][0]['message']['text'] == "10%")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I dim the light to 10% now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=LD1";
}else if((strtoupper($arrJson['events'][0]['message']['text']) == "DIM LIGHT 50%") || ($arrJson['events'][0]['message']['text'] == "50%")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I dim the light to 50% now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=LD5";
}else if((strtoupper($arrJson['events'][0]['message']['text']) == "DIM LIGHT 100%") || ($arrJson['events'][0]['message']['text'] == "100%")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I dim the light to 100% now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=LD9";

//Security master
}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN SECURITY ON") || ($arrJson['events'][0]['message']['text'] == "เปิดระบบความปลอดภัย")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I turn on Security system now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=SON";

}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN SECURITY OFF") || ($arrJson['events'][0]['message']['text'] == "ปิดระบบความปลอดภัย")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I turn off Security system now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=SOFF";


  
//FIRE ALARM
}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN FIRE ALARM ON") || ($arrJson['events'][0]['message']['text'] == "เปิดระบบเตือนไฟไหม้")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I turn on Fire alarm system now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=FON";

}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN FIRE ALARM OFF") || ($arrJson['events'][0]['message']['text'] == "ปิดระบบเตือนไฟไหม้")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I turn off Fire alarm system now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=FOFF";


//Air Conditioning 
}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN AC ON") || ($arrJson['events'][0]['message']['text'] == "เปิดแอร์")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I turn on Air conditioning now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=AON";

}else if((strtoupper($arrJson['events'][0]['message']['text']) == "TURN AC OFF") || ($arrJson['events'][0]['message']['text'] == "ปิดแอร์")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I turn off Air conditioning now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=AOFF";


}else if((strtoupper($arrJson['events'][0]['message']['text']) == "SET TEMP 18") || ($arrJson['events'][0]['message']['text'] == "ตั้งอุณหภูมิ 18")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I set temperature to 18C now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=A18";

}else if((strtoupper($arrJson['events'][0]['message']['text']) == "SET TEMP 25") || ($arrJson['events'][0]['message']['text'] == "ตั้งอุณหภูมิ 25")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I set temperature to 25C now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=A25";

}else if((strtoupper($arrJson['events'][0]['message']['text']) == "SET TEMP 30") || ($arrJson['events'][0]['message']['text'] == "ตั้งอุณหภูมิ 30")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "OK, I set temperature to 30C now";
	
  $strUrlDolpin="http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=A30";


//No Act
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Sorry, I couldn't help with that!";
  
  $strUrlDolpin="NDF";
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

if ($strUrlDolpin != "NDF"){
	$arrWebHookData = array();
	$arrWebHookData['replyToken'] = $arrJson['events'][0]['replyToken'];
	$arrWebHookData['messages'][0]['type'] = "text";
	$arrWebHookData['messages'][0]['text'] = "Dolphin";
	
	$ci = curl_init();// init curl
	curl_setopt($ci, CURLOPT_URL,$strUrlDolpin);
	curl_setopt($ci, CURLOPT_HEADER, false);
	curl_setopt($ci, CURLOPT_POST, true);// set post data to true
	curl_setopt($ci, CURLOPT_POSTFIELDS,json_encode($arrWebHookData));// post data
    	curl_setopt($ci, CURLOPT_FOLLOWLOCATION, true);
	// receive server response ...
	curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);// gives you a response from the server
	$response = curl_exec ($ci);// response it ouputed in the response var
	curl_close ($ci);// close curl connection
}
//echo $result . "\r\n";
//echo "OK";
 
?>
