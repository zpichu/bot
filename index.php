<?php 

$bottoken = "284722676:AAGkLhEL16o56ctCGITjz7AuywKC-GhIues";
$website = "https://api.telegram.org/bot".$bottoken;

$update = file_get_contents("php://input");

$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");

?>