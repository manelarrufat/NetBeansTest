<?php

namespace Drupal\forcontu_entities\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the White constraint.
 */
class WhiteConstraintValidator extends ConstraintValidator {

  /**
   * Validator 2.5 and upwards compatible execution context.
   *
   * @var \Symfony\Component\Validator\Context\ExecutionContextInterface
   */
  protected $context;

  
  /**
   * {@inheritdoc}
   */
  public function validate($entity, Constraint $constraint) {
    $hexcolor = strtoupper($entity->value);
    $hexcolor = str_replace("#","",$hexcolor);
    
    if (substr($hexcolor, 0, 2) == 'FF' || substr($hexcolor, 2, 2) == 'FF' 
        || substr($hexcolor, 4, 2) == 'FF') {
    
      $this->context->buildViolation($constraint->messageColorNotAllowed)
          ->atPath('forcontu_entities_color')
          ->addViolation();
    }
  }


}
