<?php

require_once dirname(__FILE__).'/../lib/acolhidoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/acolhidoGeneratorHelper.class.php';

/**
 * acolhido actions.
 *
 * @package    abrigo
 * @subpackage acolhido
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class acolhidoActions extends autoAcolhidoActions
{

    public function executeEscolaridades(sfWebrequest $request)
    {
        $id = $request->getParameter('id');
        var_dump($request);
        echo $id;
    }



}
