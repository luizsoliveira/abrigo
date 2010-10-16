<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php $sf_user->setCulture('pt_BR') ?>
    <?php use_stylesheet('admin.css') ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
<body>
  <?php include_component('sfAdminDash','header'); ?>
  <?php echo  $sf_content ?>
  <?php include_partial('sfAdminDash/footer'); ?>
</body>

