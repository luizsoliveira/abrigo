<?php

/**
 * EscolaridadeAcolhido form.
 *
 * @package    abrigo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EscolaridadeAcolhidoForm extends BaseEscolaridadeAcolhidoForm
{
  public function configure()
  {

    $this->widgetSchema['acolhido_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido')));
    $this->validatorSchema['acolhido_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'column' => 'id'));
    $this->widgetSchema['escolaridade_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NivelEscolaridade')));
    $this->validatorSchema['escolaridade_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NivelEscolaridade'), 'column' => 'id'));


  }
}
