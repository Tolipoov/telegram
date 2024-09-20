<?php

include 'Telegram.php';

$telegram = new Telegram('7523054191:AAEbjwrWA8ftg7MR_rmDUKk9pCw-pba-VyY');

$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => 'Test');
$telegram->sendMessage($content);