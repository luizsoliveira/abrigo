<?php

require_once dirname(__FILE__).'/../lib/entradas_e_saidasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/entradas_e_saidasGeneratorHelper.class.php';

/**
 * entradas_e_saidas actions.
 *
 * @package    abrigo
 * @subpackage entradas_e_saidas
 * @author     Luiz Oliveira
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class entradas_e_saidasActions extends autoEntradas_e_saidasActions
{

    public function executeNew(sfWebRequest $request) {

        parent::executeNew($request);
        $acolhido =  $request->getParameter('acolhido_id');
        if ($acolhido) {
            $acolhido = Doctrine::getTable('Acolhido')->findOneById($acolhido);
            if ($acolhido->isFora()) {
                $this->getUser()->setFlash("error", "Acolhido já está fora do abrigo e portanto não se pode cadastrar mais saídas. Por favor, verifique registro de saída ainda pendente.");
                $this->redirect("acolhido");
            }

        } else {

            $this->getUser()->setFlash("error", "Você precisa selecionar primeiramente um acolhido. Vá até a página de acolhidos e clique no botão de \"Entradas e Saídas\" de algum acolhido.");
            $this->redirect("acolhido");
    
        }
        

    }


}
