<form class="well well-sm well-border" action="<?php echo URL::frontend('faq'); ?>" id="faq-top">
	<div class="panel-body">
		<div class="input-group">
			<?php echo Form::input('keyword', Request::initial()->query('keyword'), array(
				'class' => 'form-control',
				'placeholder' => __('Have a Question?  Ask or enter a search term here.')
			)); ?>
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit"><?php echo __('Search'); ?></button>
			</span>
		</div>
	</div>
</form>