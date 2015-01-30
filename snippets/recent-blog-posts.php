<div class="well">
	<?php if(!empty($header)): ?>
	<div class="headline headline-md">
		<h4><?php echo $header; ?></h4>
	</div>
	<?php endif; ?>
	
	<?php foreach ($docs as $doc): ?>
	<?php echo HTML::anchor(URL::frontend($doc['href']), $doc['header']); ?>
	<br />
	<small class="text-muted date"><?php echo Date::format($doc['created_on']); ?></small><br />
	<?php endforeach; ?>
</div>
