<div class="well">
	<?php if (!empty($header)): ?>
	<div class="headline headline-md headline-border"><h4><?php echo $header; ?></h4></div>
	<?php endif; ?>

	<ul class="nav nav-pills nav-stacked">
		<li>
			<?php echo HTML::anchor(URL::frontend('blog'), UI::icon('angle-right fa-fw') . ' ' . __('All categories')); ?>
		</li>

		<?php foreach ($categories as $category_data): ?>
		<?php foreach ($category_data['tree'] as $category): ?>
		<?php if(Arr::get($category, 'total') < 1) continue;  ?>
		<li <?php if($category['is_active']): ?>class="active"<?php endif; ?>>
			<?php echo HTML::anchor(URL::frontend($category['href']), UI::icon('angle-right fa-fw') . ' ' . $category['header']); ?>
		</li>
		<?php endforeach; ?>
		<?php endforeach; ?>
	</ul>
</div>