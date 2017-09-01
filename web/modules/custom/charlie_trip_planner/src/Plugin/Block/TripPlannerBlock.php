<?php

namespace Drupal\charlie_trip_planner\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'TripPlannerBlock' block.
 *
 * @Block(
 *  id = "trip_planner_block",
 *  admin_label = @Translation("Trip Planner"),
 * )
 */
class TripPlannerBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\charlie_trip_planner\Form\TripPlannerForm');

    return $form;
  }

}
