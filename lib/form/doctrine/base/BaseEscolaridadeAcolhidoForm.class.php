<?php

/**
 * EscolaridadeAcolhido form base class.
 *
 * @method EscolaridadeAcolhido getObject() Returns the current form's model object
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEscolaridadeAcolhidoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'acolhido_id'     => new sfWidgetFormInputHidden(),
      'escolaridade_id' => new sfWidgetFormInputHidden(),
      'nomeEscola'      => new sfWidgetFormInputText(),
      'dataConclusao'   => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'acolhido_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'acolhido_id', 'required' => false)),
      'escolaridade_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'escolaridade_id', 'required' => false)),
      'nomeEscola'      => new sfValidatorString(array('max_length' => 255)),
      'dataConclusao'   => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('escolaridade_acolhido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EscolaridadeAcolhido';
  }

}
