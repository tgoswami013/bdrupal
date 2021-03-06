<?php

namespace Drupal\Driver\Fields\Drupal7;

/**
 * Datetime field handler for Drupal 7.
 */
class DatetimeHandler extends AbstractHandler {

  /**
   * {@inheritdoc}
   */
  public function expand($values) {
    $return = [];
    if (isset($this->fieldInfo['columns']['value2'])) {
      foreach ($values as $value) {
        $return[$this->language][] = [
          'value' => $value[0],
          'value2' => $value[1],
        ];
      }
    }
    else {
      foreach ($values as $value) {
        $return[$this->language][] = ['value' => $value];
      }
    }
    return $return;
  }

}
