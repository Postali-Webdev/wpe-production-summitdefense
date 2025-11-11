<?php


$args = [
    'wfPage' => '61705fe3535ec8947160fba4',
    'body' => '',
    'head' => 'head/page-firm-locations',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-firm-locations');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-firm-locations' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-firm-locations');
}

get_footer('', $args);
