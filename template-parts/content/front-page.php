<?php get_template_part("template-parts/symbols/header-navigation"); ?>
      
   <!-- ///////Custom VIdeo Start////////// -->
    <script>
	// YouTube Player API for header BG video

	// Insert the <script> tag targeting the iframe API
	const tag = document.createElement('script');
	tag.src = "https://www.youtube.com/iframe_api";
	const firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	// Get the video ID passed to the data-video attribute
	const bgVideoID = document.querySelector('.js-background-video').getAttribute('data-video');

	// Set the player options
	const playerOptions = {
	  // Autoplay + mute has to be activated (value = 1) if you want to autoplay it everywhere 
	  // Chrome/Safari/Mobile
	  autoplay: 1,
	  mute: 1,
	  autohide: 1, 
	  modestbranding: 1, 
	  rel: 0, 
	  showinfo: 0, 
	  controls: 0, 
	  disablekb: 1, 
	  enablejsapi: 1, 
	  iv_load_policy: 3,
	  // For looping video you have to have loop to 1
	  // And playlist value equal to your currently playing video
	  loop: 1,
	  playlist: bgVideoID,

	}

	// Get the video overlay, to mask it when the video is loaded
	const videoOverlay = document.querySelector('.js-video-overlay');

	// This function creates an <iframe> (and YouTube player)
	// after the API code downloads.
	let ytPlayer;
	function onYouTubeIframeAPIReady() {
	  ytPlayer = new YT.Player('yt-player', {
		width: '1280',
		height: '720',
		videoId: bgVideoID,
		playerVars: playerOptions,
		events: {
		  'onReady': onPlayerReady,
		  'onStateChange': onPlayerStateChange
		}
	  });
	}

	// The API will call this function when the video player is ready.
	function onPlayerReady(event) {
	  event.target.playVideo();

	  // Get the duration of the currently playing video
	  const videoDuration = event.target.getDuration();

	  // When the video is playing, compare the total duration
	  // To the current passed time if it's below 2 and above 0,
	  // Return to the first frame (0) of the video
	  // This is needed to avoid the buffering at the end of the video
	  // Which displays a black screen + the YouTube loader
	  setInterval(function (){
		const videoCurrentTime = event.target.getCurrentTime();
		const timeDifference = videoDuration - videoCurrentTime;

		if (2 > timeDifference > 0) {
		  event.target.seekTo(0);
		}
	  }, 1000);
	}

	// When the player is ready and when the video starts playing
	// The state changes to PLAYING and we can remove our overlay
	// This is needed to mask the preloading
	function onPlayerStateChange(event) {
	  if (event.data == YT.PlayerState.PLAYING) {
		videoOverlay.classList.add('header__video-overlay--fadeOut');
	  }
	}
    </script>

	<div class="header custom-home-bannerexternal-vid">
		
	  <div data-video="1S6J1X4Y2qM" class="header__video js-background-video">
		  <header id="hero-overlay" data-w-id="b922ae35-5310-b3ed-6038-94398d563efd" class="hero-overlay wf-section">
      <div class="hero-container w-container">
        <div class="play-video-wrapper">
          <a href="<?php echo _u('a23','link'); ?>" class="video-lightbox large hp w-inline-block w-lightbox" data-link="a23">
            <script type="application/json" class="w-json">{"items":[{"url":"https://www.youtube.com/watch?v=RBnt-N-mAqY&ab_channel=SummitDefenseCriminalLawyer%2CSanJoseDUIAttorney?autoplay=1","originalUrl":"https://www.youtube.com/watch?v=RBnt-N-mAqY&ab_channel=SummitDefenseCriminalLawyer%2CSanJoseDUIAttorney?autoplay=1","width":940,"height":528,"thumbnailUrl":"https://i.ytimg.com/vi/RBnt-N-mAqY/hqdefault.jpg","html":"<iframe class=\"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FRBnt-N-mAqY%3Fautoplay%3D1%26feature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DRBnt-N-mAqY&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FRBnt-N-mAqY%2Fhqdefault.jpg&args=autoplay%3D1&key=96f1f04c5f4143bcb0f2e68c87d65feb&autoplay=1&type=text%2Fhtml&schema=youtube\" width=\"940\" height=\"528\" scrolling=\"no\" title=\"YouTube embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>","type":"video"}],"group":""}</script>
          </a>
          <div class="html-embed-2 w-embed">
            <p id="play-video" class="video-play-button" data-textarea="ta3f1c06c0"><?php echo _u('ta3f1c06c0', 'textarea'); ?></p>
            <div id="video-overlay" class="video-overlay">
              <a class="video-overlay-close" data-link="a3fbe8166" href="<?php echo _u('a3fbe8166','link'); ?>">×</a>
            </div>
            
          </div>
        </div>
        <div class="hero-div-block hero-content">
          <div class="w-layout-grid grid-lines-hero">
            <div data-w-id="8c07a483-9924-5655-7d8f-05536a2b93e6" style="width:0px" class="div-line-left"></div>
            <div data-w-id="57843c16-b78b-0f24-0906-5b2a03af1ffb" style="-webkit-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="summit-defense-a-professional-law-corporation" data-text="tn7b11e4dd"><?php echo _u('tn7b11e4dd','text'); ?></div>
            <div id="w-node-add6bebc-1d57-992e-a5bb-4c8bd49d4056-ec60fb4d" data-w-id="add6bebc-1d57-992e-a5bb-4c8bd49d4056" style="width:0px" class="div-line-right"></div>
          </div>
		  
          <h2 data-w-id="ae03bd57-cf49-1698-6ca3-40219eff1631" style="-webkit-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="we-refuse-to-lose-2" data-text="tn271a695d">We'll <span class="colorv">Take it</span> from here</h2>
          <div class="w-layout-grid hero-grid">
            <div class="hero-grid1">
              <div style="-webkit-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="div-block-87"><img src="<?php echo udesly_get_image(_u('i220abe97', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i220abe97', 'img'))->alt ?>" class="image-57" data-img="i220abe97" srcset="<?php echo udesly_get_image(_u('i220abe97', 'img'))->srcset ?>">
                <div class="text-block-73" data-text="tn497e1e59"><?php echo _u('tn497e1e59','text'); ?></div>
              </div>
              <div style="-webkit-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="div-block-87"><img src="<?php echo udesly_get_image(_u('i220abe97', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i220abe97', 'img'))->alt ?>" class="image-57" data-img="i220abe97" srcset="<?php echo udesly_get_image(_u('i220abe97', 'img'))->srcset ?>">
                <div class="text-block-73" data-text="tn5d0c6a18"><?php echo _u('tn5d0c6a18','text'); ?></div>
              </div>
            </div>
            <div id="w-node-_899007fb-787a-e0a6-7ce7-cb5d41ab217b-ec60fb4d" class="hero-grid2">
              <div style="-webkit-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="div-block-87"><img src="<?php echo udesly_get_image(_u('i220abe97', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i220abe97', 'img'))->alt ?>" class="image-57" data-img="i220abe97" srcset="<?php echo udesly_get_image(_u('i220abe97', 'img'))->srcset ?>">
                <div class="text-block-73" data-text="tn1346a766"><?php echo _u('tn1346a766','text'); ?></div>
              </div>
              <div style="-webkit-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="div-block-87"><img src="<?php echo udesly_get_image(_u('i220abe97', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i220abe97', 'img'))->alt ?>" class="image-57" data-img="i220abe97" srcset="<?php echo udesly_get_image(_u('i220abe97', 'img'))->srcset ?>">
                <div class="text-block-73" data-text="tn516dcea8"><?php echo _u('tn516dcea8','text'); ?></div>
              </div>
            </div>
          </div>
          <div class="w-layout-grid grid-lines-hero-copy">
            <div data-w-id="b8d7bd31-b574-6a2e-9fc3-7b3f1b2f2860" style="width:0px" class="div-line-left bottom"></div>
            <div class="hero-cta">
              <div class="div-block-85">
                <div data-w-id="6ee51162-978b-b90f-924f-11241210dd63" style="-webkit-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="div-block-86">
                  <a href="/contact-us/" data-w-id="7b92de98-26a4-dded-5e4b-f649ad4c2a86" style="opacity:0;-webkit-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="hero-button w-button" data-text="t54f37e95" data-link="a3f729296"><?php echo _u('t54f37e95','text'); ?></a>
                </div>
                <div data-w-id="2e823e3e-c0c5-4d93-2887-769619c8f21a" style="-webkit-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 15px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="summit-defense-a-professional-law-corporation text-btn" data-textarea="ta6831c13f"><?php echo _u('ta6831c13f', 'textarea'); ?></div>
              </div>
            </div>
            <div id="w-node-b8d7bd31-b574-6a2e-9fc3-7b3f1b2f2863-ec60fb4d" data-w-id="b8d7bd31-b574-6a2e-9fc3-7b3f1b2f2863" style="width:0px" class="div-line-right bottom"></div>
          </div>
        </div>
      </div>
    </header>
		<div class="header__background">
		  <div id="yt-player">
			
		  </div>
		</div>
	  </div>
	</div>


   <!-- ///////Custom VIdeo end////////// -->

 

 
  <?php get_template_part("template-parts/symbols/awards-and-badges-section"); ?>
  <div class="section-bay-area-s-premiere wf-section">
    <div class="section-2 hp w-container">
      <div data-w-id="439e08f0-265a-2e1b-ccd8-5684c4405d65" style="opacity:0" class="div-bay-area-s-premiere">
        <div class="div-bay-area-content">
          <div class="div-block-89">
            <h2 class="heading-hp2" data-textarea="tan16f964e6"><?php echo _u('tan16f964e6', 'textarea'); ?></h2>
            <h3 class="criminal-defense-law-firm" data-text="t693e8639"><?php echo _u('t693e8639','text'); ?></h3>
            <div class="div-block-163"></div>
          </div>
          <div class="over-120-years-of-criminal-defense-experience" data-text="t80512e0"><?php echo _u('t80512e0','text'); ?></div>
        </div>
        <div class="div-block-88"></div>
      </div>
    </div>
    <div class="section3 w-container">
      <div class="div-bay-area-content-2 text-block-59">
        <h1 data-w-id="8a8e8e2f-ce70-6cc9-ddf6-b243d7afc925" style="opacity:0" class="heding-hp2sm" data-textarea="tan3ffc3875"><?php echo _u('tan3ffc3875', 'textarea'); ?></h1>
        <!-- <div class="content-richtext hp w-richtext" data-richtext="rnc19e865"><?php //echo _u('rnc19e865', 'richtext'); ?></div> -->
        <div class="content-richtext hp w-richtext" data-richtext="rnc19e865">
          <p data-w-id="889a56cf-d1b9-4f45-d00e-ea22ceb489cd" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">With over 120 years of cumulative and exclusive <a href="/oakland-criminal-defense-attorney/">Criminal Defense</a> experience, our reputation for aggressive and results-oriented performance, whether in state court or Federal Court, has been <a href="/press/">documented</a> by several Bay Area news channels and <a href="/reviews/">vetted</a> by hundreds of satisfied clients. Our success and industry recognition is the result of our EXCLUSIVE FOCUS on criminal defense; we don’t accept personal injury or family law cases. This single-minded focus allows us to keep pace with the ever-changing landscape of legal doctrine and provide you with the best results possible.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section-when-winning-is-the-only-option wf-section">
    <div class="div-block-159"></div>
    <div class="section-container-3 w-container">
      <div class="w-layout-grid grid-10">
        <div class="div-winning-block">
          <h2 data-w-id="3837667f-9c64-a3f7-9133-d0bca74564d1" style="opacity:0" class="heading-criminal-defense-law-firm" data-textarea="ta27a9a37a"><?php echo _u('ta27a9a37a', 'textarea'); ?></h2>
          <!-- <div data-w-id="a4ae4e8c-e9a1-eef9-e1dd-19507a16c7f4" style="opacity:0" class="winning-text" data-text="tn61a3a220"><?php //echo _u('tn61a3a220','text'); ?></div> -->
          <div data-w-id="a4ae4e8c-e9a1-eef9-e1dd-19507a16c7f4" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="winning-text" data-text="tn61a3a220">Our team of attorneys understands the legal theory and, more importantly, we understand the criminal justice system tasked with carrying out this theory. However, no single attorney knows every part of the law. Often, an attorney will benefit from the perspective of fresh eyes or the wealth of prior experience or motions bank used by other attorneys. Our ability to rely on each other’s prior <a href="/firm-locations/san-jose/" class="link-18">criminal defense</a> experience, knowledge, and prior success allows us to quickly assert your rights and assess the various legal and factual issues of YOUR unique case. This TEAM APPROACH allows us to depend on each other’s unique and diverse experiences to build a practical, effective, and result-oriented defense strategy. Our ability to tap into the wealth of knowledge of two former District Attorneys, a police officer, or the 120 years of cumulative experience in criminal court will translate to better results for you and your family.
          </div>
          <div data-w-id="cf011ae3-4981-d8d8-17db-0f84ba9d2b3f" style="opacity:0" class="div-block-90">
            <a href="/contact-us/" data-w-id="937fec02-1c76-4740-a9e7-24a4da2eb9bb" style="opacity:0" class="winning-button w-button" data-text="t54f37e95" data-link="a23"><?php echo _u('t54f37e95','text'); ?></a>
          </div>
        </div>
        <div id="w-node-_06a30b12-385c-85e3-34ff-5581e29ffdbf-ec60fb4d" data-w-id="06a30b12-385c-85e3-34ff-5581e29ffdbf" style="opacity:0" class="div-winning-video">
          <a href="<?php echo _u('a23','link'); ?>" class="video-lightbox large w-inline-block w-lightbox" data-link="a23">
            <div class="video-lightbox-block large">
              <div class="video-lightbox-overlay">
                <div class="video-lightbox-button"></div>
              </div>
            </div>
            <script type="application/json" class="w-json">{"items":[{"url":"https://www.youtube.com/watch?v=AaYtfOA0LcQ?autoplay=1","originalUrl":"https://www.youtube.com/watch?v=AaYtfOA0LcQ?autoplay=1","width":940,"height":528,"thumbnailUrl":"https://i.ytimg.com/vi/AaYtfOA0LcQ/hqdefault.jpg","html":"<iframe class=\"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FAaYtfOA0LcQ%3Fautoplay%3D1%26feature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DAaYtfOA0LcQ&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FAaYtfOA0LcQ%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&autoplay=1&type=text%2Fhtml&schema=youtube\" width=\"940\" height=\"528\" scrolling=\"no\" title=\"YouTube embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>","type":"video"}],"group":""}</script>
          </a>
        </div>
      </div>
    </div>
    <div class="div-block-158 d-custom-image"><img src="<?php echo udesly_get_image(_u('i5a80ecf7', 'img'))->src ?>" loading="lazy" width="1083" style="opacity:0" data-w-id="ae280cc9-afd8-e790-072d-5e33236bf3d5" alt="<?php echo udesly_get_image(_u('i5a80ecf7', 'img'))->alt ?>" class="image-58" data-img="i5a80ecf7" srcset="<?php echo udesly_get_image(_u('i5a80ecf7', 'img'))->srcset ?>"></div>
  </div>

  <div class="section-featured-practices wf-section">
    <div class="section-hp100 featured w-container">
      <div class="div-how featured">
        <h2 data-w-id="39e89870-146d-32bc-0b55-5e897a17e985" style="opacity:0" class="featured-practice-areas" data-textarea="ta4268a1ef"><?php echo _u('ta4268a1ef', 'textarea'); ?></h2>
      </div>
      <div data-w-id="3a5544f1-b903-1ec7-b77d-f0fb2547b08c" style="opacity:0" class="w-layout-grid grid-4">
        <div data-w-id="d78883ae-d145-a59e-689d-b252686b2506" style="opacity:0" class="practice-area-block">
          <a href="/sex-crimes/" class="practice-links w-inline-block" data-link="a23">
            <h3 class="practice-headings" data-text="tnc950125"><?php echo _u('tnc950125','text'); ?></h3>
          </a>
        </div>
        <div data-w-id="dc518978-9449-2436-cf63-7a3fa5d88a6a" style="opacity:0" class="practice-area-block">
          <a href="/domestic-violence/" class="practice-links w-inline-block" data-link="a23">
            <h3 class="practice-headings-2" data-text="t3f15e75d"><?php echo _u('t3f15e75d','text'); ?></h3>
          </a>
        </div>
        <div data-w-id="774b6846-36c8-444e-84ea-dc3f3311583a" style="opacity:0" class="practice-area-block">
          <a href="/dui/" class="practice-links w-inline-block" data-link="a23">
            <h3 class="practice-headings-3" data-text="t109d8"><?php echo _u('t109d8','text'); ?></h3>
          </a>
        </div>
        <div data-w-id="c180aea6-f2dd-8dd7-7b58-73f2c5d1c35b" style="opacity:0" class="practice-area-block">
          <a href="/drug-crimes/" class="practice-links w-inline-block" data-link="a23">
            <h3 class="practice-headings-4" data-text="tn15cc01bf"><?php echo _u('tn15cc01bf','text'); ?></h3>
          </a>
        </div>
        <div data-w-id="133a0add-5d6f-3c93-4e5f-517cd9726b8f" style="opacity:0" class="practice-area-block">
          <a href="/federal-crimes/" class="practice-links w-inline-block" data-link="a23">
            <h3 class="practice-headings-5" data-text="t84bb4c4"><?php echo _u('t84bb4c4','text'); ?></h3>
          </a>
        </div>
        <div data-w-id="efee6b94-0999-ade9-b495-9b8436f143ce" style="opacity:0" class="practice-area-block">
          <a href="/sex-crimes/sex-offender-registration/" class="practice-links w-inline-block" data-link="a23">
            <h3 class="practice-headings-1" data-textarea="tan2cb8ea74"><?php echo _u('tan2cb8ea74', 'textarea'); ?></h3>
          </a>
        </div>
        <div data-w-id="ea4e36c9-93aa-808b-8419-9e21ce98e200" style="opacity:0" class="practice-area-block">
          <a href="/violent-crimes/assault/" class="practice-links w-inline-block" data-link="a23">
            <h3 class="practice-headings-1" data-text="tn129bf28a">ASSAULT</h3>
          </a>
        </div>
        <div data-w-id="0cc13123-a649-68cc-1a0a-0c13bf5f1fc7" style="opacity:0" class="practice-area-block">
          <a href="/business-crimes/embezzlement/" class="practice-links w-inline-block" data-link="a23">
            <h3 class="practice-headings-1" data-text="t70c7b982"><?php echo _u('t70c7b982','text'); ?></h3>
          </a>
        </div>
      </div>
    </div>
    <div class="practice-button">
      <div data-w-id="8498e55f-5baa-cb86-82c4-d9336db3d405" style="opacity:0" class="border-blue pa">
        <a href="/crimes-we-defend/" class="winning-button w-button" data-text="t2cb1201b" data-link="a321d8589"><?php echo _u('t2cb1201b','text'); ?></a>
      </div>
    </div>
  </div>
  <div class="section-client-testimonials wf-section">
    <div class="section-container w-container">
      <div data-w-id="d0584f61-0477-4d9f-3bc9-4b6b7ab914bb" style="opacity:0" class="div-testimonials">
        <h2 class="client-testimonials" data-textarea="tan4febd617"><?php echo _u('tan4febd617', 'textarea'); ?></h2>
        <div class="_2nd-quote" data-textarea="ta1b11ee9a"><?php echo _u('ta1b11ee9a', 'textarea'); ?></div>
        <div data-delay="3000" data-animation="slide" class="slider w-slider" data-autoplay="true" data-easing="ease" style="opacity:0" data-hide-arrows="false" data-disable-swipe="true" data-w-id="e246e6ac-f03d-8abe-9d84-d2daba81fab7" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
          <div class="mask slide w-slider-mask">
            <div class="slide w-slide">
              <div class="div-slider">
                <div class="slider-text" data-text="tdd0c736"><?php echo _u('tdd0c736','text'); ?></div>
                <div class="slider-author" data-text="tn6abc1f3a"><?php echo _u('tn6abc1f3a','text'); ?></div>
                <div class="slider-title" data-text="tn1573ddc"><?php echo _u('tn1573ddc','text'); ?></div>
              </div>
            </div>
            <div class="slide w-slide">
              <div class="div-slider">
                <div class="slider-text" data-textarea="ta5c288cef"><?php echo _u('ta5c288cef', 'textarea'); ?></div>
                <div class="slider-author" data-textarea="tan6e508e8b"><?php echo _u('tan6e508e8b', 'textarea'); ?></div>
                <div class="slider-title" data-text="t5bd02320"><?php echo _u('t5bd02320','text'); ?></div>
              </div>
            </div>
            <div class="slide w-slide">
              <div class="div-slider">
                <div class="slider-text" data-text="t7e2f9cb5"><?php echo _u('t7e2f9cb5','text'); ?></div>
                <div class="slider-author" data-textarea="tan3cefc9a3"><?php echo _u('tan3cefc9a3', 'textarea'); ?></div>
                <div class="slider-title" data-textarea="ta76d956d7"><?php echo _u('ta76d956d7', 'textarea'); ?></div>
              </div>
            </div>
          </div>
          <div class="left-arrow-3 w-slider-arrow-left"><img src="<?php echo udesly_get_image(_u('i969ffa0', 'img'))->src ?>" loading="lazy" data-w-id="2ebd4e43-489c-d4a9-778e-44aefab5fd95" alt="<?php echo udesly_get_image(_u('i969ffa0', 'img'))->alt ?>" class="leftarrow" data-img="i969ffa0" srcset="<?php echo udesly_get_image(_u('i969ffa0', 'img'))->srcset ?>"></div>
          <div class="right-arrow-3 w-slider-arrow-right"><img src="<?php echo udesly_get_image(_u('i519f0e04', 'img'))->src ?>" loading="lazy" data-w-id="80d58709-b47f-9ae5-a625-b384f96e651c" alt="<?php echo udesly_get_image(_u('i519f0e04', 'img'))->alt ?>" class="rightarrow" data-img="i519f0e04" srcset="<?php echo udesly_get_image(_u('i519f0e04', 'img'))->srcset ?>"></div>
          <div class="slide-nav w-slider-nav w-slider-nav-invert w-round"></div>
        </div><img src="<?php echo udesly_get_image(_u('in319d2851', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in319d2851', 'img'))->alt ?>" class="image-59" data-img="in319d2851" srcset="<?php echo udesly_get_image(_u('in319d2851', 'img'))->srcset ?>">
      </div>
    </div>
    <div class="section-container press-container w-container">
      <h2 class="work-with-the-bay-area-s-most-experienced-legal-team" data-text="t156c7a6c"><?php echo _u('t156c7a6c','text'); ?></h2><img src="<?php echo udesly_get_image(_u('in44644d3c', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('in44644d3c', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in44644d3c', 'img'))->alt ?>" class="line-divider" data-img="in44644d3c">
      <div class="logo-slider">
        <div data-delay="1000" data-animation="slide" class="slider-4 w-slider" data-autoplay="true" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="450" data-infinite="true">
          <div class="mask-4 w-slider-mask">
            <div class="slide-3 w-slide">
              <div class="div-put">
                <div class="logos1"><img src="<?php echo udesly_get_image(_u('i58ef95f2', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i58ef95f2', 'img'))->alt ?>" class="press-images" data-img="i58ef95f2" srcset="<?php echo udesly_get_image(_u('i58ef95f2', 'img'))->srcset ?>"></div>
              </div>
            </div>
            <div class="slide-3 w-slide">
              <div class="div-put">
                <div class="logos1 _2"><img src="<?php echo udesly_get_image(_u('in354a3ec2', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in354a3ec2', 'img'))->alt ?>" data-img="in354a3ec2" srcset="<?php echo udesly_get_image(_u('in354a3ec2', 'img'))->srcset ?>"></div>
              </div>
            </div>
            <div class="slide-3 w-slide">
              <div class="div-put">
                <div class="logos1 _3"><img src="<?php echo udesly_get_image(_u('in62097254', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in62097254', 'img'))->alt ?>" data-img="in62097254" srcset="<?php echo udesly_get_image(_u('in62097254', 'img'))->srcset ?>"></div>
              </div>
            </div>
            <div class="slide-3 w-slide">
              <div class="div-put">
                <div class="logos1 _4"><img src="<?php echo udesly_get_image(_u('in65860303', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in65860303', 'img'))->alt ?>" data-img="in65860303" srcset="<?php echo udesly_get_image(_u('in65860303', 'img'))->srcset ?>"></div>
              </div>
            </div>
            <div class="slide-3 w-slide">
              <div class="div-put">
                <div class="logos1 _5"><img src="<?php echo udesly_get_image(_u('in1d424a2b', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in1d424a2b', 'img'))->alt ?>" data-img="in1d424a2b" srcset="<?php echo udesly_get_image(_u('in1d424a2b', 'img'))->srcset ?>"></div>
              </div>
            </div>
            <div class="slide-3 w-slide">
              <div class="div-put">
                <div class="logos1 atla"><img src="<?php echo udesly_get_image(_u('i3adad4de', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i3adad4de', 'img'))->alt ?>" data-img="i3adad4de" srcset="<?php echo udesly_get_image(_u('i3adad4de', 'img'))->srcset ?>"></div>
              </div>
            </div>
            <div class="slide-3 w-slide">
              <div class="div-put">
                <div class="logos1 atla"><img src="<?php echo udesly_get_image(_u('in22c0251a', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in22c0251a', 'img'))->alt ?>" data-img="in22c0251a" srcset="<?php echo udesly_get_image(_u('in22c0251a', 'img'))->srcset ?>"></div>
                <div class="logos1 atla"><img src="<?php echo udesly_get_image(_u('in22c0251a', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in22c0251a', 'img'))->alt ?>" data-img="in22c0251a" srcset="<?php echo udesly_get_image(_u('in22c0251a', 'img'))->srcset ?>"></div>
              </div>
            </div>
            <div class="slide-3 w-slide">
              <div class="div-put">
                <div class="logos1 atla"><img src="<?php echo udesly_get_image(_u('in1d8f2f9e', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in1d8f2f9e', 'img'))->alt ?>" data-img="in1d8f2f9e" srcset="<?php echo udesly_get_image(_u('in1d8f2f9e', 'img'))->srcset ?>"></div>
              </div>
            </div>
          </div>
          <a href="<?php echo _u('a-40258945','link'); ?>" class="winning-button more-results-btn w-button" data-text="t690e201f" data-link="a-40258945"><?php echo _u('t690e201f','text'); ?></a>
          <div class="slider-arrow right w-slider-arrow-left">
            <div class="arrow-diagonal"></div><img src="<?php echo udesly_get_image(_u('in24fb7c7e', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in24fb7c7e', 'img'))->alt ?>" data-img="in24fb7c7e" srcset="<?php echo udesly_get_image(_u('in24fb7c7e', 'img'))->srcset ?>">
          </div>
          <div class="slider-arrow left w-slider-arrow-right">
            <div class="arrow-diagonal"></div><img src="<?php echo udesly_get_image(_u('inf3aece3', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('inf3aece3', 'img'))->alt ?>" data-img="inf3aece3" srcset="<?php echo udesly_get_image(_u('inf3aece3', 'img'))->srcset ?>">
          </div>
          <div class="slide-nav-4 w-slider-nav w-slider-nav-invert w-round"></div>
        </div>
        <div data-delay="4000" data-animation="slide" class="slider-team-mobile w-slider" data-autoplay="false" data-easing="ease" style="opacity:0" data-hide-arrows="false" data-disable-swipe="false" data-w-id="62e2629b-d66e-9f8d-0588-16e72a233849" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
          <div class="mask-2 w-slider-mask">
            <div class="team-slider w-slide">
              <div class="logos1"><img src="<?php echo udesly_get_image(_u('i58ef95f2', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i58ef95f2', 'img'))->alt ?>" class="press-images" data-img="i58ef95f2" srcset="<?php echo udesly_get_image(_u('i58ef95f2', 'img'))->srcset ?>"></div>
            </div>
            <div class="team-slider w-slide">
              <div class="logos1 _2"><img src="<?php echo udesly_get_image(_u('in354a3ec2', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in354a3ec2', 'img'))->alt ?>" data-img="in354a3ec2" srcset="<?php echo udesly_get_image(_u('in354a3ec2', 'img'))->srcset ?>"></div>
            </div>
            <div class="team-slider w-slide">
              <div class="logos1 _3"><img src="<?php echo udesly_get_image(_u('in62097254', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in62097254', 'img'))->alt ?>" data-img="in62097254" srcset="<?php echo udesly_get_image(_u('in62097254', 'img'))->srcset ?>"></div>
            </div>
            <div class="team-slider w-slide">
              <div class="logos1 _4"><img src="<?php echo udesly_get_image(_u('in65860303', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in65860303', 'img'))->alt ?>" data-img="in65860303" srcset="<?php echo udesly_get_image(_u('in65860303', 'img'))->srcset ?>"></div>
            </div>
            <div class="team-slider w-slide">
              <div class="logos1 _5"><img src="<?php echo udesly_get_image(_u('in1d424a2b', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in1d424a2b', 'img'))->alt ?>" data-img="in1d424a2b" srcset="<?php echo udesly_get_image(_u('in1d424a2b', 'img'))->srcset ?>"></div>
            </div>
            <div class="team-slider w-slide">
              <div class="logos1 atla"><img src="<?php echo udesly_get_image(_u('i3adad4de', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i3adad4de', 'img'))->alt ?>" data-img="i3adad4de" srcset="<?php echo udesly_get_image(_u('i3adad4de', 'img'))->srcset ?>"></div>
            </div>
            <div class="team-slider w-slide">
              <div class="logos1 atla"><img src="<?php echo udesly_get_image(_u('in1d8f2f9e', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in1d8f2f9e', 'img'))->alt ?>" data-img="in1d8f2f9e" srcset="<?php echo udesly_get_image(_u('in1d8f2f9e', 'img'))->srcset ?>"></div>
            </div>
          </div>
          <a href="<?php echo _u('a-40258945','link'); ?>" class="winning-button press-button w-button" data-text="t690e201f" data-link="a-40258945"><?php echo _u('t690e201f','text'); ?></a>
          <div class="press-left-arrow w-slider-arrow-left">
            <div class="w-icon-slider-left"></div>
          </div>
          <div class="press-right-arrow w-slider-arrow-right">
            <div class="w-icon-slider-right"></div>
          </div>
          <div class="slide-nav-2 w-slider-nav w-slider-nav-invert w-num"></div>
        </div>
      </div>
    </div>
    <div data-w-id="dc12d46d-08f9-cf6f-3a59-3bd6e2198300" style="opacity:0" class="practice-button">
      <div class="border-blue">
        <a href="/reviews/" data-w-id="dc12d46d-08f9-cf6f-3a59-3bd6e2198302" style="opacity:0" class="winning-button w-button" data-text="t18e700e" data-link="a418ff41b"><?php echo _u('t18e700e','text'); ?></a>
      </div>
    </div>
  </div>
  <div class="section-team team wf-section">
    <div class="section-container team w-container">
      <div data-w-id="1a2b1484-d1ae-4afc-0616-1ba16c2107e1" style="opacity:0" class="div-how hp">
        <h2 class="work-with-the-bay-area-s-most-experienced-legal-team" data-textarea="tan323cfba0"><?php echo _u('tan323cfba0', 'textarea'); ?></h2>
        <div class="grid-attorneys">
          <a href="/attorneys/james-reilly/" class="w-inline-block" data-link="a-6a86123a">
            <div data-w-id="7da9fbef-538e-1bf0-3a03-f123dcc0d31b" class="attorney">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t5299251f"><?php echo _u('t5299251f','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/rabin-nabizadeh/" class="w-inline-block" data-link="a164162b7">
            <div data-w-id="e8450078-3fa9-7f4d-15d3-2973edaa9408" class="attorney-2">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t69eac49e"><?php echo _u('t69eac49e','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/deepti-sethi/" class="w-inline-block" data-link="a-2f9ba90f">
            <div data-w-id="e930ad76-d91e-4c4b-f718-5617ea105dd9" class="attorney-3">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="tn3f26c3bc"><?php echo _u('tn3f26c3bc','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/mario-andrews/" class="w-inline-block" data-link="a-2659c25d">
            <div data-w-id="f607f35a-42ee-cfd1-680a-bc99f2b66ab9" class="attorney-4">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="ta8a3d8a"><?php echo _u('ta8a3d8a','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/collin-moore/" class="w-inline-block" data-link="a-77ebcf42">
            <div data-w-id="8d451d49-4c9f-ee65-5a30-f80b01abbb29" class="attorney-5">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t78891611"><?php echo _u('t78891611','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/alison-minet-adams/" class="w-inline-block" data-link="aeccda59">
            <div data-w-id="90865050-45c0-ffa7-aae4-b38f57e2ee15" class="attorney-6">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-textarea="tan2619c2c7"><?php echo _u('tan2619c2c7', 'textarea'); ?></div>
            </div>
          </a>
          <a href="/attorneys/scott-mossman/" class="w-inline-block" data-link="a-5cc0d190">
            <div data-w-id="8e879b87-03b8-c345-e650-ed9a076e680b" class="attorney-7">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="tn75f91de9"><?php echo _u('tn75f91de9','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/patricia-ann-campi/" class="w-inline-block" data-link="a5c7c17aa">
            <div data-w-id="e5e49ce3-c955-59d5-fd0d-3d68637acd74" class="attorney-8">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t1b0e4569"><?php echo _u('t1b0e4569','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/ross-pytlik/" class="w-inline-block" data-link="a54fb87d9">
            <div data-w-id="fcc41167-07a4-168c-67e3-7d319459fc36" class="attorney-10">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-45px, 257px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="tn18ab0ba"><?php echo _u('tn18ab0ba','text'); ?></div>
            </div>
          </a>
        </div>
        <div class="grid-attorneys1920">
          <a href="/attorneys/james-reilly/" class="w-inline-block" data-link="a-6a86123a">
            <div data-w-id="24dc400c-b9b0-48c4-4e13-44366550cf78" class="attorney">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-moz-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-ms-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);background-color:rgb(15,83,130)" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t5299251f"><?php echo _u('t5299251f','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/rabin-nabizadeh/" class="w-inline-block" data-link="a164162b7">
            <div data-w-id="24dc400c-b9b0-48c4-4e13-44366550cf7d" class="attorney-2">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-moz-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-ms-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);background-color:rgb(15,83,130)" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t69eac49e"><?php echo _u('t69eac49e','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/deepti-sethi/" class="w-inline-block" data-link="a-2f9ba90f">
            <div data-w-id="24dc400c-b9b0-48c4-4e13-44366550cf82" class="attorney-3">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-moz-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-ms-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);background-color:rgb(15,83,130)" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="tn3f26c3bc"><?php echo _u('tn3f26c3bc','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/mario-andrews/" class="w-inline-block" data-link="a-2659c25d">
            <div data-w-id="24dc400c-b9b0-48c4-4e13-44366550cf87" class="attorney-4">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-moz-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-ms-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);background-color:rgb(15,83,130)" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="ta8a3d8a"><?php echo _u('ta8a3d8a','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/collin-moore/" class="w-inline-block" data-link="a-77ebcf42">
            <div data-w-id="24dc400c-b9b0-48c4-4e13-44366550cf8c" class="attorney-5">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-moz-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-ms-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);background-color:rgb(15,83,130)" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t78891611"><?php echo _u('t78891611','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/alison-minet-adams/" class="w-inline-block" data-link="aeccda59">
            <div data-w-id="24dc400c-b9b0-48c4-4e13-44366550cf91" class="attorney-6">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-moz-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-ms-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);background-color:rgb(15,83,130)" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-textarea="tan2619c2c7"><?php echo _u('tan2619c2c7', 'textarea'); ?></div>
            </div>
          </a>
          <a href="/attorneys/scott-mossman/" class="w-inline-block" data-link="a-5cc0d190">
            <div data-w-id="24dc400c-b9b0-48c4-4e13-44366550cf98" class="attorney-7">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-moz-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-ms-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);background-color:rgb(15,83,130)" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="tn75f91de9"><?php echo _u('tn75f91de9','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/patricia-ann-campi/" class="w-inline-block" data-link="a5c7c17aa">
            <div data-w-id="24dc400c-b9b0-48c4-4e13-44366550cf9d" class="attorney-8">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-moz-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-ms-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);background-color:rgb(15,83,130)" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t1b0e4569"><?php echo _u('t1b0e4569','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/ross-pytlik/" class="w-inline-block" data-link="a54fb87d9">
            <div data-w-id="24dc400c-b9b0-48c4-4e13-44366550cfa7" class="attorney-10">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-moz-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);-ms-transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);transform:translate3d(-99px, 363px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(24deg) skew(0, 0);background-color:rgb(15,83,130)" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="tn18ab0ba"><?php echo _u('tn18ab0ba','text'); ?></div>
            </div>
          </a>
        </div>
        <div class="grid-attorneys-568px">
          <a href="/attorneys/james-reilly/" class="w-inline-block" data-link="a-6a86123a">
            <div data-w-id="5dd1201e-3579-ec0d-7709-786f0b681104" class="attorney">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-moz-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-ms-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t5299251f"><?php echo _u('t5299251f','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/rabin-nabizadeh/" class="w-inline-block" data-link="a164162b7">
            <div data-w-id="5dd1201e-3579-ec0d-7709-786f0b68110a" class="attorney-2">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-moz-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-ms-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t69eac49e"><?php echo _u('t69eac49e','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/deepti-sethi/" class="w-inline-block" data-link="a-2f9ba90f">
            <div data-w-id="5dd1201e-3579-ec0d-7709-786f0b681110" class="attorney-3">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-moz-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-ms-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="tn3f26c3bc"><?php echo _u('tn3f26c3bc','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/mario-andrews/" class="w-inline-block" data-link="a-2659c25d">
            <div data-w-id="5dd1201e-3579-ec0d-7709-786f0b681116" class="attorney-4">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-moz-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-ms-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="ta8a3d8a"><?php echo _u('ta8a3d8a','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/collin-moore/" class="w-inline-block" data-link="a-77ebcf42">
            <div data-w-id="5dd1201e-3579-ec0d-7709-786f0b68111c" class="attorney-5">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-moz-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-ms-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t78891611"><?php echo _u('t78891611','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/alison-minet-adams/" class="w-inline-block" data-link="aeccda59">
            <div data-w-id="5dd1201e-3579-ec0d-7709-786f0b681122" class="attorney-6">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-moz-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-ms-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-textarea="tan2619c2c7"><?php echo _u('tan2619c2c7', 'textarea'); ?></div>
            </div>
          </a>
          <a href="/attorneys/scott-mossman/" class="w-inline-block" data-link="a-5cc0d190">
            <div data-w-id="5dd1201e-3579-ec0d-7709-786f0b68112a" class="attorney-7">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-moz-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-ms-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="tn75f91de9"><?php echo _u('tn75f91de9','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/patricia-ann-campi/" class="w-inline-block" data-link="a5c7c17aa">
            <div data-w-id="5dd1201e-3579-ec0d-7709-786f0b681130" class="attorney-8">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-moz-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-ms-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="t1b0e4569"><?php echo _u('t1b0e4569','text'); ?></div>
            </div>
          </a>
          <a href="/attorneys/ross-pytlik/" class="w-inline-block" data-link="a54fb87d9">
            <div data-w-id="5dd1201e-3579-ec0d-7709-786f0b68113c" class="attorney-10">
              <div style="height:100%" class="divattyback">
                <div style="-webkit-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-moz-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);-ms-transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);transform:translate3d(-40px, 250px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(16deg) skew(0, 0);background-color:rgb(15,83,130);height:170px" class="polyblue _1"></div>
              </div>
              <div class="attorneylabel" data-text="tn18ab0ba"><?php echo _u('tn18ab0ba','text'); ?></div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div data-w-id="088c8483-18e7-413e-450c-292b485eb2e2" style="opacity:0" class="practice-button">
      <div class="border-blue">
        <a href="/attorneys/" class="winning-button w-button" data-text="t7dcddbc" data-link="a-3d2d2ab"><?php echo _u('t7dcddbc','text'); ?></a>
      </div>
    </div>
  </div>
  <div class="section-results-matter wf-section">
    <div class="section-container container-resutls w-container">
      <div class="div-block-160">
        <h2 data-w-id="dd038327-4c7a-5587-7249-ef7a92df5ff3" style="opacity:0" class="results-matter" data-textarea="ta1ee426b"><?php echo _u('ta1ee426b', 'textarea'); ?></h2>
        <div data-w-id="cf603b0c-d58f-5aef-3d8e-e1dd62f5f369" style="opacity:0" class="because-your-life-reputation-matter-the-most" data-text="t74a80495"><?php echo _u('t74a80495','text'); ?></div>
        <div data-w-id="3e98e706-c192-c131-5671-2cddd302ca7e" style="opacity:0" class="results-matter-block">
          <div class="results-div">
            <div data-delay="4000" data-animation="slide" class="results-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
              <div class="mask-3 w-slider-mask">
                <div class="results-silder-content w-slide">
                  <div class="results-slider-wrapper">
                    <div class="resultssubheader" data-text="tn42700e93"><?php echo _u('tn42700e93','text'); ?></div>
                    <div class="resultstitle" data-text="t4d49f9c8"><?php echo _u('t4d49f9c8','text'); ?></div>
                    <div class="results-slider-text" data-text="t5916beb"><?php echo _u('t5916beb','text'); ?></div>
                  </div>
                </div>
                <div class="results-silder-content w-slide">
                  <div class="results-slider-wrapper">
                    <div class="resultssubheader" data-textarea="ta77221cd5"><?php echo _u('ta77221cd5', 'textarea'); ?></div>
                    <div class="resultstitle" data-text="tn46256c47"><?php echo _u('tn46256c47','text'); ?></div>
                    <div class="results-slider-text" data-text="tn2a5e7e06"><?php echo _u('tn2a5e7e06','text'); ?></div>
                  </div>
                </div>
                <div class="results-silder-content w-slide">
                  <div class="results-slider-wrapper">
                    <div class="resultssubheader" data-textarea="ta109d8"><?php echo _u('ta109d8', 'textarea'); ?></div>
                    <div class="resultstitle" data-text="t5bf53f58"><?php echo _u('t5bf53f58','text'); ?></div>
                    <div class="results-slider-text" data-textarea="tan951801"><?php echo _u('tan951801', 'textarea'); ?></div>
                  </div>
                </div>
              </div>
              <div data-w-id="c7486def-e706-1dbe-15bf-692bb541abad" class="left-arrow-2 w-slider-arrow-left"><img src="<?php echo udesly_get_image(_u('i51ad2585', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i51ad2585', 'img'))->alt ?>" class="leftarrow results" data-img="i51ad2585" srcset="<?php echo udesly_get_image(_u('i51ad2585', 'img'))->srcset ?>"></div>
              <div data-w-id="c7486def-e706-1dbe-15bf-692bb541abaf" class="right-arrow-2 w-slider-arrow-right"><img src="<?php echo udesly_get_image(_u('i611dcb39', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i611dcb39', 'img'))->alt ?>" class="rightarrow results" data-img="i611dcb39" srcset="<?php echo udesly_get_image(_u('i611dcb39', 'img'))->srcset ?>"></div>
              <div class="slide-nav-3 w-slider-nav w-slider-nav-invert w-round"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-toughest-team-of-local-lawyers-for-your-money wf-section">
    <div class="section-container _3teams w-container">
      <div class="div-header-3">
        <h2 data-w-id="5328bda0-aef6-0e1b-96b2-84be61c58e29" style="opacity:0" class="tough-team" data-textarea="ta5b04e32b"><?php echo _u('ta5b04e32b', 'textarea'); ?></h2>
        <h2 data-w-id="ba059763-0de1-cd80-7f9c-bff47d8bf290" style="opacity:0" class="tough-team _230" data-textarea="ta5b04e32b"><?php echo _u('ta5b04e32b', 'textarea'); ?></h2>
        <div data-w-id="a300b551-d152-b592-cdc5-0a7c3e64ed52" style="opacity:0" class="span-desc" data-text="tn2aa9540b"><?php echo _u('tn2aa9540b','text'); ?></div>
      </div>
    </div>
    <div class="section-container _3box w-container">
      <div data-w-id="a983f2a6-3b83-6288-f075-db2d38b8d782" style="opacity:0" class="div-criminal-defense-wrapper">
        <div class="w-layout-grid grid-team">
          <a data-w-id="388371a6-e726-b0bb-5fb1-c4a257d5f482" style="opacity:0" href="/choosing-defense-lawyer/team-approach/" class="featured-area-wrapper w-inline-block" data-link="a23">
            <div class="filter">
              <div class="image-box pi">
                <div class="content-subheader" data-text="tn72f15df5"><?php echo _u('tn72f15df5','text'); ?></div>
              </div>
            </div>
          </a>
          <a data-w-id="aab62ebd-5394-3c4b-26e6-96debc06c73b" style="opacity:0" href="/criminal-immigration-lawyer/" class="featured-area-wrapper w-inline-block" data-link="a23">
            <div class="filter">
              <div class="image-box pi">
                <div class="content-subheader" data-textarea="ta5bc86c13"><?php echo _u('ta5bc86c13', 'textarea'); ?></div>
              </div>
            </div>
          </a>
          <a data-w-id="abaf87bf-2ae0-7654-e387-73bec53a554f" style="opacity:0" href="/criminal-process/loved-one-arrested-accused/" class="featured-area-wrapper w-inline-block" data-link="a23">
            <div class="filter">
              <div class="image-box pi">
                <div class="content-subheader" data-text="tn53d50a56"><?php echo _u('tn53d50a56','text'); ?></div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-latest-news wf-section">
    <div class="section-container container-resutls w-container">
      <div class="div-block-160-copy">
        <h2 data-w-id="b14cd2bb-97c4-aa54-f9d6-b15c5eb2bbb0" style="opacity:0" class="results-matter-copy" data-textarea="ta167d87cc"><?php echo _u('ta167d87cc', 'textarea'); ?></h2>
        <div data-w-id="ac16bbc2-06ae-073c-94a5-fb620e738eba" style="opacity:0" class="blog-hp-button">
          <div class="border-blue">
            <a href="/blog/" class="winning-button w-button" data-text="t78139397" data-link="a2e2fa2"><?php echo _u('t78139397','text'); ?></a>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/query/blogs-max-3-sorted-by-datetime-reversed') ?>
  </div>

  <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "LegalService",
        "name": "Summit Defense",
        "url": "https://summitdefense.com/",
        "image": "https://summitdefense.com/wp-content/themes/new-summit-defense/assets/images/summit-defense-logo-img.png",
        "priceRange": "$$",
        "telephone": "415-666-2316",
        "hasMap": "https://goo.gl/maps/BYUZ4zNTbp4VLQ6q7",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "San Francisco",
          "addressRegion": "CA",
          "postalCode": "94104",
          "streetAddress": "580 California Street, 12th Floor"
        },
        "sameAs": [
          "https://www.facebook.com/summitdefense/",
          "https://www.linkedin.com/company/summit-defense/about/"
        ],
        "openingHours": "Mo,Tu,We,Th,Fr,Sa,Su, 00:00-23:59"
      }
</script>

<style>
.video-overlay{
   position: relative !important;		
}
.header {
  position: relative;
 /* display: flex;*/
  height: 100vw;
  max-height: 120vh;
  background: #000;
  overflow: hidden;
    
}
.header__background {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 120%;
  height: 0;
  padding-bottom: 66.25%;
  transform: translate(-50%, -50%);
  pointer-events: none;
}
.header__video-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  transition: opacity 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94), visibility 0.5s linear;
}
.header__video-overlay--fadeOut {
  opacity: 0;
  visibility: hidden;
}
.header iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
.header__title {
  position: relative;
  flex: 0 0 auto;
  align-self: center;
  width: 100%;
  font-family: "Permanent Marker", cursive;
  font-size: 50px;
  font-weight: normal;
  text-align: center;
  color: white;
  line-height: 1;
}
</style>
<style type="text/css">
.video-play-button {
position: relative;
 z-index: 10;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    box-sizing: content-box;
    display: block;
    width: 32px;
    height: 44px;
    background: #ffffff1a;
    border-radius: 50%;
    padding: 18px 20px 18px 28px;
    border: 3px solid #ffffff47;
}
.video-play-button:before {
  content: "";
  position: absolute;
  z-index: 0;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  display: block;
  width: 80px;
  height: 80px;
  background: #fff;
  border-radius: 50%;
  animation: pulse-border 1500ms ease-out infinite;
}
.video-play-button:after {
  content: "";
  position: absolute;
  z-index: 1;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  display: block;
  width: 80px;
  height: 80px;
  background: #ffffff00;
  border-radius: 50%;
  transition: all 200ms;
}
.video-play-button:hover:after {
  background-color: darken(#fa183d, 10%);
}
.video-play-button img {
  position: relative;
  z-index: 3;
  max-width: 100%;
  width: auto;
  height: auto;
}
.video-play-button span {
  display: block;
  position: relative;
  z-index: 3;
  width: 0;
  height: 0;
  border-left: 32px solid #fff;
	border-top: 22px solid transparent;
	border-bottom: 22px solid transparent;
}
@keyframes pulse-border {
  0% {
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    opacity: 1;
  }
  100% {
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
    opacity: 0;
  }
}
.video-overlay {
  position: fixed;
  z-index: -1;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0,0,0,0.80);
  opacity: 0;
  transition: all ease 500ms;
}
.video-overlay.open {
  position: fixed;
  z-index: 1000;
  opacity: 1;
}
.video-overlay-close {
  position: absolute;
  z-index: 1000;
  top: 15px;
  right: 20px;
  font-size: 36px;
  line-height: 1;
  font-weight: 400;
  color: #fff;
  text-decoration: none;
  cursor: pointer;
  transition: all 200ms;
}
.video-overlay-close:hover {
  color: #fa183d;
}
.video-overlay iframe {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  /* width: 90%; */
  /* height: auto; */
  box-shadow: 0 0 15px rgba(0,0,0,0.75);
}
	.header .hero-container{
		z-index: 255;
	}
</style>

<style type="text/css">
.video-play-button {
position: relative;
 z-index: 10;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    box-sizing: content-box;
    display: block;
    width: 32px;
    height: 44px;
    background: #ffffff1a;
    border-radius: 50%;
    padding: 18px 20px 18px 28px;
    border: 3px solid #ffffff47;
}
.video-play-button:before {
  content: "";
  position: absolute;
  z-index: 0;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  display: block;
  width: 80px;
  height: 80px;
  background: #fff;
  border-radius: 50%;
  animation: pulse-border 1500ms ease-out infinite;
}
.video-play-button:after {
  content: "";
  position: absolute;
  z-index: 1;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  display: block;
  width: 80px;
  height: 80px;
  background: #ffffff00;
  border-radius: 50%;
  transition: all 200ms;
}
.video-play-button:hover:after {
  background-color: darken(#fa183d, 10%);
}
.video-play-button img {
  position: relative;
  z-index: 3;
  max-width: 100%;
  width: auto;
  height: auto;
}
.video-play-button span {
  display: block;
  position: relative;
  z-index: 3;
  width: 0;
  height: 0;
  border-left: 32px solid #fff;
	border-top: 22px solid transparent;
	border-bottom: 22px solid transparent;
}
@keyframes pulse-border {
  0% {
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    opacity: 1;
  }
  100% {
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
    opacity: 0;
  }
}
.video-overlay {
  position: fixed;
  z-index: -1;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0,0,0,0.80);
  opacity: 0;
  transition: all ease 500ms;
}
.video-overlay.open {
  position: fixed;
  z-index: 1000;
  opacity: 1;
}
.video-overlay-close {
  position: absolute;
  z-index: 1000;
  top: 15px;
  right: 20px;
  font-size: 36px;
  line-height: 1;
  font-weight: 400;
  color: #fff;
  text-decoration: none;
  cursor: pointer;
  transition: all 200ms;
}
.video-overlay-close:hover {
  color: #fa183d;
}
.video-overlay iframe {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  /* width: 90%; */
  /* height: auto; */
  box-shadow: 0 0 15px rgba(0,0,0,0.75);
}

@media screen and (max-width: 768px){
div.header__background{
    display:none;
}
}

</style>
  <?php get_template_part("template-parts/symbols/footer"); 