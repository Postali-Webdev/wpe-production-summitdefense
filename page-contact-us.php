<?php


$args = [
    'wfPage' => '61705fe3535ec847bb60fb69',
    'body' => '',
    'head' => 'head/page-contact-us',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-contact-us');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-contact-us' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-contact-us');
}

get_footer('', $args);
