<?php
/**
* Template Name: Page Location Redwood City Related Links
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

$args = [
    'wfPage' => '61705fe3535ec854a760fbe6',
    'body' => '',
    'head' => 'head/page-alison-minet-adams',
];

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-redwood-city');
}

get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-redwood-city-template' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-redwood-city');
}

get_footer('', $args);
