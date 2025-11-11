<?php


$args = [
    'wfPage' => '61d4d6fbe615ca5bd3721c0d',
    'body' => '',
    'head' => 'head/page-alison-minet-adams',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-attorney-jessica-san-luis');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-attorney-jessica-san-luis' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-attorney-jessica-san-luis');
}

get_footer('', $args);
