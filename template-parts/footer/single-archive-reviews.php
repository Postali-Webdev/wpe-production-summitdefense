<script>
$('#play-video').on('click', function(e){
e.preventDefault();
$('#video-overlay').addClass('open');
$("#video-overlay").append('<iframe width="80%" height="80%" src="https://www.youtube.com/embed/yT1lmO9-dwE?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
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