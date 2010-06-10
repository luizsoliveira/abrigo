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

    public function executeEscolaridade(sfWebrequest $request)
    {
        //$this->acolhido = Acolhido::find($request->getParameter('id'));
        //$this->acolhido = Doctrine::getTable('Acolhido')->findOneById($request->getParameter('id'));
        //$this->acolhido->findById($request->getParameter('id'));
        //$entradasESaidas = new EntradasESaidasAcolhido();
        //$entradasESaidas->setAcolhidoId($request->getParameter('id'));
        //$entradasESaidas->save();
        //$this->form = new EntradasESaidasAcolhidoForm();
        //$this->form->setDefault('acolhido_id', $request->getParameter('id'));
        //$this->getRequest()->setParameter('acolhido_id', $request->getParameter('id'));
        //$this->forward('entradas_e_saidas', 'new');
        $this->redirect('entradas_e_saidas/new?acolhido_id=' . $request->getParameter('id'));
        
    }



}
