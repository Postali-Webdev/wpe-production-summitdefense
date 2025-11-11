<?php


$args = [
    'wfPage' => '618e44a9699c348d71d0fd5e',
    'body' => '',
    'head' => 'head/page-alison-minet-adams',
];

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-blog');
}
function mypage_head() {
    echo '<style>
    .about-left-sidebar{
      padding-top:0px !important;
    }
    .image-57{
      width:45%;
    }
    </style>';
}
add_action('wp_head', 'mypage_head');
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-blog-category' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-blog');
}

get_footer('', $args);
?>
<script type="text/javascript">

var divs = document.querySelectorAll(".simplesocialbuttons");
for (var i = 0; i < divs.length; i++) {
  divs[i].innerHTML = "<p style='font-weight:700;'>Share:</p> "+divs[i].innerHTML;
}
</script>
