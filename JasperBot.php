<?php

include("Telegram.php");
$telegram = new Telegram("412794457:AAH63Z1ZghAtM_TyZiCqK62-vrZJwaEt5dQ");
$chat_id = $telegram->ChatID();

//$telegram = new Telegram($bot_id);
//$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => "안녕?! 나는 제스퍼봇이야!");
$telegram->sendMessage($content);
