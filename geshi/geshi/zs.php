<?php
/*************************************************************************************
 * <zs.php>
 * ---------------------------------
 * Author: Eric Schneider (xbony2)
 * Copyright: (c) 2015 Eric Schneider (xbony2)
 * Date Started: September 27th, 2015
 *
 * ZenScript/MineTweaker language file for GeSHi.
 *
 * CHANGES
 * -------
 * September 27th, 2015 (1.0.0a)
 *  -  First Release
 *
 * For licensing information, see LICENSE.
 *
 ************************************************************************************/

$language_data = array (
		'LANG_NAME' => 'ZenScript',
		'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
		'COMMENT_MULTI' => array('/*' => '*/'),
		'CASE_KEYWORDS' => GESHI_CAPS_LOWER,
		'QUOTEMARKS' => array("'", '"'),
		'ESCAPE_CHAR' => '\\', #Probably
		'KEYWORDS' => array(
				1 => array( #Actual keywords
						'as', 'for', 'import', 'in', 'null', 'val', 'var'
				),
				2 => array( #Built-in/auto imported objects (I'm not sure if they're constants or not, but they SHOULDN'T be set to anything else)
						 'format', 'furnace', 'game', 'recipes', 'vanilla' 
				),
				3 => array( #Global functions
						'max', 'min', 'print'
				)
		),
		'SYMBOLS' => array(
				'(', ')', '[', ']', '{', '}', '+', '-', '*', '/', '%', '=', '<', '>', ':', ';'
		),
		'STYLES' => array(
				'KEYWORDS' => array(
						1 => 'color: #b1b100;',
						2 => 'color: #000000; font-weight: bold;',
						3 => 'color: #000066;'
				),
				'COMMENTS' => array(
						1 => 'color: #808080; font-style: italic;',
						2 => 'color: #808080; font-style: italic;',
						'MULTI' => 'color: #808080; font-style: italic;'
				),
				'ESCAPE_CHAR' => array(
						0 => 'color: #000099; font-weight: bold;'
				),
				'BRACKETS' => array(
						0 => 'color: #66cc66;'
				),
				'STRINGS' => array(
						0 => 'color: #ff0000;'
				),
				'NUMBERS' => array(
						0 => 'color: #cc66cc;'
				),
				'METHODS' => array(
						0 => 'color: #006600;'
				),
				'SYMBOLS' => array(
						0 => 'color: #66cc66;'
				),
				'SCRIPT' => array(
						0 => '',
						1 => '',
						2 => '',
						3 => ''
				)
		),
		'OOLANG' => true,
		'OBJECT_SPLITTER' => '.'
);
