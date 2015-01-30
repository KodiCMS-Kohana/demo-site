<?php 
$status = Request::initial()->query('status');

$errors = array();
$values = array();
if($status == 0)
{
	$errors = Flash::get('form_errors', array());
	$values = Flash::get('form_values', array());
}
?>

<?php if($status == 1): ?>
<h2><?php echo __('Thank you for your question'); ?></h2>

<?php else: ?>
<div class="well clearfix animated fadeInDown">
	<?php if(!empty($header)): ?>
	<div class="headline headline-border"><h4><?php echo $header; ?></h4></div>
	<?php endif; ?>

	<div id="contact-form">
		<form class="large" method="post" action="/handler/14">
			<?php echo Form::token(); ?>
			<div class="form-group <?php if(isset($errors['header'])): ?>has-error<?php endif; ?>">
				<textarea id="header" name="header" class="form-control" rows="3"><?php echo Arr::get($values, 'header'); ?></textarea>

				<?php if(isset($errors['header'])): ?><span class="help-block"><?php echo $errors['header']; ?></span><?php endif; ?>
			</div>

			<input type="submit" class="btn btn-primary pull-right" value="<?php echo __('Send'); ?>">
		</form>
	</div>
</div>
<?php endif; ?>
