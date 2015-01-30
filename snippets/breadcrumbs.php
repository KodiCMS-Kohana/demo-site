<div class="breadcrumbs">
	<div class="container">
		<?php if(!empty($crumbs)): ?>
		<ul class="pull-right breadcrumb">
			<?php foreach($crumbs as $cr): ?>
			<?php if($crumbs->is_last()): ?>
			<li class="active"><?php echo $cr->name; ?></li>
			<?php else: ?>
			<li><?php echo HTML::anchor(URL::frontend($cr->url), $cr->name); ?></li>
			<?php endif; ?>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</div>
</div>

<div class="container">
	<h1 class="page-header"><?php echo $page->title(); ?></h1>
</div>