<!DOCTYPE html>
<html lang="<?php echo I18n::lang(); ?>">
	<head>
		<?php echo Meta::factory($page)
			->add(array('name' => 'author', 'content' => 'KodiCMS'))
			->package(array('jquery', 'bootstrap::cusotm', 'holder', 'fontawesome', 'demo-assets', 'rating')); 
		?>
	</head>
	<body>
		<?php Block::run('header'); ?>
		<?php Block::run('breadcrumbs'); ?>
		<?php Block::run('body-top'); ?>

		<div class="content container">
			<?php Block::run('body'); ?>
		</div>
		<?php Block::run('body-bottom'); ?>
		
		<?php Block::run('footer'); ?>

		<img src="<?php echo Request::factory('http://piwik.oth/piwik.php?idsite=1&rec=1')->execute()->body(); ?>" />

	</body>
</html>

<?php Block::def('stub'); //Для непредвиденных ситуаций ?>