<?php echo Assets_Package::load('slider'); ?>
<br /><br />
<div class="container">
	<div class="well">
		<?php if(!empty($header)): ?>
		<div class="headline headline-md headline-border"><h4><?php echo $header; ?></h4></div>
		<?php endif; ?>

		<div class="row clients-list">
			<?php foreach($docs as $doc): ?>
			<div><?php echo HTML::image(PUBLIC_URL . $doc['logo'], array('class' => ' img-responsive')); ?></div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<script>
$(function(){
	$('.clients-list').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		prevArrow: '<i class="fa fa-chevron-left fa-2x slick-prev"></i>',
		nextArrow: '<i class="fa fa-chevron-right fa-2x slick-next"></i>'
	  });
});
</script>