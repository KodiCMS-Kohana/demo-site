<?php 
$status = Request::initial()->query('status');

$errors = array();
$values = array();

if($status == 'error')
{
	$errors = Flash::get('form_errors', array());
	$values = Flash::get('form_values', array());
}
?>

<?php if($status == 'success'): ?>
<h2><?php echo __('Thank you for your message'); ?></h2>
<?php else: ?>

<?php if(!empty($errors)): ?>
<ul class="list-unstyled">
<?php foreach ($errors as $messages): ?>
	<?php foreach ($messages as $message): ?>
	<li class="text-danger"><?php echo $message['message']; ?></li>
	<?php endforeach; ?>
<?php endforeach; ?>
</ul>
<?php endif; ?>
<div id="contact-form" class="well clearfix animated bounceInUp">
	<div class="headline headline-md">
		<h4><?php echo __('Drop us a line or just say Hello!'); ?></h4>
	</div>
	<hr />
	<form class="large" method="post" action="/handler/17">
		<?php echo Form::token(); ?>
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group <?php if(isset($errors['name'])): ?>has-error<?php endif; ?>">
					<label for="name"><?php echo __('Full Name'); ?> *</label>
					<input type="text" name="name" class="form-control" id="name" value="<?php echo Arr::get($values, 'name'); ?>">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group <?php if(isset($errors['email'])): ?>has-error<?php endif; ?>">
					<label for="email"><?php echo __('Email'); ?> *</label>
					<input type="text" name="email" class="form-control" id="email" value="<?php echo Arr::get($values, 'email'); ?>">
				</div>
			</div>
		</div>
		
		<div class="form-group <?php if(isset($errors['subject'])): ?>has-error<?php endif; ?>">
			<label for="subject"><?php echo __('Subject'); ?> *</label>
			<input type="text" name="subject" class="form-control" id="subject" value="<?php echo Arr::get($values, 'subject'); ?>">
		</div>
		
		<div class="form-group <?php if(isset($errors['message'])): ?>has-error<?php endif; ?>">
			<label for="message"><?php echo __('Message'); ?></label>
			<textarea id="message" name="message" class="form-control" rows="6"><?php echo Arr::get($values, 'message'); ?></textarea>
		</div>

		<input type="submit" class="btn btn-primary btn-lg pull-right" value="<?php echo __('Send Message'); ?>">
	</form>
</div>
<?php endif; ?>