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
			<div class="row">
				<div class="col-md-9 col-sm-8">
					<?php Block::run('body'); ?>
				</div>
				<div class="col-md-3 col-sm-4">
					<?php Block::run('sidebar'); ?>
				</div>
			</div>
		</div>
		<?php Block::run('body-bottom'); ?>
		
		<?php Block::run('footer'); ?>
		<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.oth/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.oth/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
	</body>
</html>

<?php Block::def('stub'); //Для непредвиденных ситуаций ?>