<?php

/**
 * Responsavel filter form base class.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseResponsavelFormFilter extends PessoaFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['dataObito'] = new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate()));
    $this->validatorSchema['dataObito'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false))));

    $this->widgetSchema   ['endLogradouro'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endLogradouro'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endNumero'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endNumero'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endComplemento'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endComplemento'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endBairro'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endBairro'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endCidade'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endCidade'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endEstado'] = new sfWidgetFormChoice(array('choices' => array('' => '', 'AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'GO' => 'GO', 'ES' => 'ES', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SP' => 'SP', 'SC' => 'SC', 'SE' => 'SE', 'TO' => 'TO')));
    $this->validatorSchema['endEstado'] = new sfValidatorChoice(array('required' => false, 'choices' => array('AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'GO' => 'GO', 'ES' => 'ES', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SP' => 'SP', 'SC' => 'SC', 'SE' => 'SE', 'TO' => 'TO')));

    $this->widgetSchema   ['endCep'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endCep'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['contatos'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['contatos'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['autorizacaoVisita'] = new sfWidgetFormChoice(array('choices' => array('' => '', 'Sim' => 'Sim', 'Não' => 'Não')));
    $this->validatorSchema['autorizacaoVisita'] = new sfValidatorChoice(array('required' => false, 'choices' => array('Sim' => 'Sim', 'Não' => 'Não')));

    $this->widgetSchema   ['observacao'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['observacao'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema->setNameFormat('responsavel_filters[%s]');
  }

  public function getModelName()
  {
    return 'Responsavel';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'dataObito' => 'Date',
      'endLogradouro' => 'Text',
      'endNumero' => 'Text',
      'endComplemento' => 'Text',
      'endBairro' => 'Text',
      'endCidade' => 'Text',
      'endEstado' => 'Enum',
      'endCep' => 'Text',
      'contatos' => 'Text',
      'autorizacaoVisita' => 'Enum',
      'observacao' => 'Text',
    ));
  }
}
