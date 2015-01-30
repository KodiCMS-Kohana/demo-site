<?php if($total_pages > 1): ?>
<div class="container">
	<ul class="pagination pagination-centered pagination-sm">
	<?php if ($first_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($pagination->url($first_page)) ?>" rel="first"><?php echo __('First') ?></a></li>
	<?php endif ?>

	<?php if ($previous_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($pagination->url($previous_page)) ?>" rel="prev"><?php echo __('Previous') ?></a></li>
	<?php endif ?>

	<?php for ($i = 1; $i <= $total_pages; $i++): ?>

		<?php if ($i == $current_page): ?>
			<li class="active">
				<span><?php echo $i ?></span>
			</li>
		<?php else: ?>
			<li>
				<a href="<?php echo HTML::chars($pagination->url($i)) ?>"><?php echo $i ?></a>
			</li>
		<?php endif ?>

	<?php endfor ?>

	<?php if ($next_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($pagination->url($next_page)) ?>" rel="next"><?php echo __('Next') ?></a></li>
	<?php endif ?>

	<?php if ($last_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($pagination->url($last_page)) ?>" rel="last"><?php echo __('Last') ?></a></li>
	<?php endif ?>
	</ul>
</div>
<?php endif; ?>