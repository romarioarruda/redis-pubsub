<?php
namespace App;

class RotinasAposCadastro
{
    public static function getInstance()
    {
        return new RotinasAposCadastro;
    }

    public function validaSerasa($dados)
    {
        $dados = json_decode($dados, true);

        $arrayForSave = [
            'serasa' => [
                'nome' => $dados['nome'],
                'cpf' => $dados['cpf'],
                'inserted_at' => date('Y-m-d H:i:s')
            ]
        ];

        file_put_contents('logs.log', json_encode($arrayForSave, JSON_PRETTY_PRINT), FILE_APPEND);

        return $this;
    }
    
    public function validaInstituicoesFinanceiras($dados)
    {
        $dados = json_decode($dados, true);

        $arrayForSave = [
            'bancos' => [
                'nome' => $dados['nome'],
                'cartaoCredito' => $dados['cartaoCredito'],
                'inserted_at' => date('Y-m-d H:i:s')
            ]
        ];

        file_put_contents('logs.log', json_encode($arrayForSave, JSON_PRETTY_PRINT), FILE_APPEND);
       
        return $this;
    }

    public function validaAntecedentesCriminais($dados)
    {
        $dados = json_decode($dados, true);

        $arrayForSave = [
            'antecedentes' => [
                'nome' => $dados['nome'],
                'cpf' => $dados['cpf'],
                'inserted_at' => date('Y-m-d H:i:s')
            ]
        ];

        file_put_contents('logs.log', json_encode($arrayForSave, JSON_PRETTY_PRINT), FILE_APPEND);
        return $this;
    }

    public function enviaEmail()
    {
        /**
         * implentação fake...
         */
        return $this;
    }   
}
