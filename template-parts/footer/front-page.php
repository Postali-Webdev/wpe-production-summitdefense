<script type="text/javascript">var $ = window.jQuery;</script><script src="<?php echo get_template_directory_uri(); ?>/assets/js/webflow.js?v=1642812989" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$('#play-video').on('click', function(e){
e.preventDefault();
$('#video-overlay').addClass('open');
$("#video-overlay").append('<iframe width="80%" height="80%" src="https://www.youtube.com/embed/RBnt-N-mAqY?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
});
$('.video-overlay, .video-overlay-close').on('click', function(e){
e.preventDefault();
close_video();
});
$(document).keyup(function(e){
if(e.keyCode === 27) { close_video(); }
});
function close_video() {
$('.video-overlay.open').removeClass('open').find('iframe').remove();
};
</script>
<script type="text/javascript">
$(document).ready(function() {
   $(".image-56").each(function() {
        var atr = $(this).attr("src");
        if(atr == "") {
            $(this).addClass("imagehide");
        } else {
            $(this).removeClass("imagehide");
        }
    });
});
</script>
