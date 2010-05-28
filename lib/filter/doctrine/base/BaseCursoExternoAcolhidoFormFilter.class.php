<?php

/**
 * CursoExternoAcolhido filter form base class.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCursoExternoAcolhidoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'acolhido_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'add_empty' => true)),
      'nomeCurso'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descricao'     => new sfWidgetFormFilterInput(),
      'nomeEscola'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dataConclusao' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'acolhido_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Acolhido'), 'column' => 'id')),
      'nomeCurso'     => new sfValidatorPass(array('required' => false)),
      'descricao'     => new sfValidatorPass(array('required' => false)),
      'nomeEscola'    => new sfValidatorPass(array('required' => false)),
      'dataConclusao' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('curso_externo_acolhido_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CursoExternoAcolhido';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'acolhido_id'   => 'ForeignKey',
      'nomeCurso'     => 'Text',
      'descricao'     => 'Text',
      'nomeEscola'    => 'Text',
      'dataConclusao' => 'Date',
    );
  }
}
