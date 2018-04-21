<?php

namespace Drupal\forcontu_entities\Plugin\Field\FieldFormatter;

use Drupal\Component\Utility\Html;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'forcontu_entities_simple_text' formatter.
 *
 * @FieldFormatter(
 *   id = "forcontu_entities_simple_text",
 *   module = "forcontu_entities",
 *   label = @Translation("Simple text-based formatter"),
 *   field_types = {
 *     "forcontu_entities_color"
 *   }
 * )
 */
class SimpleTextFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = array();

    foreach ($items as $delta => $item) {
    $elements[$delta] = array(
      // We create a render array to produce the desired markup,
      // "<p style="color: #hexcolor">The color code ...
      // #hexcolor</p>".
      // See theme_html_tag().
      '#type' => 'html_tag',
      '#tag' => 'p',
      '#attributes' => array(
        'style' => 'color: ' . $item->value,
      ),
      '#value' => $this->t('The color code in this field is@code', 
                            array('@code' => $item->value)),
      );
    }
    return $elements;
  }

  /**
   * Generate the output appropriate for one field item.
   *
   * @param \Drupal\Core\Field\FieldItemInterface $item
   *   One field item.
   *
   * @return string
   *   The textual output generated.
   */
//  protected function viewValue(FieldItemInterface $item) {
//    // The text value has no text format assigned to it, so the user input
//    // should equal the output, including newlines.
//    return nl2br(Html::escape($item->value));
//  }

}
