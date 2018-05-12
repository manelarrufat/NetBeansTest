<?php

namespace Drupal\forcontu_entities\Plugin\Validation\Constraint;

use Drupal\Core\Entity\Plugin\Validation\Constraint\CompositeConstraintBase;

/**
 * Supports validating color item in News.
 *
 * @Constraint(
 *   id = "White",
 *   label = @Translation("Color item in News", context = "Validation"),
 *   type = "entity:news"
 * )
 */
class WhiteConstraint extends CompositeConstraintBase {

  /**
   * Message shown when an anonymous user comments using a registered name.
   *
   * @var string
   */
  public $messageColorNotAllowed = 'The hexcolor cannot have the letter pair FF.';

  /**
   * {@inheritdoc}
   */
  public function coversFields() {
    return ['forcontu_entities_color'];
  }

}
