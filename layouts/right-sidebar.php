<!DOCTYPE html>
<html lang="<?php echo I18n::lang(); ?>">
	<head>
		<?php echo Meta::factory($page)
			->add(array('name' => 'author', 'content' => 'KodiCMS'))
			->package(array('jquery', 'bootstrap', 'holder', 'fontawesome', 'demo-assets', 'rating')); ?>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php Block::run('header', array('inversed' => URL::match('/'))); ?>
		<?php Block::run('breadcrumbs'); ?>
		<?php Block::run('body-top'); ?>

		<div class="content container">
			<div class="row">
				<div class="col-md-9 col-sm-8">
					<?php Block::run('body'); ?>
				</div>
				<div class="col-md-3 col-sm-4 sidebar">
					<?php Block::run('sidebar'); ?>
				</div>
			</div>
		</div>
		
		<?php Block::run('body-bottom'); ?>
		
		<?php Block::run('footer'); ?>
	</body>
</html>

<?php Block::def('footer-col-3'); ?>