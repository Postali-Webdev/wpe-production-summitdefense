<?php


$args = [
    'wfPage' => '61e75584bbc4541df7c69cf8',
    'body' => '',
    'head' => 'head/single-archive-blog',
];


if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('search');
}
function mypage_head() {
    echo '<style>

    @media  screen and (min-width: 1920px) {
	     .winning-button.more-results-btn.blog{
         width:100%;
       }
}

</style>';
}
add_action('wp_head', 'mypage_head');
get_header('', $args);

udesly_get_content_template( 'page-search' );

$args = [
  'footer' => 'footer/front-page',
];

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('search');
}

get_footer('', $args);
