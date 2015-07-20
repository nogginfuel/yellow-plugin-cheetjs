<?php
// Copyright (c) 2015 Jef Lippiatt, http://nogginfuel.com
// This file may be used and distributed under the terms of the public license.
// Cheet plugin
class YellowCheet
{
	const Version = "0.1.1";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("cheetPluginCdn", "https://raw.githubusercontent.com/namuol/cheet.js/master/");
	}
	
	// Handle page extra HTML data
	function onExtra($name)
	{
		$output = NULL;
		if($name == "footer")
		{
			$pluginCdn = $this->yellow->config->get("cheetPluginCdn");
			$output .= "<script type=\"text/javascript\" src=\"{$pluginCdn}cheet.js\"></script>\n";
		}
		return $output;
	}
}
$yellow->plugins->register("cheet", "YellowCheet", YellowCheet::Version);
?>