<?php if (!empty($header)): ?>
<div class="headline headline-md headline-border"><h4><?php echo $header; ?></h4></div>
<?php endif; ?>

<?php echo recurse_page_sidebar_menu($pages);
function recurse_page_sidebar_menu($pages)
{

	$return = '<ul class="nav nav-pills nav-stacked">';

	foreach ($pages as $page)
	{
		$class = $page['is_active'] ? 'class="active"' : '';
		$return .= '<li ' . $class . '>';
		$return .= HTML::anchor($page['url'], UI::icon('angle-right fa-fw') . ' ' . $page['title']);

		if (!empty($page['childs']))
		{
			$return .= recurse_page_menu($page['childs']);
		}

		$return .= '</li>';
	}

	$return .= '</ul>';

	return $return;
}
