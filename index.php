<?php
require_once "vendor/autoload.php";

use Predis\Client;
use \Superbalist\PubSub\Redis\RedisPubSubAdapter;

$redisConfig = parse_ini_file('env.ini');

$client = new Client([
    'host' => $redisConfig['host'],
    'port' => $redisConfig['port'],
    'read_write_timeout' => $redisConfig['read_write_timeout'],
]);

$adapter = new RedisPubSubAdapter($client);

$adapter->publish('rotinas.apos.cadastro', json_encode([
    'nome' => 'Romário arruda',
    'cpf' => '123.456.789-10',
    'cartaoCredito' => '0000000000000',
], JSON_PRETTY_PRINT));
