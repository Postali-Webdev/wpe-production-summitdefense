
<?php get_template_part("template-parts/symbols/header-navigation"); ?>
<div class="div-block-178">
  <div class="container-2 w-container">
    <h1 data-text="tn2c21039d">THIS PAGE DOESN'T SEEM TO EXIST.</h1>
    <form action="<?php echo home_url(''); ?>" class="w-form" method="get" role="search"><label for="search" class="field-label" data-text="t5b6b4673">It looks like the link pointing here was faulty. Maybe try searching?
</label>
      <input type="search" class="search-input w-input" maxlength="256" name="s" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
      value="<?php echo get_search_query() ?>" name="s"
      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"  id="search" required=""><input type="submit" value="Search" class="search-button w-button"><?php global $wp_query; $total_results = $wp_query->found_posts; ?><?php if (is_search()) : ?><div data-node-type="search-result-wrapper">
        <?php if ($total_results > 0) : ?><div data-node-type="search-result-list" class="search-result-list"><?php while(have_posts()) : the_post(); ?><div data-node-type="search-result-item" class="search-result-item">
          <img data-node-type="image" class="image-77" height="auto" loading="lazy" width="auto" src="<?php echo udesly_get_image()->src ?>">
          <a data-node-type="link" class="link-21" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
          <div class="paragraph-9"><?php the_excerpt() ?></div>
          <div data-node-type="block" class="div-block-152 search"><a data-node-type="link" class="winning-button more-results-btn blog search" data-text="tn548b6866" bind="6aaf644b-9357-7a23-85cb-b44b6629878e" data-link="a3fbe8166" href="<?php the_permalink(); ?>">
          CONTINUE READING</a><?php if ($total_results == 0) : ?><a data-node-type="link" class="winning-button more-results-btn blog search" data-text="tn548b6866" data-link="a3fbe8166" href="<?php the_permalink(); ?>">
            <?php echo _u('tn548b6866','text'); ?></a><?php endif  ?></div></div><?php endwhile; ?></div><?php endif  ?><?php if ($total_results == 0) : ?><div data-node-type="search-result-empty"><div data-node-type="block" data-text="tn75764c4"><?php echo _u('tn75764c4','text'); ?>
            </div>
          </div>
        <?php endif  ?>
      </div>
    <?php endif  ?>
  </form>
</div>
</div>
<?php get_template_part("template-parts/symbols/footer"); ?>
