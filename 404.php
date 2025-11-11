<?php


$args = [
    'wfPage' => '61de1bf42808e0312b814132',
    'body' => '',
    'head' => 'head/single-archive-blog',
];

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('404');
}

get_header('', $args);

udesly_get_content_template( '404' );

$args = [
  'footer' => 'footer/front-page',
];

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('404');
}

get_footer('', $args);
