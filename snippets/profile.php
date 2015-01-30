<div class="row">
	<div class="col-xs-3">
		<?php if(!empty($profile['avatar'])): ?>
		<?php echo HTML::image(PUBLIC_URL . $profile['avatar'], array('class' => 'img-responsive')); ?>
		<?php else: ?>
		<?php echo $user->gravatar(300, NULL, array('class' => 'img-responsive')); ?>
		<?php endif; ?>
	</div>
	<div class="col-xs-9">
		<div class="headline headline-md headline-border">
			<h2><?php echo $profile['header']; ?></h2>
		</div>
		<ul class="list-unstyled">
			<li><strong>Username:</strong> <?php echo $user->username; ?></li>
			<li><strong>Email:</strong> <?php echo HTML::mailto($user->email); ?></li>
			<li><strong><?php echo __('Last login'); ?>:</strong> <?php echo Date::format($user->last_login); ?></li>
			<li></li>
			<li></li>
		</ul>
		
		<?php if ($user->id == Auth::get_id()): ?>
		<?php echo HTML::anchor(URL::frontend('user/edit'), __('Edit profile'), array(
			'class' => 'btn btn-success btn-sm'
		)); ?>
		<?php endif; ?>
	</div>
	
	<?php if(!empty($profile['about'])): ?>
	<div class="col-xs-12">
		<br />
		<div class="well well-lg">
			<div class="headline">
				<h4><?php echo __('About me'); ?></h4>
			</div>
			
			<?php echo $profile['about']; ?>
		</div>
	</div>
	<?php endif; ?>
</div>