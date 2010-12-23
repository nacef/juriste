<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('question/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_traitement_agent='.$form->getObject()->getIdTraitementAgent() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td></td>
        <td>
          <?php echo $form->renderHiddenFields(false) ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['commentaire_agent']->renderLabel() ?></th>
        <td>
          <?php echo $form['commentaire_agent']->renderError() ?>
          <?php echo $form['commentaire_agent'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_qualif_agent']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_qualif_agent']->renderError() ?>
          <?php echo $form['id_qualif_agent'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['rappel']->renderLabel() ?></th>
        <td>
          <?php echo $form['rappel']->renderError() ?>
          <?php echo $form['rappel'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['date_rappel']->renderLabel() ?></th>
        <td>
          <?php echo $form['date_rappel']->renderError() ?>
          <?php echo $form['date_rappel'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
