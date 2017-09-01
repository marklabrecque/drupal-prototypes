<?php

namespace Drupal\charlie_trip_planner\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

define("GOOGLE_MAPS_API_KEY", "AIzaSyArf0VG5yJLITxhUxH9i4lXIhUIqxwfFUU");

/**
 * Class TripPlannerForm.
 */
class TripPlannerForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'trip_planner_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['map'] = [
      '#type' => 'markup',
      '#markup' => '<div id="map"></div><script async defer src="https://maps.googleapis.com/maps/api/js?key=' . GOOGLE_MAPS_API_KEY . '&callback=initMap"></script>',
      '#allowed_tags' => ['script', 'div', 'select', 'option', 'b'],
      '#attached' => array(
        'library' => array(
          'charlie_trip_planner/map'
        )
      )
    ];

    $form['origin'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Origin'),
      '#description' => $this->t('User inputs the initial location of the trip they are planning.'),
      '#default_value' => 'Disneyland',
      '#maxlength' => 64,
      '#size' => 64,
    ];
    $form['destination'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Destination'),
      '#description' => $this->t('User inputs the final destination of the trip they are planning.'),
      '#default_value' => 'Universal Studios Hollywood',
      '#maxlength' => 64,
      '#size' => 64,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    return true;
  }
}