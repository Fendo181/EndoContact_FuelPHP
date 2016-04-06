<?php
// [Webhook URL]欄に表示されているURL
$webhook_url = 'https://hooks.slack.com/services/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';

// Slackに投稿するメッセージ
$msg = array(
    'username' => 'fuelphp', 
    'text' => '今日の天気はなんでしょうか!!'
);
$msg = json_encode($msg);
$msg = 'payload=' . urlencode($msg);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $webhook_url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $msg);
curl_exec($ch);
curl_close($ch);

printf("通知が送られました!");
