<?php


class MaeTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Mae');
    }

    function getMulheres() {

        return Doctrine_Core::getTable('Mae')->createQuery('m')->where('m.sexo = ?', 'Feminino');

    }
}
