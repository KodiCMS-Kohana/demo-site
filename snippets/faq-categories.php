<?php foreach ($categories as $category): ?>
	<?php if(empty($category['docs'])) continue; ?>
	<div class="well well-border"">
		<div class="headline headline-md headline-border"><h4><?php echo $category['header']; ?></h4></div>
		<?php Snippet::render('faq-list', array('docs' => $category['docs'])); ?>
	</div>
<?php endforeach; ?>