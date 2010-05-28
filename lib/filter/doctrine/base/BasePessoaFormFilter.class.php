<?php

/**
 * Pessoa filter form base class.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePessoaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sexo'           => new sfWidgetFormChoice(array('choices' => array('' => '', 'Masculino' => 'Masculino', 'Feminino' => 'Feminino'))),
      'dataNascimento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'nome'           => new sfValidatorPass(array('required' => false)),
      'sexo'           => new sfValidatorChoice(array('required' => false, 'choices' => array('Masculino' => 'Masculino', 'Feminino' => 'Feminino'))),
      'dataNascimento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('pessoa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pessoa';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'nome'           => 'Text',
      'sexo'           => 'Enum',
      'dataNascimento' => 'Date',
    );
  }
}
