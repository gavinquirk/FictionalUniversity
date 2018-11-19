<?php

// Init Rest API - University Search
add_action('rest_api_init', 'universityRegisterSearch');

// University Search Route
function universityRegisterSearch() {
  register_rest_route('university/v1', 'search', array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'universitySearchResults'
  ));
}

// University Search Callback
function universitySearchResults() {
  $professors = new WP_Query(array(
    'post_type' => 'professor'
  ));

    // Array of results
    $professorResults = array();

    // Loop through professors query, push only needed data into professorResults array
    while($professors->have_posts()) {
      $professors->the_post();
      array_push($professorResults, array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }

    return $professorResults;

}


