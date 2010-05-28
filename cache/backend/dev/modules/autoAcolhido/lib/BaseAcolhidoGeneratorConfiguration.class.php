<?php

/**
 * acolhido module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage acolhido
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAcolhidoGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,  'viewEscolaridade' =>   array(    'label' => 'Escolaridade',    'action' => 'escolaridades',  ),);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%=nome%% - %%situacao%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Acolhidos';
  }

  public function getEditTitle()
  {
    return 'Editando o acolhido: %%nome%%';
  }

  public function getNewTitle()
  {
    return 'Novo Acolhido';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'nome',  1 => 'sexo',  2 => 'motivoIngresso_id',  3 => 'possuiDeficiencia',  4 => 'usoMedicamentoControlado',  5 => 'motivoDesligamento_id',  6 => 'pai_id',  7 => 'mae_id',  8 => 'responsavel_id',  9 => 'dataNascimento',  10 => 'dataIngresso',  11 => 'dataDesligamento',);
  }

  public function getFormDisplay()
  {
    return array(  'Geral' =>   array(    0 => 'nome',    1 => 'dataNascimento',    2 => 'sexo',  ),  'Ingresso' =>   array(    0 => 'dataIngresso',    1 => 'motivoIngresso_id',  ),  'Documentação' =>   array(    0 => 'processosRelacionados',    1 => 'zona',    2 => 'distrito',    3 => 'livro',    4 => 'folha',    5 => 'termo',    6 => 'documentoIdentidade',    7 => 'cpf',    8 => 'titulo',    9 => 'carteiraTrabalho',  ),  'Necessidades especiais' =>   array(    0 => 'possuiDeficiencia',    1 => 'descricaoDeficiencia',    2 => 'usoMedicamentoControlado',    3 => 'descricaoMedicamentoControlado',  ),  'Mãe' =>   array(    0 => 'mae_id',  ),  'Pai' =>   array(    0 => 'pai_id',  ),  'Responsável' =>   array(    0 => 'responsavelGrauParentesco_id',    1 => 'responsavel_id',  ),  'Perfil' =>   array(    0 => 'sumarioSocial',    1 => 'sumarioPsicologico',  ),);
  }

  public function getEditDisplay()
  {
    return array(  'Geral' =>   array(    0 => 'nome',    1 => 'dataNascimento',    2 => 'sexo',  ),  'Ingresso' =>   array(    0 => 'dataIngresso',    1 => 'motivoIngresso_id',  ),  'Documentação' =>   array(    0 => 'processosRelacionados',    1 => 'zona',    2 => 'distrito',    3 => 'livro',    4 => 'folha',    5 => 'termo',    6 => 'documentoIdentidade',    7 => 'cpf',    8 => 'titulo',    9 => 'carteiraTrabalho',  ),  'Necessidades especiais' =>   array(    0 => 'possuiDeficiencia',    1 => 'descricaoDeficiencia',    2 => 'usoMedicamentoControlado',    3 => 'descricaoMedicamentoControlado',  ),  'Mãe' =>   array(    0 => 'mae_id',  ),  'Pai' =>   array(    0 => 'pai_id',  ),  'Responsável' =>   array(    0 => 'responsavelGrauParentesco_id',    1 => 'responsavel_id',  ),  'Perfil' =>   array(    0 => 'sumarioSocial',    1 => 'sumarioPsicologico',  ),  'Desligamento' =>   array(    0 => 'motivoDesligamento_id',    1 => 'dataDesligamento',  ),);
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => '=nome',  1 => 'situacao',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nome' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'attributes' =>   array(    'size' => 50,  ),),
      'sexo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Enum',),
      'dataNascimento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Data de nascimento',),
      'dataIngresso' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Data de ingresso',),
      'motivoIngresso_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Motivo de ingresso',),
      'processosRelacionados' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Processos relacionados',  'attributes' =>   array(    'rows' => 10,    'cols' => 50,  ),),
      'zona' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'distrito' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'livro' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'folha' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'termo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'documentoIdentidade' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Documento de identidade',),
      'cpf' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'CPF',),
      'titulo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Título de eleitor',),
      'carteiraTrabalho' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Carteira de trabalho',),
      'possuiDeficiencia' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Enum',  'label' => 'Possui deficiência',),
      'descricaoDeficiencia' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Descrição da deficiência',  'attributes' =>   array(    'rows' => 10,    'cols' => 50,  ),),
      'usoMedicamentoControlado' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Enum',  'label' => 'Medicamento controlado',),
      'descricaoMedicamentoControlado' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Descrição do medicamento controlado',  'attributes' =>   array(    'rows' => 10,    'cols' => 50,  ),),
      'mae_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Mãe',),
      'pai_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'responsavel_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'responsavelGrauParentesco_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Grau de parentêsco do responsável',),
      'sumarioSocial' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Sumário social',  'attributes' =>   array(    'rows' => 10,    'cols' => 50,  ),),
      'sumarioPsicologico' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Sumário psicológico',  'attributes' =>   array(    'rows' => 10,    'cols' => 50,  ),),
      'dataDesligamento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Data de desligamento',),
      'motivoDesligamento_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Motivo de desligamento',),
      'situacao' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Situação',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'nome' => array(),
      'sexo' => array(),
      'dataNascimento' => array(),
      'dataIngresso' => array(),
      'motivoIngresso_id' => array(),
      'processosRelacionados' => array(),
      'zona' => array(),
      'distrito' => array(),
      'livro' => array(),
      'folha' => array(),
      'termo' => array(),
      'documentoIdentidade' => array(),
      'cpf' => array(),
      'titulo' => array(),
      'carteiraTrabalho' => array(),
      'possuiDeficiencia' => array(),
      'descricaoDeficiencia' => array(),
      'usoMedicamentoControlado' => array(),
      'descricaoMedicamentoControlado' => array(),
      'mae_id' => array(),
      'pai_id' => array(),
      'responsavel_id' => array(),
      'responsavelGrauParentesco_id' => array(),
      'sumarioSocial' => array(),
      'sumarioPsicologico' => array(),
      'dataDesligamento' => array(),
      'motivoDesligamento_id' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'nome' => array(),
      'sexo' => array(),
      'dataNascimento' => array(),
      'dataIngresso' => array(),
      'motivoIngresso_id' => array(),
      'processosRelacionados' => array(),
      'zona' => array(),
      'distrito' => array(),
      'livro' => array(),
      'folha' => array(),
      'termo' => array(),
      'documentoIdentidade' => array(),
      'cpf' => array(),
      'titulo' => array(),
      'carteiraTrabalho' => array(),
      'possuiDeficiencia' => array(),
      'descricaoDeficiencia' => array(),
      'usoMedicamentoControlado' => array(),
      'descricaoMedicamentoControlado' => array(),
      'mae_id' => array(),
      'pai_id' => array(),
      'responsavel_id' => array(),
      'responsavelGrauParentesco_id' => array(),
      'sumarioSocial' => array(),
      'sumarioPsicologico' => array(),
      'dataDesligamento' => array(),
      'motivoDesligamento_id' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'nome' => array(),
      'sexo' => array(),
      'dataNascimento' => array(),
      'dataIngresso' => array(),
      'motivoIngresso_id' => array(),
      'processosRelacionados' => array(),
      'zona' => array(),
      'distrito' => array(),
      'livro' => array(),
      'folha' => array(),
      'termo' => array(),
      'documentoIdentidade' => array(),
      'cpf' => array(),
      'titulo' => array(),
      'carteiraTrabalho' => array(),
      'possuiDeficiencia' => array(),
      'descricaoDeficiencia' => array(),
      'usoMedicamentoControlado' => array(),
      'descricaoMedicamentoControlado' => array(),
      'mae_id' => array(),
      'pai_id' => array(),
      'responsavel_id' => array(),
      'responsavelGrauParentesco_id' => array(),
      'sumarioSocial' => array(),
      'sumarioPsicologico' => array(),
      'dataDesligamento' => array(),
      'motivoDesligamento_id' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'nome' => array(),
      'sexo' => array(),
      'dataNascimento' => array(),
      'dataIngresso' => array(),
      'motivoIngresso_id' => array(),
      'processosRelacionados' => array(),
      'zona' => array(),
      'distrito' => array(),
      'livro' => array(),
      'folha' => array(),
      'termo' => array(),
      'documentoIdentidade' => array(),
      'cpf' => array(),
      'titulo' => array(),
      'carteiraTrabalho' => array(),
      'possuiDeficiencia' => array(),
      'descricaoDeficiencia' => array(),
      'usoMedicamentoControlado' => array(),
      'descricaoMedicamentoControlado' => array(),
      'mae_id' => array(),
      'pai_id' => array(),
      'responsavel_id' => array(),
      'responsavelGrauParentesco_id' => array(),
      'sumarioSocial' => array(),
      'sumarioPsicologico' => array(),
      'dataDesligamento' => array(),
      'motivoDesligamento_id' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'nome' => array(),
      'sexo' => array(),
      'dataNascimento' => array(),
      'dataIngresso' => array(),
      'motivoIngresso_id' => array(),
      'processosRelacionados' => array(),
      'zona' => array(),
      'distrito' => array(),
      'livro' => array(),
      'folha' => array(),
      'termo' => array(),
      'documentoIdentidade' => array(),
      'cpf' => array(),
      'titulo' => array(),
      'carteiraTrabalho' => array(),
      'possuiDeficiencia' => array(),
      'descricaoDeficiencia' => array(),
      'usoMedicamentoControlado' => array(),
      'descricaoMedicamentoControlado' => array(),
      'mae_id' => array(),
      'pai_id' => array(),
      'responsavel_id' => array(),
      'responsavelGrauParentesco_id' => array(),
      'sumarioSocial' => array(),
      'sumarioPsicologico' => array(),
      'dataDesligamento' => array(),
      'motivoDesligamento_id' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'AcolhidoForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'AcolhidoFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
