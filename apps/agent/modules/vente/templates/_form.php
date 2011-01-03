<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('vente/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_vente='.$form->getObject()->getIdVente() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
		<td/>
        <td>
          <?php echo $form->renderHiddenFields(false) ?>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'vente/delete?id_vente='.$form->getObject()->getIdVente(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['montant']->renderLabel() ?></th>
        <td>
          <?php echo $form['montant']->renderError() ?>
          <?php echo $form['montant'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nom']->renderLabel() ?></th>
        <td>
          <?php echo $form['nom']->renderError() ?>
          <?php echo $form['nom'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['prenom']->renderLabel() ?></th>
        <td>
          <?php echo $form['prenom']->renderError() ?>
          <?php echo $form['prenom'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['numero_cc']->renderLabel() ?></th>
        <td>
          <?php echo $form['numero_cc']->renderError() ?>
          <?php echo $form['numero_cc'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['date_validite']->renderLabel() ?></th>
        <td>
          <?php echo $form['date_validite']->renderError() ?>
          <?php echo $form['date_validite'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cvv2']->renderLabel() ?></th>
        <td>
          <?php echo $form['cvv2']->renderError() ?>
          <?php echo $form['cvv2'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
