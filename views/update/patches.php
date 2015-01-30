<div class="panel form-horizontal">
	<div class="panel-heading">
		<span class="panel-title"><?php echo __('Patches'); ?></span>
	</div>

	<?php if (!is_dir(PATCHES_FOLDER)): ?>
	<div class="alert alert-danger alert-dark">
		<?php echo UI::icon('lightbulb-o fa-lg'); ?>
		<?php echo __('You need to create a folder :folder and set access rights to :chmod', array(
			':folder' => PATCHES_FOLDER,
			':chmod' => '0777'
		)); ?>
	</div>
	<?php endif; ?>

	<div class="panel-body">
		<?php if (!empty($patches)): ?>
		<h4 class="no-margin-t"><?php echo __('Select patch to apply'); ?></h4>

		<?php echo Form::select('patch', $patches, NULL); ?>
		<?php else: ?>
		<h2><?php echo __('No available patches'); ?></h2>
		<?php endif; ?>
	</div>
</div>