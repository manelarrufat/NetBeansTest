<?php

namespace Drupal\forcontu_entities\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Message type entity.
 *
 * @ConfigEntityType(
 *   id = "forcontu_entities_message_type",
 *   label = @Translation("Message type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\forcontu_entities\MessageTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\forcontu_entities\Form\MessageTypeForm",
 *       "edit" = "Drupal\forcontu_entities\Form\MessageTypeForm",
 *       "delete" = "Drupal\forcontu_entities\Form\MessageTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\forcontu_entities\MessageTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "forcontu_entities_message_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "forcontu_entities_message",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/forcontu_entities_message_type/{forcontu_entities_message_type}",
 *     "add-form" = "/admin/structure/forcontu_entities_message_type/add",
 *     "edit-form" = "/admin/structure/forcontu_entities_message_type/{forcontu_entities_message_type}/edit",
 *     "delete-form" = "/admin/structure/forcontu_entities_message_type/{forcontu_entities_message_type}/delete",
 *     "collection" = "/admin/structure/forcontu_entities_message_type"
 *   }
 * )
 */
class MessageType extends ConfigEntityBundleBase implements MessageTypeInterface {

  /**
   * The Message type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Message type label.
   *
   * @var string
   */
  protected $label;

}
