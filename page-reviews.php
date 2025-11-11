<?php


$args = [
    'wfPage' => '61705fe3535ec878cb60fbe8',
    'body' => '',
    'head' => 'head/page-alison-minet-adams',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-reviews');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-reviews' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-reviews');
}

get_footer('', $args);
