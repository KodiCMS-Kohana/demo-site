<?php echo recurse_page_sitemap($pages); ?>

<?php 
function recurse_page_sitemap($pages)
{

	$return = '<ul>';

	foreach ($pages as $p)
	{
		$return .= '<li>';
		$return .= HTML::anchor($p['uri'], $p['title']);
		if(!empty($p['childs']))
		{
			$return .= recurse_page_sitemap($p['childs']);
		}
		$return .= '</li>';
	}

	$return .= '</ul>';

	return $return;
}
?>