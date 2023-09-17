<?php

namespace AtomicPlan\PlateKesearchAjaxbased\Hooks;

use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class FlexFormHook
{
    /**
     * @param array $dataStructure
     * @param array $identifier
     * @return array
     */
    public function parseDataStructureByIdentifierPostProcess(array $dataStructure, array $identifier): array
    {
        if ($identifier['type'] === 'tca' && $identifier['tableName'] === 'tt_content' && $identifier['dataStructureKey'] === 'ke_search_pi1,list' || $identifier['dataStructureKey'] === 'ke_search_pi3,list') {
            $file = Environment::getPublicPath() . '/typo3conf/ext/plate_kesearch_ajaxbased/Configuration/FlexForms/Extended.xml';
            $content = file_get_contents($file);
            if ($content) {
                $dataStructure['sheets']['additional2'] = GeneralUtility::xml2array($content);
            }
        }
        return $dataStructure;
    }
}