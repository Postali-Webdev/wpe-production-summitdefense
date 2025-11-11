<?php
/**
* Template Name: Page Location Sacramento Related Links
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

$args = [
    'wfPage' => '61705fe3535ec8ec7960fc08',
    'body' => '',
    'head' => 'head/page-alison-minet-adams',
];

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-sacramento');
}

get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-sacramento-template' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-sacramento');
}

get_footer('', $args);
