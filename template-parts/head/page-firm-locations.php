<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1" name="viewport">
<?php wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', [], '1642411602'); ?>
<?php wp_enqueue_style('webflow', get_template_directory_uri() . '/assets/css/webflow.css', [], '1642411602'); ?>
<?php wp_enqueue_style('new-summit-defensewebflow', get_template_directory_uri() . '/assets/css/new-summit-defense.webflow.css', [], '1642411602'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
<script type="text/javascript">WebFont.load({
google: {
families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Roboto:regular,italic,500,700","Bebas Neue:regular"]
}});</script>
<!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png?v=1642411602" rel="shortcut icon" type="image/x-icon">
<link href="<?php echo get_template_directory_uri(); ?>/assets/images/webclip.png?v=1642411602" rel="apple-touch-icon">
<style>
.w-slider-nav-invert>div {
background-color: rgb(235 243 249);
}
.w-slider-nav-invert>div.w-active {
background-color: #0f5382;
}
</style>
<script>
new google.maps.Map(document.getElementById("map"), {
zoom,
center,
gestureHandling: "none",
zoomControl: false,
minZoom: zoom - 4,
maxZoom: zoom + 4,
restriction: {
latLngBounds: {
north: -10,
south: -40,
east: 160,
west: 100,
},
},
});
</script>