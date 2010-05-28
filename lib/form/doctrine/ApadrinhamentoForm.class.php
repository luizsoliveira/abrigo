<?php

/**
 * Apadrinhamento form.
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ApadrinhamentoForm extends BaseApadrinhamentoForm
{
  public function configure()
  {

    $this->widgetSchema['acolhido_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'add_empty' => true));
    $this->validatorSchema['acolhido_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'column' => 'id'));
    $this->widgetSchema['padrinho_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Padrinho'), 'add_empty' => true));
    $this->validatorSchema['padrinho_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Padrinho'), 'column' => 'id'));


  }
}
