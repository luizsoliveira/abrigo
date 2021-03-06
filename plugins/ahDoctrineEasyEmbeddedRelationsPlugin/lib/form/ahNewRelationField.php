<?php

/**
 * This class displays the button to add new embedded relation forms; it relies on client-side JavaScript to work.
 * @author     Krzysztof Kotowicz <kkotowicz at gmail dot com>
 */
class ahNewRelationField extends sfWidgetForm
{

  protected function configure($options = array(), $attributes = array())
  {
    $this->addRequiredOption('containerName');
    $this->addOption('addJavascript', false);
    $this->addOption('useJSFramework', 'jQuery');
  }

  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    return $this->renderContentTag('button', $value !== null ? $value : '+', array('type' => 'button', 'class' => 'ahAddRelation', 'rel' => $this->getOption('containerName')));
  }

  public function getJavaScripts()
  {
    if (false === $this->getOption('addJavascript')) return array();

    // allow only 0-9,a-z,A-Z,- and _ for framework name (LFI protection)
    $cleanFrameworkName = preg_replace('#[^0-9a-z._-]#i', '', $this->getOption('useJSFramework'));

    $filename = sprintf('ahDoctrineEasyEmbeddedRelationsPlugin.%s.js', $cleanFrameworkName);
    return array('/ahDoctrineEasyEmbeddedRelationsPlugin/js/' . $filename);
  }
}