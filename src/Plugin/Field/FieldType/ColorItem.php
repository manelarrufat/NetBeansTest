<?php

namespace Drupal\forcontu_entities\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'forcontu_entities_color' field type.
 *
 * @FieldType(
 *   id = "forcontu_entities_color",
 *   label = @Translation("Forcontu color"),
 *   module = "forcontu_entities",
 *   description = @Translation("Field to store an RGB color"),
 *   default_widget = "forcontu_entities_text",
 *   default_formatter = "forcontu_entities_simple_text",
 *   constraints = { "White" = {} }
 * )
 */
class ColorItem extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    // Prevent early t() calls by using the TranslatableMarkup.
    $properties['value'] = DataDefinition::create('string')
      ->setLabel(t('Hex value'));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    $schema = [
      'columns' => [
        'value' => [
          'type' => 'text',
          'size' => 'tiny',
          'not null' => FALSE,
        ],
      ],
    ];

    return $schema;
  }

  

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $value = $this->get('value')->getValue();
    return $value === NULL || $value === '';
  }

}
