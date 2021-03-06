<?php
require_once 'Model.php';
class ControleDAO extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->tabela = 'controles';
        $this->class = 'Controle';
    }

    public function insereControle(Controle $controle) {
    	$values = "null, 
            '{$controle->getNome()}',  
            '{$controle->getStatus()}',
            '{$controle->getTipo()}'";
    	return $this->inserir($values);
    }

    public function alteraControle(Controle $controle) {
    	$values = "nome = '{$controle->getNome()}', 
                    tipo = '{$controle->getTipo()}', 
                    status = '{$controle->getStatus()}'";
    	$this->alterar($controle->getId(), $values);
    }
}