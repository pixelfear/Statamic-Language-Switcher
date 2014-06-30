<?php
class Plugin_lang_switch extends Plugin
{

	public function index()
	{
		// Get parameters
		$url      = $this->fetchParam('url', URL::getCurrent());
		$lang     = $this->fetchParam('lang');
		$segment  = $this->fetchParam('segment', 1, 'is_numeric');
		$full_url = $this->fetchParam('full_url', false, null, true);

		// Don't do anything if there's no language specified
		if (!$lang) {
			return $url;
		}

		// Remove the site URL
		$site_url = Config::get('_site_url');
		$url = str_replace($site_url, '', $url);

		// Swap out the segment
		$segments = explode('/', $url);
		$segments[$segment] = $lang;
		$url = join($segments, '/');

		// Make it a full URL if required
		if ($full_url) {
			$url = $site_url . $url;
		}

		return $url;
	}

}
