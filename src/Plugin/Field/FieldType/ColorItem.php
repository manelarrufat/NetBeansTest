<?php

namespace Drupal\forcontu_entities\Plugin\Field\FieldType;

use Drupal\Component\Utility\Random;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
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
 *   default_formatter = "forcontu_entities_simple_text"
 * )
 */
class ColorItem extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
//  public static function defaultStorageSettings() {
//    return [
//      'max_length' => 255,
//      'is_ascii' => FALSE,
//      'case_sensitive' => FALSE,
//    ] + parent::defaultStorageSettings();
//  }

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
//  public function getConstraints() {
//    $constraints = parent::getConstraints();
//
//    if ($max_length = $this->getSetting('max_length')) {
//      $constraint_manager = \Drupal::typedDataManager()->getValidationConstraintManager();
//      $constraints[] = $constraint_manager->create('ComplexData', [
//        'value' => [
//          'Length' => [
//            'max' => $max_length,
//            'maxMessage' => t('%name: may not be longer than @max characters.', [
//              '%name' => $this->getFieldDefinition()->getLabel(),
//              '@max' => $max_length
//            ]),
//          ],
//        ],
//      ]);
//    }
//
//    return $constraints;
//  }

  /**
   * {@inheritdoc}
   */
//  public static function generateSampleValue(FieldDefinitionInterface $field_definition) {
//    $random = new Random();
//    $values['value'] = $random->word(mt_rand(1, $field_definition->getSetting('max_length')));
//    return $values;
//  }

  /**
   * {@inheritdoc}
   */
//  public function storageSettingsForm(array &$form, FormStateInterface $form_state, $has_data) {
//    $elements = [];
//
//    $elements['max_length'] = [
//      '#type' => 'number',
//      '#title' => t('Maximum length'),
//      '#default_value' => $this->getSetting('max_length'),
//      '#required' => TRUE,
//      '#description' => t('The maximum length of the field in characters.'),
//      '#min' => 1,
//      '#disabled' => $has_data,
//    ];
//
//    return $elements;
//  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $value = $this->get('value')->getValue();
    return $value === NULL || $value === '';
  }

}