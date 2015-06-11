<?php

########################################################################
# Extension Manager/Repository config file for ext "stfl_replacer".
#
# Auto generated 16-10-2012 11:44
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Replacer',
	'description' => 'Replacer replaces a /pattern/ with /replacement/ in the generated page output. Documentation here: http://www.stufenlos.net/fileadmin/documentation/stfl_replacer_manual.pdf',
	'category' => 'fe',
	'shy' => 0,
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author' => 'Wolfgang Klinger',
	'author_email' => 'wolfgang@stufenlos.net',
	'author_company' => 'stufenlos.net Medienbüro',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '0.99.0',
	'constraints' => array(
		'depends' => array(
			'php' => '3.0.0-0.0.0',
			'typo3' => '3.5.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:25:"class.tx_stflreplacer.php";s:4:"9d28";s:12:"ext_icon.gif";s:4:"bf25";s:17:"ext_localconf.php";s:4:"be35";s:15:"ext_php_api.dat";s:4:"e266";s:19:"example/example.xml";s:4:"73db";}',
);

?>
