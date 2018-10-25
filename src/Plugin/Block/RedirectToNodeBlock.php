<?php

namespace Drupal\redirect_to_node\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Redirects to Node ID
 *
 * @Block(
 *   id = "redirect_to_node",
 *   admin_label = @Translation("Redirect To Node Block"),
 * )
 */
class RedirectToNodeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\redirect_to_node\Form\RedirectToNodeBlockForm');
  }
  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {

    $form = parent::blockForm($form, $form_state);

    return $form;
  }

}
