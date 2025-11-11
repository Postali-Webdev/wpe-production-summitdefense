
  <?php get_template_part("template-parts/symbols/header-navigation"); ?>
  <header id="hero-overlay" data-w-id="b922ae35-5310-b3ed-6038-94398d563efd" class="section-hb blog wf-section">
    <div class="practice-area-container w-container">
      <div class="hero-banner-h1" data-text="t3f15e75d"><?php echo the_title(); ?></div>
    </div>
    <div data-w-id="44a03f47-65f8-0fbc-cb54-b5193739802e" class="div-block-168"></div>
  </header>
  <div class="wf-section">
    <div class="breadcumbdiv">
      <div class="contentwrapper w-container">
        <div class="breadcrumbs-wrapper">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="contentwrapper w-container">
    
    <?php echo do_shortcode('[wpcode id="15749"]'); ?>
    
      <div class="w-layout-grid domestic-violence-grid">

        <div class="practice-area-left-container">
          <div class="content-richtext w-richtext" data-richtext="rn3d29bbcf"><?php echo the_content(); ?></div>
        </div>


        <div class="about-left-sidebar">
          <?php get_template_part("template-parts/symbols/main-sidebar-content"); ?>
          <?php get_template_part("template-parts/symbols/sideattorneys"); ?>
          <?php get_template_part("template-parts/symbols/side-contact"); ?>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part("template-parts/symbols/footer"); ?>