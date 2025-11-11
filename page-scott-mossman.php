<?php


$args = [
    'wfPage' => '61705fe3535ec8551f60fc19',
    'body' => '',
    'head' => 'head/page-alison-minet-adams',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-scott-mossman');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-scott-mossman' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-scott-mossman');
}

get_footer('', $args);
