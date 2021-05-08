<?php
require_once "vendor/autoload.php";

$remoteRedis = [
    'host' => 'redis',
    'port' => 6379,
    'read_write_timeout' => 0
];

$redis = new Predis\Client($remoteRedis);

$loop = $redis->pubSubLoop();
$loop->subscribe("canal_exemplo");

foreach($loop as $message) {
    switch($message->kind) {
        case 'subscribe':
            echo "Me inscrevi no canal: {$message->channel}\n";
            break;
        case 'message':
            if ($message->payload == 'sair'){
                $loop->unsubscribe();
            }
            echo "Recebi mensagem do canal: {$message->channel} \nMSG: {$message->payload}\n";
            break;
    }
}

unset($loop);
