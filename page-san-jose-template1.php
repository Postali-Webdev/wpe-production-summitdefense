<?php
/**
* Template Name: Page Location San Jose Criminal Attorneys
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

$args = [
    'wfPage' => '61705fe3535ec8488960fc0a',
    'body' => '',
    'head' => 'head/page-alison-minet-adams',
];

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-san-jose');
}
function mypage_head() {
    echo '<style>
    .locations-h1.subheader{
      font-family: "Open Sans",sans-serif;
      text-transform: none;
      margin-top: 0px;
    }

    @media screen and (min-width: 1920px){
      .locations-h1.subheader{
        font-size: 28px;
        line-height: 34px;
      }
    }
    @media screen and (min-width: 1280px){
      .locations-h1.subheader{
        font-size: 24px;
        line-height: 30px;
      }
    }

    </style>

    ';

}

add_action('wp_head', 'mypage_head');

get_header('', $args);



/* Start the Loop */
while ( have_posts() ) :
    the_post();
    
    udesly_get_content_template( 'page-san-jose-template1' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-san-jose');
}

get_footer('', $args);