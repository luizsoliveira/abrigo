<?
class myMaeWidgetFormDoctrineChoice extends sfWidgetFormDoctrineChoice
{

public function __construct($options = array(), $attributes = array())
  {
    $options['choices'] = array();
    $options['model'] = 'Mae';
    $options['query'] = Doctrine::getTable('Mae')->getMulheres();
    $options['add_empty'] = true;

    parent::__construct($options, $attributes);
  }

}
?>
