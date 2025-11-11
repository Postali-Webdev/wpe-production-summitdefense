
  <?php get_template_part("template-parts/symbols/header-navigation"); ?>
  <header id="hero-overlay" data-w-id="b922ae35-5310-b3ed-6038-94398d563efd" class="section-hb blog wf-section">
    <div class="practice-area-container w-container">
      <h1 class="hero-banner-h1 heading-white" data-text="t1f27a2"><?php echo _u('t1f27a2','text'); ?></h1>
    </div>
    <div data-w-id="fd269543-3509-ff38-9e03-dc2a6a35bc26" class="div-block-168"></div>
  </header>
  <div class="section-wrapper wf-section">
    <div class="breadcumbdiv">
      <div class="contentwrapper w-container">
        <div class="breadcrumbs-wrapper">
          <!-- <div class="breadcrumbs" data-text="t15b5c16a"><?php //echo _u('t15b5c16a','text'); ?></div> -->
            <div class="breadcrumbs" data-text="t15b5c16a">
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
      <div class="w-layout-grid domestic-violence-grid">
        <div class="practice-area-left-container">
          <div class="title-block">
            <div class="div-block-135 blog">
              <h2 class="content-title" data-text="t49de7a95">SUMMIT CRIMINAL DEFENSE BLOG</h2>
              <h3 data-text="t49de7a95" style="margin-top:0px !important; padding-top:0px !important;margin-bottom:0px !important;">Tag:<?php single_tag_title(); ?></h2>
            </div>
            <div>
              <?php get_template_part('template-parts/query/blog-tag') ?>
            </div>
          </div>
        </div>
        <div class="about-left-sidebar">
          <?php get_template_part("template-parts/symbols/side-search-blog"); ?>
          <?php get_template_part("template-parts/symbols/side-blog-category"); ?>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part("template-parts/symbols/footer"); ?>
