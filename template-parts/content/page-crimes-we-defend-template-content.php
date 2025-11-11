  <?php get_template_part("template-parts/symbols/header-navigation"); ?>
  <header id="hero-overlay" data-w-id="b922ae35-5310-b3ed-6038-94398d563efd" class="section-hb blog wf-section">
    <div class="practice-area-container w-container">
		<div data-text="t3f15e75d"><h1 class="hero-banner-h1"><?php echo the_title(); ?></h1></div>
    </div>
    <div data-w-id="44a03f47-65f8-0fbc-cb54-b5193739802e" class="div-block-168"></div>
  </header>

  <div class="wf-section">
    <div class="breadcumbdiv">
      <div class="contentwrapper w-container">
        <div class="breadcrumbs-wrapper">
          <div class="breadcrumbs" data-text="tn665ddcfa"> <?php
          if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
          }
          ?></div>
        </div>
      </div>
    </div>
       
    <div class="contentwrapper w-container">
    
     <?php echo do_shortcode('[wpcode id="15749"]'); ?>
     <?php echo do_shortcode('[author_byline]'); ?>
      <div class="w-layout-grid domestic-violence-grid">
        <div class="practice-area-left-container">
          <div class="content-richtext w-richtext" data-richtext="rn3d29bbcf"><?php echo the_content(); ?></div>
        </div>
        <div class="about-left-sidebar">
            
			<div class="topic-cluster">
			
				
			<!-- Topic Clusters -->
		 
				
			
				
			<?php if(has_tag('business-crimes')): ?>
			<div class="topic-cluster-wrapper">
				<?php if ( is_active_sidebar( 'cs-39' ) ) : ?>
				    <?php dynamic_sidebar( 'cs-39' ); ?>
			    <?php endif; ?>	
			</div> 	
			<?php else: ?>
			<?php endif; ?>	
				
			<?php if(has_tag('sex-crimes')): ?>
				<div class="topic-cluster-wrapper">
			
				<?php if ( is_active_sidebar( 'cs-43' ) ) : ?>
				    <?php dynamic_sidebar( 'cs-43' ); ?>
			    <?php endif; ?>	
			
			    </div> 
			<?php else: ?>
			<?php endif; ?>	
				
			<?php if(has_tag('violent-crimes')): ?>
				<div class="topic-cluster-wrapper">
			
				<?php if ( is_active_sidebar( 'cs-44' ) ) : ?>
				    <?php dynamic_sidebar( 'cs-44' ); ?>
			    <?php endif; ?>	
			
			    </div> 
			<?php else: ?>
			<?php endif; ?>	
				
			<?php if(has_tag('dui')): ?>
				
			<div class="topic-cluster-wrapper">
			
				<?php if ( is_active_sidebar( 'cs-48' ) ) : ?>
				    <?php dynamic_sidebar( 'cs-48' ); ?>
			    <?php endif; ?>	
			
			</div> 	
				
		    <div class="topic-cluster-wrapper">
			
				<?php if ( is_active_sidebar( 'cs-47' ) ) : ?>
				    <?php dynamic_sidebar( 'cs-47' ); ?>
			    <?php endif; ?>	
			
			</div> 
			 
			
			<div class="topic-cluster-wrapper">
			
				<?php if ( is_active_sidebar( 'cs-49' ) ) : ?>
				    <?php dynamic_sidebar( 'cs-49' ); ?>
			    <?php endif; ?>	
			
			</div> 	
				
			<div class="topic-cluster-wrapper">
			
				<?php if ( is_active_sidebar( 'cs-46' ) ) : ?>
				    <?php dynamic_sidebar( 'cs-46' ); ?>
			    <?php endif; ?>	
			
			</div>	
			<?php else: ?>
			<?php endif; ?>		
				
				
				
			 
				
			<!-- Areas We Serve -->	
			<?php if(is_page('7312')):?>
				
			<?php endif; ?>		
				
			<!-- DUI -->	
				
			<?php if(is_page('7312')):?>
				
			<?php endif; ?>	
				
			<?php if(is_page('7312')):?>
				
			<?php endif; ?>	
				
			<?php if(is_page('7312')):?>
				
			<?php endif; ?>		
				
			</div> 
			

            <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
                <div class="sidepracticearea" style="margin-top:20px;">
                <div class="side-related-links">
                  <!-- <div class="header-relatedlinks" data-text="tn4ebb0c7c">Related Links</div> -->
                  <!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/group-228-1.png" loading="lazy" alt="<?php echo udesly_get_image(_u('i4b82d9af', 'img'))->alt ?>" class="image-68" data-img="i4b82d9af" srcset="<?php echo udesly_get_image(_u('i4b82d9af', 'img'))->srcset ?>"> -->

              <?php dynamic_sidebar( 'sidebar-6' ); ?>
                </div>
                <div class="backborderv"></div>
                </div>
              <?php endif; ?>

          <?php get_template_part("template-parts/symbols/main-sidebar-content"); ?>
          <?php get_template_part("template-parts/symbols/sideattorneys"); ?>
          <?php get_template_part("template-parts/symbols/side-contact"); ?>
        </div>
      </div>
    </div>
  </div>

             <style>
			.topic-cluster-wrapper {
				padding-top: 35px;
				padding-bottom: 35px;
				position: relative;
				margin-top: 0px;
				background-color: #0f5382;	 
			}
			.topic-cluster-wrapper a {
				padding-top: 18px;
				padding-bottom: 18px;
				padding-left: 37.5px;
				font-size: 21.25px;
				line-height: 25.5px;
				display: block;
			}
			.topic-cluster ul li {
				 padding: 0;
				text-align: left !important;
			}
				.topic-cluster {
				margin-top: 0px;
				margin-bottom: 0px;
			 
				font-family: 'Bebas Neue', sans-serif;
				color: #fff;
				font-size: 53.81px;
				line-height: 50px;
				font-weight: 400;
				text-align: center;
				text-transform: capitalize;
			}
			.topic-cluster nav {
				margin-top: 25px;
			}
		    .topic-cluster {
				margin-bottom: 35px;
			}
			</style>

  <?php get_template_part("template-parts/symbols/footer"); ?>