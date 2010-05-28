<?php

/**
 * Apadrinhamento form base class.
 *
 * @method Apadrinhamento getObject() Returns the current form's model object
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseApadrinhamentoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'acolhido_id' => new sfWidgetFormInputHidden(),
      'padrinho_id' => new sfWidgetFormInputHidden(),
      'dataInicio'  => new sfWidgetFormDate(),
      'dataFim'     => new sfWidgetFormDate(),
      'observacoes' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'acolhido_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'acolhido_id', 'required' => false)),
      'padrinho_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'padrinho_id', 'required' => false)),
      'dataInicio'  => new sfValidatorDate(),
      'dataFim'     => new sfValidatorDate(array('required' => false)),
      'observacoes' => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('apadrinhamento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Apadrinhamento';
  }

}
