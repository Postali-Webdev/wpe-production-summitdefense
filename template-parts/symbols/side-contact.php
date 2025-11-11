<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<div class="request-a-free-consultation" sym="true">
            <div class="sidecontactwrapper">
              <div class="about-heading---prac" data-textarea="ta170f068d"><?php echo _u('ta170f068d', 'textarea','global'); ?></div><img src="<?php echo udesly_get_image(_u('in556d45f5', 'img','global'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in556d45f5', 'img','global'))->alt ?>" class="image-62" data-img="in556d45f5" srcset="<?php echo udesly_get_image(_u('in556d45f5', 'img','global'))->srcset ?>">
              <div class="consultaion-form-content">
                <?php
                echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' );
                ?>
                <!-- <div class="form-block-2 w-form">
                  <form id="email-form-3" name="email-form-3" data-name="Email Form 3" method="get" class="form" data-ajax-action="contact"><input type="text" class="request-field w-input" maxlength="256" name="contact[your-name-]" data-name="Your Name 2" placeholder="* Full Name " id="Your-Name-2" required=""><input type="email" class="text-field-7 request-field w-input" maxlength="256" name="contact[email]" data-name="Email Address 2" placeholder="* Email Address" id="Email-Address-2" required=""><input type="tel" class="text-field-7 request-field w-input" maxlength="256" name="contact[phone-number-]" data-name="Phone Number 2" placeholder="* Phone Number " id="Phone-Number-2" required=""><select id="Are-you-a-new-client-2" name="contact[are-you-a-new-client-]" data-name="Are You A New Client 2" required="" class="contact-field-copy contactfieldselect contact-field-white w-select">
                      <option value="" data-text="t141a4d72"><?php// echo _u('t141a4d72','text','global'); ?></option>
                      <option value="Yes, I am a potential new client." data-text="t7292aa00"><?php //echo _u('t7292aa00','text','global'); ?></option>
                      <option value="No, I'm a current existing client." data-text="tn54127d46"><?php //echo _u('tn54127d46','text','global'); ?></option>
                    </select><textarea placeholder="* Describe your case " maxlength="5000" id="Describe-your-case-3" name="contact[describe-your-case-]" data-name="Describe Your Case 3" required="" class="request-field request-textaread w-input"></textarea>
                    <div class="div-block-113"><input type="submit" value="SUBMIT" data-wait="Please wait..." class="request-consultation-btn w-button"></div>
                  <?php //udesly_honeypot_field() ?></form>
                  <div class="w-form-done">
                    <div data-text="t5a0ea5a1"><?php //echo _u('t5a0ea5a1','text','global'); ?></div>
                  </div>
                  <div class="w-form-fail">
                    <div data-text="tn7c112e99"><?php //echo _u('tn7c112e99','text','global'); ?></div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
