<?php
namespace App\Workers;

use Predis\Client;
use \Superbalist\PubSub\Redis\RedisPubSubAdapter;
use App\RotinasAposCadastro;

require_once '../../vendor/autoload.php';

$redisConfig = parse_ini_file('../../env.ini');

$client = new Client([
    'host' => $redisConfig['host'],
    'port' => $redisConfig['port'],
    'read_write_timeout' => $redisConfig['read_write_timeout'],
]);

$adapter = new RedisPubSubAdapter($client);

$adapter->subscribe('rotinas.apos.cadastro', function ($dados) {
    RotinasAposCadastro::getInstance()
    ->validaSerasa()
    ->validaInstituicoesFinanceiras()
    ->validaAntecedentesCriminais()
    ->enviaEmail();
    
    file_put_contents('logs.log', $dados, FILE_APPEND);
});
