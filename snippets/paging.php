<?php if($total_pages > 1): ?>
<ul class="pagination">
	<?php if ($next_page !== FALSE): ?>
	<li class="pull-left">
		<?php echo HTML::anchor(URL::frontend($pagination->url($next_page)),  '← ' . __('Older posts')); ?>
	<?php endif ?>
	<?php if ($previous_page !== FALSE): ?>
	
		<li class="pull-right">
			<?php echo HTML::anchor(URL::frontend($pagination->url($previous_page)), __('Older posts') . ' →'); ?>
		</li>
	<?php endif ?>
</ul>
<?php endif; ?>