<?php
// Copyright (c) 2016-2017 Andrea Zanellato
// This file may be used and distributed under the terms of the public license.

class YellowBootstrap
{
	const Version = "0.0.1";
	var $yellow;

	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		if(!$this->yellow->config->isExisting("bootstrapCdnCSS"))
		{
			$this->yellow->config->setDefault("bootstrapCdnCSS", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css");
		}
		if(!$this->yellow->config->isExisting("bootstrapCdnJS"))
		{
			$this->yellow->config->setDefault("bootstrapCdnJS", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js");
		}
	}

	// Handle page extra HTML data
	function onExtra($name)
	{
		$output = NULL;
		if($name == "header")
		{
			$bsCSS  = $this->yellow->config->get("bootstrapCdnCSS");
			$bsJS   = $this->yellow->config->get("bootstrapCdnJS");

			$output .= "<link rel=\"stylesheet\" href=\"{$bsCSS}\">\n";
			$output .= "<script type=\"text/javascript\" src=\"{$bsJS}\"></script>\n";
		}
		return $output;
	}
}

$yellow->plugins->register("bootstrap", "YellowBootstrap", YellowBootstrap::Version);
?>
