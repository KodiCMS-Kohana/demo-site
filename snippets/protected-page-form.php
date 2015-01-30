<div class="alert alert-info">
	<p><?php echo __('Page :page is protected, you need input password to access this page', array(':page' => $current_page->title)); ?></p>
</div>

<div class="well">
	<div class="headline headline-border">
		<h4><?php echo __('Enter page password'); ?></h4>
	</div>
	
	<?php echo Form::open($page->url()); ?>
	<div class="form-group form-inline">
		<div class="input-group">
			<?php echo Form::password('password', NULL, array('class' => 'form-control', 'placeholder' => 'Password is: 12345')); ?>
			<div class="input-group-btn">
				<?php echo Form::button('submit', __('Open'), array('class' => 'btn btn-default')); ?>
			</div>
		</div>
	</div>
	<?php echo Form::close(); ?>
</div>