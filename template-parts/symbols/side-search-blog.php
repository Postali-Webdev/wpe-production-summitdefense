<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<div class="sidemeetteam">
  <div class="searchside">
    <div class="heading-meet-the-team" data-text="tn36059a58">Search</div>
    <div class="w-form" style="padding-bottom:30px;">
      <form role="search" method="post" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" name="email-form-4" class="form-2">
        <input class="text-field-8 w-input" type="search" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="Enter your search" aria-label="search nico" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>">
        <button type="submit" value=" " style="padding:7px 0px 7px 0px;" class="submit-button w-button">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/search.png" loading="lazy" alt="<?php echo udesly_get_image(_u('in4cf71f83', 'img'))->alt ?>" data-img="in4cf71f83" srcset="<?php bloginfo('template_url'); ?>/assets/images/search.png"><?php udesly_honeypot_field() ?>
        </button>
        </form>
      <div class="w-form-done">
        <div data-text="t5a0ea5a1"><?php echo _u('t5a0ea5a1','text'); ?></div>
      </div>
      <div class="w-form-fail">
        <div data-text="tn7c112e99"><?php echo _u('tn7c112e99','text'); ?></div>
      </div>
    </div>
  </div>
</div>
