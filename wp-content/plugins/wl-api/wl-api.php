<?php
// /**
//
//   *Plugin Name: Custom API
//   */
// add_action('init', function() {
//
// function getNinjaFormData(WP_REST_Request $request) {
//     $id = $request->get_param('id');
//     $settings = ['label', 'type', 'required'];
//     $formFields = Ninja_Forms()->form(1)->get_fields();
//     $data = [];
//
//     foreach ($formFields as $formField) {
//       $key = $formField->get_setting('key');
//       foreach ($settings as $setting) {
//         $data[$key][] = $formField->get_setting($setting);
//       }
//     }
//
//     return new WP_REST_Response( $data, 200 );
//   }
// });
//
// add_action( 'rest_api_init', function () {
//   register_rest_route( 'ninja-forms', '/id/(?P<id>\d+)', array(
//     'methods' => 'GET',
//     'callback' => 'getNinjaFormData',
//   ));
// });
?>


<?php
/**

  *Plugin Name: Custom API
  */
// add_action('init', function() {

// function getNinjaFormData(WP_REST_Request $request) {
//     $id = $request->get_param('id');
//     $settings = ['label', 'type', 'required'];
//     $formFields = Ninja_Forms()->form(1)->get_fields();
//     $data = [];
//
//     foreach ($formFields as $formField) {
//       $key = $formField->get_setting('key');
//       foreach ($settings as $setting) {
//         $data[$key][] = $formField->get_setting($setting);
//       }
//     }
//
//     return new WP_REST_Response( $data, 200 );
//   }
// });

// function wl_posts() {
//   return 'please work';
// }
//
// add_action( 'rest_api_init', function () {
//   register_rest_route( 'wl/v1', 'posts', array(
//     'methods' => 'GET',
//     'callback' => 'wl_posts',
//   ));
// });
?>
