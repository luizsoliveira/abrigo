<?php use_helper('I18N', 'Date') ?>
<?php include_partial('acolhido/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Novo Acolhido', array(), 'messages') ?></h1>

  <?php include_partial('acolhido/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('acolhido/form_header', array('acolhido' => $acolhido, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('acolhido/form', array('acolhido' => $acolhido, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('acolhido/form_footer', array('acolhido' => $acolhido, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
