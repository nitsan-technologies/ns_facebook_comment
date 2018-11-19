<?php 
defined('TYPO3_MODE') or die();

$_EXTKEY = 'ns_facebook_comment';

/***************
 * Plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Nitsan.' . $_EXTKEY,
	'NsFacebookComment',
	'ns_facebook_comment'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . 'nsfacebookcomment';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'recursive,select_key,pages';    

/* Flexform setting  */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForm/FlexForm.xml');
