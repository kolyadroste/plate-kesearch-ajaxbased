<?php
defined('TYPO3') || die('Access denied.');

call_user_func(function(){
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][]
        = \AtomicPlan\PlateKesearchAjaxbased\Hooks\FlexFormHook::class;
});