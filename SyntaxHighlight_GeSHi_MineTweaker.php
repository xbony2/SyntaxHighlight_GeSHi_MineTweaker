<?php

if(!defined('MEDIAWIKI'))
	die('This file is a MediaWiki extension, it is not a valid entry point');

$wgShowExceptionDetails = true;

$wgExtensionCredits['parserhooks'][] = array(
		'path' => __FILE__,
		'name' => 'SyntaxHighlight_GeSHi_MineTweaker',
		'descriptionmsg' => 'syntaxhighlight-geshi-minetweaker-desc',
		'version' => '1.0.0a',
		'author' => '[http://ftb.gamepedia.com/User:Xbony2 Eric Schneider (xbony2)]',
		'url' => 'http://help.gamepedia.com/Extension:SyntaxHighlight_GeSHi_MineTweaker',
		'license-name' => 'MIT License'
);

# TODO: Make some code to automatically copy 'SyntaxHighlight_GeSHi_MineTweaker/geshi/geshi/zs.php' to 'SyntaxHighlight_GeSHi/geshi/gesi/zs.php'
