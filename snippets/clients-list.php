<div class="row">
	<?php foreach($docs as $doc): ?>
	<div class="col-md-6">
		<div class="media well">
			<div class="pull-left hidden-xs">
				<?php echo HTML::image(PUBLIC_URL . $doc['logo'], array('class' => ' img-responsive media-object')); ?>
			</div>
			<div class="media-body">
				<div class="headline headline-sm">
					 <h4 class="media-heading" style="padding-top: 0"><?php echo $doc['header']; ?></h4>
				</div>
                <?php echo $doc['description']; ?>
				<p><strong><?php echo __('Website'); ?>:</strong> <?php echo HTML::anchor($doc['website']); ?></p>
			</div>
		</div>
		<br />
	</div>
	<?php endforeach; ?>
</div>