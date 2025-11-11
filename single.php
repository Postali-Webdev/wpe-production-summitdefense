<?php


$args = [
    'wfPage' => '6196d6f593f2dfe42ab4faed',
    'body' => '',
    'head' => 'head/single-archive-blog',
];

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('single-archive-blog');
}
function mypage_head() {
    echo '<style>
    .about-left-sidebar{
      padding-top:0px !important;
    }
    div.simplesocialbuttons.simplesocialbuttons-align-left{
      margin-bottom:50px;
    }
    .title-block{
      margin-bottom:0px !important;
    }
    </style>
    ';
}
add_action('wp_head', 'mypage_head');

get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'single-archive-blog' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('single-archive-blog');
}

get_footer('', $args);
?>
<script>
const elem = document.createElement('p');
elem.innerText = 'Share:';
const target = document.getElementsByClassName("simplesocialbuttons")[0];
target.parentNode.insertBefore(elem, target);
elem.style.fontWeight="700";
elem.style.marginBottom="10px";
</script>
