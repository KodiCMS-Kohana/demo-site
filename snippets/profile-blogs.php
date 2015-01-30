<br /><br />
<div class="well well-lg">
	<?php if (!empty($header)): ?>
		<div class="headline"><h4><?php echo $header; ?></h4></div>
	<?php endif; ?>

	<div id="masonry-elements">
		<?php foreach ($docs as $doc): ?>
		<div class="feature blog-masonry isotope-item">
			<?php if(!empty($doc['image']) AND array_rand(array(TRUE, FALSE))): ?>
			<div class="feature-image img-overlay">
				<?php echo HTML::anchor($doc['href'], HTML::image(PUBLIC_URL . $doc['image'], array('class' => 'img-responsive'))); ?>
			</div>
			<?php endif; ?>

			<div class="feature-content">
				<h5 class="h3-body-title blog-title">
					<?php echo HTML::anchor(URL::frontend($doc['href']), $doc['header']); ?>
				</h5>
				<p><?php echo Text::limit_words($doc['anounce'], array_rand(array_flip(range(10, 50, 30)))); ?></p>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<?php echo Assets_Package::load('isotope'); ?>
<script>
	$(function() {
		var $masonryElement = $('#masonry-elements');
		$masonryElement.isotope({
			transformsEnabled: false,
			masonry: {
				columnWidth: 250,
				gutterWidth: 20
			}
		});
	})
</script>