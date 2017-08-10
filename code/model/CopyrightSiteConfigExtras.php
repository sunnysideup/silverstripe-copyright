<?php

/**
 *@author nicolaas [at] sunnysideup.co.nz
 *
 *
 **/

class CopyrightSiteConfigExtras extends DataExtension
{
    private static $db = [
        'CopyrightNotice' => 'HTMLVarchar'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $tabTitle = _t('CopyrightSiteConfigExtras.PAGE_ELEMENTS', 'Page Elements');
        $fields->addFieldToTab(
            'Root.'.$tabTitle,
            $editor = HTMLEditorField::create(
                'CopyrightNotice',
                _t('CopyrightSiteConfigExtras.COPYRIGHT', 'COPYRIGHT'))
        );
        $editor->setRows(4);

        return $fields;
    }
}
