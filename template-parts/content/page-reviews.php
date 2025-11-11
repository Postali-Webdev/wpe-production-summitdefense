
  <?php get_template_part("template-parts/symbols/header-navigation"); ?>
  <header id="hero-overlay" data-w-id="b922ae35-5310-b3ed-6038-94398d563efd" class="section-hb testimonials wf-section">
    <div class="practice-area-container w-container">
      <p class="hero-banner-h1" data-text="t1590c3d4"><?php echo _u('t1590c3d4','text'); ?></p>
    </div>
    <div data-w-id="993746a4-d986-653f-1bd1-992a22eec0f7" class="div-block-168"></div>
  </header>
  <div class="section-wrapper wf-section">
    <div class="breadcumbdiv">
      <div class="contentwrapper w-container">
        <div class="breadcrumbs-wrapper">
          <div class="breadcrumbs" data-text="t1c91160a"><?php
          if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
          }
          ?></div>
        </div>
      </div>
    </div>
    <div class="contentwrapper w-container">
      <div class="w-layout-grid domestic-violence-grid reviews">
        <div class="practice-area-left-container reviews">
          <div class="title-block">
            <!-- <h2 class="headings-h2" data-text="t4abc5b1e"><?php //echo _u('t4abc5b1e','text'); ?></h2> -->
            <h1 class="headings-h2" data-text="t4abc5b1e"><?php echo _u('t4abc5b1e','text'); ?></h1>
          </div>
          <div class="practice-content-block-1">
            <div class="text-pcontent" data-text="t5ec71ca7"><?php echo _u('t5ec71ca7','text'); ?></div>
          </div>
          <?php get_template_part('template-parts/query/reviews-max-10-paginated') ?>
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
