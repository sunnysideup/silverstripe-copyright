<?php

/**
 *@author nicolaas [at] sunnysideup.co.nz
 *
 *
 **/

class CopyrightSiteConfigExtras extends DataExtension
{
    private static $db = [
        'CopyrightNotice' => 'HTMLVarchar',
        'TermsAndConditionsMessage' => 'HTMLVarchar',
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $tabTitle = _t('CopyrightSiteConfigExtras.PAGE_ELEMENTS', 'Page Elements');
        $fields->addFieldToTab(
            'Root.'.$tabTitle,
            $editor = HTMLEditorField::create(
                'CopyrightNotice',
                _t('CopyrightSiteConfigExtras.COPYRIGHT', 'COPYRIGHT')
            )
        );
        $fields->addFieldToTab(
            'Root.Terms',
            $editor = HTMLEditorField::create(
                'TermsAndConditionsMessage',
                'Terms and Conditions Message'
            )
        );
        $editor->setRows(4);

        return $fields;
    }
}
