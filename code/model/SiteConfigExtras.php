<?php

/**
 *@author nicolaas [at] sunnysideup.co.nz
 *
 *
 **/

class SiteConfigExtras extends DataExtension
{
    private static $db = array(
        "CopyrightNotice" => "HTMLText",
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            "Root.PageElements",
            $editor = new HTMLEditorField($name = "CopyrightNotice", $title = "Copyright notice.")
        );
        $editor->setRows(10);
        
        return $fields;
    }
}
