<?php
$access_token = '/RqyLq22gMx2T6AfLKe/gNw8oZOc+au0OAHiQrVF7hwvqLHKWsU4GH8Req6cUHsBj4MF5i9LW0E3qSTHkPg8ZVE8fXB95KnBgR+c9nhT/0izqNnt95KLXGkMvlvjMxDK/v8DnfJskQr6SM8P8ezbcgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			
				$ci = curl_init();// init curl
				curl_setopt($ci, CURLOPT_URL,"http://dolphin-solution.com/mcs/acquire.aspx?password=DSCMCS&value=LOF");
				curl_setopt($ci, CURLOPT_POST, 1);// set post data to true
				curl_setopt($ci, CURLOPT_POSTFIELDS,$post);// post data
                                curl_setopt($ci, CURLOPT_FOLLOWLOCATION, 1);
				// receive server response ...
				curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);// gives you a response from the server

				$response = curl_exec ($ci);// response it ouputed in the response var

				curl_close ($ci);// close curl connection

			echo $result . "\r\n";
		}
	}
}
echo "OK";
