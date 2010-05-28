<?php


class PaiTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Pai');
        
    }

    function getHomens() {

        return Doctrine_Core::getTable('Pai')->createQuery('p')->where('p.sexo = ?', 'Masculino');

    }
}
