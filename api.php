<?php
/*
    LINKS THAT HELPED IN THE CREATION OF THIS SCRIPT
    https://stackoverflow.com/questions/5647461/how-do-i-send-a-post-request-with-php
    https://developers.facebook.com/docs/messenger-platform/send-messages/quick-replies
*/

$bot_token = "YOUR_BOT_TOKEN_HERE";
$verify_token = "YOUR_VERIFY_TOKEN";

if ($_SERVER['REQUEST_METHOD'] === 'GET') { // can be found in https://chatbotsmagazine.com/how-to-create-facebook-messenger-bot-in-php-2620784d5583
    if(isset($_GET['hub_challenge'])) {
        $challenge = $_REQUEST['hub_challenge'];
        $hub_verify_token = $_REQUEST['hub_verify_token'];
    }
    if ($hub_verify_token === $verify_token) {
        echo $challenge;
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (file_get_contents('php://input')) {
        $sender_id = json_decode(file_get_contents('php://input')) -> entry[0] -> messaging[0] -> sender -> id;

        $send_message_url = "https://graph.facebook.com/v10.0/me/messages?access_token=" . $bot_token;
        $send_message_body = [
            'recipient' => [
                'id' => $sender_id
            ],
            'message' => [
                'text' => "Hello, customer! May I take your order?"
            ]
        ];

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($send_message_body)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($send_message_url, false, $context);
        if ($result === FALSE) { /* Handle error */ }

        var_dump($result);

        http_response_code(200);
    }
} else {
  http_response_code(405);
  echo '{"Error": "Method not supported."}';
}

?>