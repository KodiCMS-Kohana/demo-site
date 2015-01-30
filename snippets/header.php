<?php $logo = !Arr::get($params, 'inversed') ? 'logo.png' : 'logo-color.png'; ?>

<div class="navbar <?php if (Arr::get($params, 'inversed')): ?>navbar-inverse<?php endif; ?>">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<i class="fa fa-align-justify"></i>
			</button>
			<?php echo HTML::anchor('', HTML::image(ADMIN_RESOURCES . 'images/' . $logo), array(
				'class' => 'navbar-brand'
			)); ?>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php if (URL::match('/')): ?>class="active"<?php endif; ?>>
					<?php echo HTML::anchor('', 'Home'); ?>
				</li>
				
				<?php foreach($pages as $p): ?>
				<?php if(empty($p['childs'])): ?>
				<li <?php if($p['is_active']): ?>class="active"<?php endif; ?>>
					<?php echo HTML::anchor($p['url'], $p['title']); ?>
				</li>
				<?php else: ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php echo $p['title']; ?>
						<b class="caret"></b>
					</a>
					
					<?php echo recurse_page_menu_demo_site($p['childs']); ?>
				</li>
				<?php endif; ?>
				<?php endforeach; ?>
				
				<?php if(Auth::is_logged_in()): ?>
				<li class="divider-vertical"></li>
				<li class="dropdown user-menu">
					<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
						<i class="fa fa-user"></i> <?php echo Auth::get_username(); ?>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li>
							<?php echo HTML::anchor(ADMIN_DIR_NAME, UI::icon('dashboard') . ' ' . __('Backend')); ?>
						</li>
						<li>
							<?php echo HTML::anchor(URL::frontend('user/profile'), __('Profile')); ?>
						</li>
						<li class="divider"></li>
						<li>
							<?php echo HTML::anchor(Route::get('user')->uri(array('action' => 'logout')), '<i class="fa fa-power-off"></i> ' . __('Logout')); ?>
						</li>
					</ul>
				</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>

<?php 
function recurse_page_menu_demo_site($pages)
{

	$return = '<ul class="dropdown-menu">';

	foreach ($pages as $p)
	{
		$class = $p['is_active'] ? 'class="active"' : '';
		$return .= '<li ' . $class . '>';
		$return .= HTML::anchor($p['url'], $p['title']);
		$return .= '</li>';
	}

	$return .= '</ul>';

	return $return;
}