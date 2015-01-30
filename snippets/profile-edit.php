<?php if(Auth::get_id() == $document->f_profile_id): ?>
<?php
	$errors = Flash::get('form_errors', array());
	$values = Flash::get('form_values', array());
?>

<?php echo Form::open('/handler/35', array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
	<?php echo Form::token(); ?>
	<?php echo Form::hidden('ds_id', $datasource->id()); ?>
	<?php echo Form::hidden('id', $document->id); ?>

	<div class="well">
		<div class="form-group form-group-lg">
			<label class="control-label col-md-2 col-sm-3"><?php echo __('User name'); ?></label>
			<div class="col-md-10 col-sm-9">
				<?php echo Form::input('header', $document->header, array('class' => 'form-control')); ?>
			</div>
		</div>
	</div>
	<div class="well">
		<?php foreach ($fields as $key => $field): ?>
		<?php if(in_array($key, array('f_profile_id'))) continue; ?>
		<?php echo $field->backend_template($document); ?>
		<?php endforeach; ?>
		
		<hr />
		<button name="commit" class="btn btn-primary"><?php echo __('Save'); ?></button>
	</div>
<?php echo Form::close(); ?>

<script>
$(function() {
	$('#f_about').redactor();
})
</script>
<?php else: ?>
<div class="alert alert-warning">
	<?php echo __('Assess denied'); ?>
</div>
<?php endif; ?>