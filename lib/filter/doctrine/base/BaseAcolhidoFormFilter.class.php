<?php

/**
 * Acolhido filter form base class.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAcolhidoFormFilter extends PessoaFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['dataIngresso'] = new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate()));
    $this->validatorSchema['dataIngresso'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false))));

    $this->widgetSchema   ['motivoIngresso_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MotivoIngresso'), 'add_empty' => true));
    $this->validatorSchema['motivoIngresso_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MotivoIngresso'), 'column' => 'id'));

    $this->widgetSchema   ['processosRelacionados'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['processosRelacionados'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['zona'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['zona'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['distrito'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['distrito'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['livro'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['livro'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['folha'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['folha'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['termo'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['termo'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['documentoIdentidade'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['documentoIdentidade'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['cpf'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['cpf'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['titulo'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['titulo'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['carteiraTrabalho'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['carteiraTrabalho'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['possuiDeficiencia'] = new sfWidgetFormChoice(array('choices' => array('' => '', 'Sim' => 'Sim', 'Não' => 'Não')));
    $this->validatorSchema['possuiDeficiencia'] = new sfValidatorChoice(array('required' => false, 'choices' => array('Sim' => 'Sim', 'Não' => 'Não')));

    $this->widgetSchema   ['descricaoDeficiencia'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['descricaoDeficiencia'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['usoMedicamentoControlado'] = new sfWidgetFormChoice(array('choices' => array('' => '', 'Sim' => 'Sim', 'Não' => 'Não')));
    $this->validatorSchema['usoMedicamentoControlado'] = new sfValidatorChoice(array('required' => false, 'choices' => array('Sim' => 'Sim', 'Não' => 'Não')));

    $this->widgetSchema   ['descricaoMedicamentoControlado'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['descricaoMedicamentoControlado'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['mae_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mae'), 'add_empty' => true));
    $this->validatorSchema['mae_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mae'), 'column' => 'id'));

    $this->widgetSchema   ['pai_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pai'), 'add_empty' => true));
    $this->validatorSchema['pai_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pai'), 'column' => 'id'));

    $this->widgetSchema   ['responsavel_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Responsavel'), 'add_empty' => true));
    $this->validatorSchema['responsavel_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Responsavel'), 'column' => 'id'));

    $this->widgetSchema   ['responsavelGrauParentesco_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GrauParentescoResponsavel'), 'add_empty' => true));
    $this->validatorSchema['responsavelGrauParentesco_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GrauParentescoResponsavel'), 'column' => 'id'));

    $this->widgetSchema   ['sumarioSocial'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['sumarioSocial'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['sumarioPsicologico'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['sumarioPsicologico'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['dataDesligamento'] = new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate()));
    $this->validatorSchema['dataDesligamento'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false))));

    $this->widgetSchema   ['motivoDesligamento_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MotivoDesligamento'), 'add_empty' => true));
    $this->validatorSchema['motivoDesligamento_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MotivoDesligamento'), 'column' => 'id'));

    $this->widgetSchema->setNameFormat('acolhido_filters[%s]');
  }

  public function getModelName()
  {
    return 'Acolhido';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'dataIngresso' => 'Date',
      'motivoIngresso_id' => 'ForeignKey',
      'processosRelacionados' => 'Text',
      'zona' => 'Text',
      'distrito' => 'Text',
      'livro' => 'Text',
      'folha' => 'Text',
      'termo' => 'Text',
      'documentoIdentidade' => 'Text',
      'cpf' => 'Text',
      'titulo' => 'Text',
      'carteiraTrabalho' => 'Text',
      'possuiDeficiencia' => 'Enum',
      'descricaoDeficiencia' => 'Text',
      'usoMedicamentoControlado' => 'Enum',
      'descricaoMedicamentoControlado' => 'Text',
      'mae_id' => 'ForeignKey',
      'pai_id' => 'ForeignKey',
      'responsavel_id' => 'ForeignKey',
      'responsavelGrauParentesco_id' => 'ForeignKey',
      'sumarioSocial' => 'Text',
      'sumarioPsicologico' => 'Text',
      'dataDesligamento' => 'Date',
      'motivoDesligamento_id' => 'ForeignKey',
    ));
  }
}
