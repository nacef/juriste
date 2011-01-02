<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('question/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_question='.$form->getObject()->getIdQuestion() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('question/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'question/delete?id_question='.$form->getObject()->getIdQuestion(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
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
        <th><?php echo $form['code_postal']->renderLabel() ?></th>
        <td>
          <?php echo $form['code_postal']->renderError() ?>
          <?php echo $form['code_postal'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pays']->renderLabel() ?></th>
        <td>
          <?php echo $form['pays']->renderError() ?>
          <?php echo $form['pays'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['telephone']->renderLabel() ?></th>
        <td>
          <?php echo $form['telephone']->renderError() ?>
          <?php echo $form['telephone'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['email']->renderLabel() ?></th>
        <td>
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['texte_question']->renderLabel() ?></th>
        <td>
          <?php echo $form['texte_question']->renderError() ?>
          <?php echo $form['texte_question'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
