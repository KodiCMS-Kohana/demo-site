<?php defined('SYSPATH') or die('No direct access allowed.');

class Filter_Default extends KodiCMS_Filter_Default {
	
	/**
	 * @param string $text
	 * @return string
	 */
	public function apply($text)
	{
		return Kses::filter($text, Config::get('global', 'allowed_html_tags'));
	}
}