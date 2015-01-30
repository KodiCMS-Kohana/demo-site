<div class="well">
	<?php if(!empty($header)): ?>
	<div class="headline headline-md headline-border"><h4><?php echo $header; ?></h4></div>
	<?php endif; ?>

	<form action="<?php echo URL::frontend('blog'); ?>">
		<div class="input-group margin-bottom-40">
			<?php echo Form::input('keyword', Request::initial()->query('keyword'), array(
				'class' => 'form-control',
				'placeholder' => __('Search...')
			)); ?>
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit"><?php echo UI::icon('search'); ?></button>
			</span>
		</div>
	</form>
</div>
