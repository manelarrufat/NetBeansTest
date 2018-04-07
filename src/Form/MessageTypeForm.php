<?php

namespace Drupal\forcontu_entities\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class MessageTypeForm.
 */
class MessageTypeForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $forcontu_entities_message_type = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $forcontu_entities_message_type->label(),
      '#description' => $this->t("Label for the Message type."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $forcontu_entities_message_type->id(),
      '#machine_name' => [
        'exists' => '\Drupal\forcontu_entities\Entity\MessageType::load',
      ],
      '#disabled' => !$forcontu_entities_message_type->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $forcontu_entities_message_type = $this->entity;
    $status = $forcontu_entities_message_type->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Message type.', [
          '%label' => $forcontu_entities_message_type->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Message type.', [
          '%label' => $forcontu_entities_message_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($forcontu_entities_message_type->toUrl('collection'));
  }

}
