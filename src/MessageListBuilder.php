<?php

namespace Drupal\forcontu_entities;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Message entities.
 *
 * @ingroup forcontu_entities
 */
class MessageListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Message ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\forcontu_entities\Entity\Message */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.forcontu_entities_message.edit_form',
      ['forcontu_entities_message' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
