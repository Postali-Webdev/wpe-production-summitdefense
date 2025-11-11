<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<div class="request-a-free-consultation" sym="true">
            <div class="sidecontactwrapper">
              <div class="about-heading---prac" data-textarea="ta170f068d">Apply Now </div><img src="<?php echo udesly_get_image(_u('in556d45f5', 'img','global'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in556d45f5', 'img','global'))->alt ?>" class="image-62" data-img="in556d45f5" srcset="<?php echo udesly_get_image(_u('in556d45f5', 'img','global'))->srcset ?>">
              <div class="consultaion-form-content">
                <?php
                echo do_shortcode( '[gravityform id="2" title="false" description="false" ajax="true"]' );
                ?>
                
              </div>
            </div>
          </div>