<?php

/**
 * Pai form base class.
 *
 * @method Pai getObject() Returns the current form's model object
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePaiForm extends ResponsavelForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('pai[%s]');
  }

  public function getModelName()
  {
    return 'Pai';
  }

}
