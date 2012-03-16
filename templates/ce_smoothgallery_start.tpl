<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>

<script type="text/javascript">
/* <![CDATA[ */
function startGallery() {
	var myGallery = new gallery($('<?php echo $this->galleryID; ?>'), {
		timed: <?php echo $this->timed; ?>,
		embedLinks: <?php echo $this->uselinks; ?>,
		showArrows: <?php echo $this->arrows; ?>,
		showCarousel: <?php echo $this->carousel; ?>,
<?php if($this->thumbwidth): ?>
		thumbWidth: <?php echo $this->thumbwidth; ?>,
<?php endif; ?>
<?php if($this->thumbheight): ?>
		thumbHeight: <?php echo $this->thumbheight; ?>,
<?php endif; ?>
<?php if($this->fadeDuration != ''): ?>
		fadeDuration: <?php echo $this->fadeDuration; ?>,
<?php endif; ?>
<?php if($this->delay != ''): ?>
		delay: <?php echo $this->delay; ?>,
<?php endif; ?>
<?php if($this->thumbSpacing != ''): ?>
		thumbSpacing: <?php echo $this->thumbSpacing; ?>,
<?php endif; ?>
<?php if($this->thumbOpacity != ''): ?>
		slideInfoZoneOpacity: <?php echo $this->thumbOpacity; ?>,
<?php endif; ?>
<?php if($this->extCarousel): ?>
		useExternalCarousel: <?php echo $this->extCarousel; ?>,
		carouselElement: '<?php echo $this->carouselElement; ?>',
<?php endif; ?>
		carouselHorizontal: <?php echo $this->scroll; ?>,
		showInfopane: <?php echo $this->infopane; ?>
	});
}
window.addEvent('domready', startGallery);
/* ]]> */
</script>
<div id="<?php echo $this->galleryID; ?>"<?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
