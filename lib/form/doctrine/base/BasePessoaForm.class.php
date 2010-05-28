<?php

/**
 * Pessoa form base class.
 *
 * @method Pessoa getObject() Returns the current form's model object
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePessoaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'nome'           => new sfWidgetFormInputText(),
      'sexo'           => new sfWidgetFormChoice(array('choices' => array('Masculino' => 'Masculino', 'Feminino' => 'Feminino'))),
      'dataNascimento' => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'nome'           => new sfValidatorString(array('max_length' => 255)),
      'sexo'           => new sfValidatorChoice(array('choices' => array(0 => 'Masculino', 1 => 'Feminino'))),
      'dataNascimento' => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pessoa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pessoa';
  }

}
