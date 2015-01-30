<div class="well">
	<?php if(!empty($header)): ?>
	<div class="headline headline-md headline-border"><h4><?php echo $header; ?></h4></div>
	<?php endif; ?>

	<ul class="list-unstyled list-inline blog-tags">
		<li><?php echo HTML::anchor(URL::frontend('/blog'), __('All')); ?></li>
		<?php if(!empty($tags)): ?>
		<?php foreach($tags as $tag => $params): ?>
		<li><?php echo HTML::anchor(URL::frontend('/blog/tag/' . $tag), $tag); ?></li>
		<?php endforeach; ?>
		<?php endif; ?>
	</ul>
</div>