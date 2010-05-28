<?php

/**
 * acolhido module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage acolhido
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAcolhidoGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'acolhido' : 'acolhido_'.$action;
  }
}
