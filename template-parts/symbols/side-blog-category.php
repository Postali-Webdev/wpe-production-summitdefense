<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<div class="sidepracticearea">
  <div class="practice-areas-list">
    <div class="practice-areas">
      <div class="practice-area-heading" data-text="t4d47461c">categories</div>
      <div class="sideblue-separator"></div>
      <div class="pacontainer">
        <?php
        $args = array(
          'orderby' => 'name',
          'order' => 'ASC',
          'parent' => 0, 'hide_empty' => 0,
        );
        $categories = get_categories($args);
        foreach($categories as $category) {
          echo '  <p class="about-heading-links practice-area-sidebar-links"><a class="crime-links" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>
          </p>';
          $category=get_categories(
            array( 'parent' => $category->cat_ID )

          );
          foreach ($category as $c) {
            // var_dump($c);
            // what you really want instead of var_dump is something to
            // to create markup-- list items maybe, For example...
            echo ' <div class="div-block-175"><img src="/wp-content/themes/new-summit-defense/assets/images/coolicon_3.png" loading="lazy" alt="/wp-content/themes/new-summit-defense/assets/images/coolicon_3.png" data-img="i1a7a694b" srcset="/wp-content/themes/new-summit-defense/assets/images/coolicon_3.png"><p class="about-heading-links practice-area-sidebar-links"><a class="crime-links sub" href="' . get_category_link($c->term_id) . '">'.$c->cat_name.'</a></p></div>';
          }
        }
        ?>
      </div>
    </div>
  </div>
  <div class="backborderv categories"></div>
</div>
