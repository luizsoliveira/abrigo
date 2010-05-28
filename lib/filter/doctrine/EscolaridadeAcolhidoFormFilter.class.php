<?php

/**
 * EscolaridadeAcolhido filter form.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EscolaridadeAcolhidoFormFilter extends BaseEscolaridadeAcolhidoFormFilter
{
  public function configure()
  {

    $this->widgetSchema['acolhido_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'add_empty' => true));
    $this->validatorSchema['acolhido_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'column' => 'id', 'required' => false));
    $this->widgetSchema['escolaridade_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NivelEscolaridade'), 'add_empty' => true));
    $this->validatorSchema['escolaridade_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NivelEscolaridade'), 'column' => 'id', 'required' => false));

  }

  public function getFields()
  {
    return array(
      'acolhido_id'     => 'ForeignKey',
      'escolaridade_id' => 'ForeignKey',
      'nomeEscola'      => 'Text',
      'dataConclusao'   => 'Date',
    );
  }

}
