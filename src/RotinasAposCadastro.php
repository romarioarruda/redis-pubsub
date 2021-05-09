<?php
namespace App;

class RotinasAposCadastro
{
    public static function getInstance()
    {
        return new RotinasAposCadastro;
    }

    public function validaSerasa()
    {
        /**
         * implentação fake...
         */
        return $this;
    }
    
    public function validaInstituicoesFinanceiras()
    {
        /**
         * implentação fake...
         */
        return $this;
    }

    public function validaAntecedentesCriminais()
    {
        /**
         * implentação fake...
         */
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
