<?php if (!empty($header)): ?>
<div class="headline headline-md headline-border"><h4><?php echo $header; ?></h4></div>
<?php endif; ?>
	
<div class="row">
	<?php foreach($docs as $doc): ?>
	<div class="col-md-4">
		<div class="feature">
			<div class="thumbnail-img">
				<?php echo HTML::image(PUBLIC_URL . $doc['image'], array('class' => 'img-responsive')); ?>
			</div>
			<h4><?php echo $doc['header']; ?></h4>
			<d><?php echo $doc['description']; ?></p>
		</div>
	</div>
	<?php endforeach; ?>
</div>