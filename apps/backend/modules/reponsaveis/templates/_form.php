<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('reponsaveis/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('reponsaveis/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'reponsaveis/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nome']->renderLabel() ?></th>
        <td>
          <?php echo $form['nome']->renderError() ?>
          <?php echo $form['nome'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['sexo']->renderLabel() ?></th>
        <td>
          <?php echo $form['sexo']->renderError() ?>
          <?php echo $form['sexo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['dataNascimento']->renderLabel() ?></th>
        <td>
          <?php echo $form['dataNascimento']->renderError() ?>
          <?php echo $form['dataNascimento'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['dataObito']->renderLabel() ?></th>
        <td>
          <?php echo $form['dataObito']->renderError() ?>
          <?php echo $form['dataObito'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['endLogradouro']->renderLabel() ?></th>
        <td>
          <?php echo $form['endLogradouro']->renderError() ?>
          <?php echo $form['endLogradouro'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['endNumero']->renderLabel() ?></th>
        <td>
          <?php echo $form['endNumero']->renderError() ?>
          <?php echo $form['endNumero'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['endComplemento']->renderLabel() ?></th>
        <td>
          <?php echo $form['endComplemento']->renderError() ?>
          <?php echo $form['endComplemento'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['endBairro']->renderLabel() ?></th>
        <td>
          <?php echo $form['endBairro']->renderError() ?>
          <?php echo $form['endBairro'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['endCidade']->renderLabel() ?></th>
        <td>
          <?php echo $form['endCidade']->renderError() ?>
          <?php echo $form['endCidade'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['endEstado']->renderLabel() ?></th>
        <td>
          <?php echo $form['endEstado']->renderError() ?>
          <?php echo $form['endEstado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['endCep']->renderLabel() ?></th>
        <td>
          <?php echo $form['endCep']->renderError() ?>
          <?php echo $form['endCep'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['contatos']->renderLabel() ?></th>
        <td>
          <?php echo $form['contatos']->renderError() ?>
          <?php echo $form['contatos'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['autorizacaoVisita']->renderLabel() ?></th>
        <td>
          <?php echo $form['autorizacaoVisita']->renderError() ?>
          <?php echo $form['autorizacaoVisita'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['observacao']->renderLabel() ?></th>
        <td>
          <?php echo $form['observacao']->renderError() ?>
          <?php echo $form['observacao'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
