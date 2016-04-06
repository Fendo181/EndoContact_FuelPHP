<?php

$slackApikey = 'xoxp-7569168561-7568977431-29436636787-e7830bea86';
$text='Hello!';
$text=urlencode($text);
$url = "https://slack.com/api/chat.postMessage?token=${slackApiKey}&channel=%23fuelphp&text=${text}";

file_get_contents($url);

print("通知が飛ぶはず!");
print($url);

?>