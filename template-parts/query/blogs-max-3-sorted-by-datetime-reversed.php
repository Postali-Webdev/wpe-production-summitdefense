<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
$paged = isset($args["paged"]) ? $args["paged"] : 1;

$args = [
    "post_type" => "post",
    "posts_per_page" => 3,
    "order" => "DESC",
    "paged" => $paged,
];

$args = apply_filters(
    "udesly/posts/blogs-max-3-sorted-by-datetime-reversed",
    $args
);

$query = new WP_Query($args);
?>
<div data-w-id="06249581-1db5-3a8e-8db9-07746395d95d" style="opacity:0" class="collection-list-wrapper-2 w-dyn-list" udy-collection="archive-blog">
      <?php if ( $query->have_posts() ) : ?><div role="list" class="collection-list w-dyn-items">
        <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="collection-item w-dyn-item">
          <div class="text-block-92"><?php echo get_the_date(); ?></div>
          <a href="<?php the_permalink() ?>" class="link-blog w-inline-block">
            <div class="resultstitle-copy"><?php the_title() ?></div>
          </a>
          <div class="text-block-91"><?php echo the_excerpt();?></div>
          <div data-w-id="ac16bbc2-06ae-073c-94a5-fb620e738eba" style="opacity:0" class="blog-hp-button">
            <div class="border-blue">
              <a href="<?php the_permalink() ?>" class="winning-button cr w-button" data-text="t78139397" data-link="a2e2fa2">CONTINUE READING</a>
            </div>
          </div>
          <div data-w-id="2a5a7867-ffa7-8c03-c390-b38209e460a5" style="opacity:0" class="div-block-179"></div>
        </div><?php endwhile; ?>
      </div>
      <?php else : ?><div class="w-dyn-empty">
        <div>No items found.</div>
      </div><?php endif; ?>
    </div>
<?php wp_reset_postdata(); ?>
