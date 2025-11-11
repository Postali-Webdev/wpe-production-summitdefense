<?php global $post; ?>

  <?php get_template_part("template-parts/symbols/header-navigation"); ?>
  <header id="hero-overlay" class="section-hb blog-single wf-section">
    <div class="practice-area-container w-container">
      <h1 class="hero-banner-h1"><?php the_title() ?></h1>
    </div>
    <div data-w-id="9b985ae5-b48f-13cf-20bc-2cc0b822c2e0" class="div-block-168"></div>
  </header>
  <div class="section-wrapper wf-section">
    <div class="breadcumbdiv">
      <div class="contentwrapper w-container">
        <div class="breadcrumbs-wrapper">
          <div class="breadcrumbs" data-text="tn7a43f0b8"><?php echo _u('tn7a43f0b8','text'); ?></div>
          <div class="breadcrumbs blog"><?php the_title() ?></div>
        </div>
      </div>
    </div>
    <div class="contentwrapper w-container">
    
	 <?php echo do_shortcode('[wpcode id="15749"]'); ?>
    
      <div class="w-layout-grid domestic-violence-grid">
        <div id="w-node-a92e18fd-15ec-4020-f9a2-65b11877e2fc-2ab4faed" class="practice-area-left-container">
		<div class="ct-text-block blog-meta"><?php the_time(get_option('date_format')); ?> | <?php the_author(); ?> | <span class="blog-cat"><?php the_category(', '); ?></span> </div>
		
         
		  <img src="<?php echo udesly_get_image()->src ?>" loading="lazy" alt="<?php echo udesly_get_image()->alt ?>" class="image-73" srcset="<?php echo udesly_get_image()->srcset ?>">
          <div class="title-block">
            <div class="content-rt selection1 w-richtext"><?php the_content() ?></div>
          </div>
        </div>
        <div id="w-node-a92e18fd-15ec-4020-f9a2-65b11877e34f-2ab4faed" class="about-left-sidebar">
          <?php get_template_part("template-parts/symbols/side-search-blog"); ?>
          <?php get_template_part("template-parts/symbols/side-blog-category"); ?>
		  <?php get_template_part("template-parts/symbols/side-find-yourself-a-passionate-criminal-lawyer-now"); ?>	
        </div>
      </div>
    </div>
    <div class="section-latest-news wf-section">
      <div class="section-container container-resutls w-container">
        <div class="div-block-160-copy">
          <p class="results-matter-copy" data-textarea="ta167d87cc"><span class="header-spanv">latest</span> news</p>
          <div  class="blog-hp-button">
            <div class="border-blue">
              <a href="/blog" class="winning-button w-button" data-text="t78139397" data-link="a2e2fa2">VIEW ALL ARTICLES</a>
            </div>
          </div>
        </div>
      </div>
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
       <div class="collection-list-wrapper-2 w-dyn-list" udy-collection="archive-blog">
             <?php if ( $query->have_posts() ) : ?><div role="list" class="collection-list w-dyn-items">
               <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="collection-item w-dyn-item">
                 <div class="text-block-92"><?php echo get_the_date(); ?></div>
                 <a href="<?php the_permalink() ?>" class="link-blog w-inline-block">
                   <div class="resultstitle-copy"><?php the_title() ?></div>
                 </a>
                 <div class="text-block-91"><?php echo the_excerpt();?></div>
                 <div class="blog-hp-button">
                   <div class="border-blue">
                     <a href="<?php the_permalink() ?>" class="winning-button cr w-button" data-text="t78139397" data-link="a2e2fa2">CONTINE READING</a>
                   </div>
                 </div>
                 <div class="div-block-179"></div>
               </div><?php endwhile; ?>
             </div>
             <?php else : ?><div class="w-dyn-empty">
               <div>No items found.</div>
             </div><?php endif; ?>
           </div>
    </div>
  </div>
  <?php get_template_part("template-parts/symbols/footer"); ?>