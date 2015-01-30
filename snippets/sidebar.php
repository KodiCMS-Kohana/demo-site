<?php if(!empty($header)): ?>
<div class="headline headline-md headline-border">
	<h4><?php echo $header; ?></h4>
</div>
<?php endif; ?>

<?php 
echo recurse_page_sidebar_menu($pages);

function recurse_page_sidebar_menu($pages)
{
	$return = '<ul class="nav nav-pills nav-stacked">';

	foreach ($pages as $p)
	{
		$class = $p['is_active'] ? 'class="active"' : '';
		$return .= '<li ' . $class . '>';
		$return .= HTML::anchor($p['uri'], UI::icon('angle-right fa-fw') . ' ' . $p['title'], array(
			'class' => $p['is_active'] ? 'current' : ''
		));

		if (!empty($p['childs']))
		{
			$return .= recurse_page_sidebar_menu($p['childs']);
		}

		$return .= '</li>';
	}

	$return .= '</ul>';

	return $return;
}
