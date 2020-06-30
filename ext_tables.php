<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_NsFacebookComment_domain_model_NsFacebookComment', 'EXT:ns_facebook_comment/Resources/Private/Language/locallang_csh_tx_NsFacebookComment_domain_model_NsFacebookComment.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_NsFacebookComment_domain_model_NsFacebookComment');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ns_facebook_comment/Configuration/TSconfig/ContentElementWizard.txt">'
);
