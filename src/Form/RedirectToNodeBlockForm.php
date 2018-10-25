<?php

namespace Drupal\redirect_to_node\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Redirect to Node Block Form
 */
class RedirectToNodeBlockForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'redirect_to_node_block_form';
  }
 /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['id'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Node ID'),
      '#description' => $this->t('Enter the Node ID'),
    );

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Go'),
    );

    return $form;
  }
 /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $id = $form_state->getValue('id');
    if (!is_numeric($id)) {
      $form_state->setErrorByName('id', $this->t('Enter a valid node ID.'));
    }

    if ($id < 1) {
      $form_state->setErrorByName('id', $this->t('Enter a valid node ID.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $form_state->setRedirect(
      'redirect_to_node.generate',
      array(
        'id' => $form_state->getValue('id'),
      )
    );
  }
}
