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
    <div id="container">
      <div id="header">
         <h1>
           <a href="<?php echo url_for('homepage') ?>">
              <img src="logo.png"
alt="Jobeet Job Board" />
           </a>
         </h1>
      </div>
      <div id="menu">
         <ul>
           <li>
              <?php echo link_to('Acolhidos', 'acolhido') ?>
           </li>
           <li>
              <?php echo link_to('Escolaridades', 'escolaridade_acolhido') ?>
           </li>
           <li>
              <?php echo link_to('Cursos externos', 'curso_externo_acolhido') ?>
           </li>
            <li>
              <?php echo link_to('Entradas e saidas', 'entradas_e_saidas_acolhido') ?>
           </li>
            <li>
              <?php echo link_to('Entidades passadas', 'entidades_passadas_acolhido') ?>
           </li>
            <li>
              <?php echo link_to('Pais e Responsáveis', 'responsavel') ?>
           </li>
            <li>
              <?php echo link_to('Padrinhos', 'padrinho') ?>
           </li>
            <li>
              <?php echo link_to('Voluntários', 'voluntario') ?>
           </li>
        </ul>
      </div>
      <div id="content">
        <?php echo $sf_content ?>
      </div>
      <div id="footer">
        produzido por <a href="luizfelipe.com.br" target=_blank>Luiz Oliveira</a> com o framework<a href="http://www.symfony-project.org/" target=_blank> symfony</a>
        </a>
      </div>
    </div>
  </body>
</html>

