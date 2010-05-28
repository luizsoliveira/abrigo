<?php


class AcolhidoTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Acolhido');
    }

    
}
