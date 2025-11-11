<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = [
    "post_type" => "archive-reviews",
    "posts_per_page" => 10,
    "paged" => $paged,
];

$args = apply_filters("udesly/posts/reviews-max-10-paginated", $args);

$query = new WP_Query($args);
?>
<div class="collection-list-wrapper w-dyn-list" udy-collection="archive-reviews">
            <?php if ( $query->have_posts() ) : ?><div role="list" class="w-dyn-items">
              <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="w-dyn-item">
                <div class="div-block-142">
                  <div class="div-block-131"><img src="<?php bloginfo('template_url'); ?>/assets/images/group-242.png" loading="lazy" alt="<?php echo udesly_get_image(_u('in525821bd', 'img'))->alt ?>" class="image-star" data-img="in525821bd" srcset="<?php echo udesly_get_image(_u('in525821bd', 'img'))->srcset ?>">
                    <div class="reviewtitle"><?php echo udesly_get_custom_post_field( $post->ID, "reviewer", "PlainText" ) ?></div>
                    <div class="reviewtext"><?php the_excerpt() ?></div>
                  </div>
                  <div class="div-block-141"></div>
                </div>
              </div><?php endwhile; ?>
            </div>
            <?php else : ?><div class="w-dyn-empty">
              <div>No items found.</div>
            </div><?php endif; ?>
            <?php if ($query->max_num_pages > 0) : ?>
              <?php  wp_pagenavi( array( 'query' => $query ) ); ?>
            <?php endif  ?>
          </div>
<?php wp_reset_postdata(); ?>
