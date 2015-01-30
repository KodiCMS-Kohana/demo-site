<div class="well">
	<div class="headline headline-md">
		<h4><?php echo __('Recent blog posts'); ?></h4>
	</div>
	<?php foreach($docs as $doc): ?>
	<?php echo HTML::anchor(URL::frontend($doc['href']), $doc['header']); ?><br />
	<small class="text-muted date"><?php echo Date::format($doc['created_on']); ?></small><br />
	<?php endforeach; ?>
</div>
