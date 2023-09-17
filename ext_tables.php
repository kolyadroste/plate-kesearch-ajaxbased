<?php
defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('plate_kesearch_ajaxbased', 'Configuration/TypoScript', 'Plate/KeSearchAjaxbased: Config');
    }
);
